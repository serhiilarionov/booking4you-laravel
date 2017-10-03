<?php

namespace App\Console\Commands;

use App\Models\City;
use App\Models\Company;
use App\Models\CompanyDetail;
use App\Models\CompanyParse;
use App\Models\ParserCompany;
use GeoJson\Geometry\Point;
use Illuminate\Console\Command;

class ParseMerge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:merge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $companies = CompanyParse::all();

        $arr = [];

        foreach ($companies as $company) {
            if ($company->fulladdress) {

                $location = $company->point;
                $location=implode(',', array_reverse(explode(',', preg_replace('#\(?(\w)\)?#s','$1',$location))));

                $response = \GoogleMaps::load('nearbysearch')
                    ->setParamByKey('location', $location)
                    ->setParamByKey('radius', 50)
                    ->setParamByKey('name', $company->title)
                    ->get();

                $data = json_decode($response);

                if ($data->results) {
                    $data = array_shift($data->results);
                    $placeId = $data->place_id;

                    $place = \GoogleMaps::load('placedetails')
                        ->setParamByKey('placeid', $placeId)
                        ->setParamByKey('language', 'ru')
                        ->getResponseByKey('result.photos');

                    if (isset($place['results']['photos']) && !empty($place['result']['photos'])) {
                        foreach ($place['results']['photos'] as $k => $photo) {
                            $photoRef = $photo['photo_reference'];

                            $photo = \GoogleMaps::load('placephoto')
                                ->setParamByKey('photoreference', $photoRef)
                                ->setParamByKey('maxwidth', 800)
                                ->setParamByKey('maxheight', 600)
                                ->get();


                            file_put_contents(__DIR__ . "/image-$company->id-$k.png", $photo);
                        }
                    }

                } else {
                    $arr[] = $data;
                    continue;
                }
            }
        }


dd($arr);
//
////        dd($placeId);
//
//        $place = \GoogleMaps::load('placedetails')
//            ->setParamByKey('placeid', $placeId)
//            ->setParamByKey('language', 'ru')
//            ->get();
//
//        dd(json_decode($place)->photos);
//            dd($city->name_orig);
//        }




//
        die('done');
//
//
//
//


        print_r($place);die;


        $list = ParserCompany::where('merged_at', null)->get();

        $syncCategoryList = [
            '71' => 21,
            '520' => 26,
        ];


        foreach ($list as $company) {

            $addressList = json_decode($company->address);
            $phoneRawList = json_decode($company->phone);


            if (!is_array($addressList) || !is_array($phoneRawList) || !isset($syncCategoryList[$company->category_id])) {
                continue;
            }

            $address = array_shift($addressList);

            $data = [
                'name' => trim($company->name),
                'title' => trim($company->name),
                'cityid' => $company->city_id,
                'categoryid' => $syncCategoryList[$company->category_id],
                'fulladdress' => $address,
                'active' => 1,
                'createdat' => date('Y-m-d H:i:s'),
                'updatedat' => date('Y-m-d H:i:s'),
            ];

            //format phones
            $phoneList = [];
            foreach ($phoneRawList as $phone) {
                $phoneList[] = [
                    "number" => preg_replace('/\D/i', '', $phone),
                    "code" => "",
                    "operator" => "",
                    "note" => "",
                    "priority" => "1"
                ];
            }


            $response = \GoogleMaps::load('geocoding')
                ->setParam(['address' => 'Киев, ' . $address, 'language' => 'ru'])
                ->get();

            $geocoding = json_decode($response);

            $geocoding = array_shift($geocoding->results);

            $placeId = $geocoding->place_id;

            $place = \GoogleMaps::load('placedetails')
                ->setParamByKey('placeid', $placeId)
                ->getResponseByKey('result.geometry.location');

            print_r($place);
            die;


            $location = $geocoding->geometry->location;

            $data['point'] = "(" . $location->lng . "," . $location->lat . ")";

            $detail = new CompanyDetail([
                'phone' => json_encode($phoneList),
                'email' => '[]',
                'website' => '[]',
                'worktime' => '[{"0":[]},{"1":[{"s":"09:00","e":"13:00"},{"s":"14:00","e":"18:00"}]},{"2":[{"s":"09:00","e":"13:00"},{"s":"14:00","e":"18:00"}]},{"3":[{"s":"09:00","e":"13:00"},{"s":"14:00","e":"18:00"}]},{"4":[{"s":"09:00","e":"13:00"},{"s":"14:00","e":"18:00"}]},{"5":[{"s":"09:00","e":"13:00"},{"s":"14:00","e":"18:00"}]},{"6":[]}]',
                'imagelist' => '[]',

            ]);

            $newCompany = new Company($data);
            $newCompany->save();
            $newCompany->detail()->save($detail);

            $company->merged_at = date('Y-m-d H:i:s');
            $company->save();

            echo $company->name . " done\n";

        }
    }
}
