<?php

use Faker\Factory as Faker;
use App\Models\Street;
use App\Repositories\StreetRepository;

trait MakeStreetTrait
{
    /**
     * Create fake instance of Street and save it in database
     *
     * @param array $streetFields
     * @return Street
     */
    public function makeStreet($streetFields = [])
    {
        /** @var StreetRepository $streetRepo */
        $streetRepo = App::make(StreetRepository::class);
        $theme = $this->fakeStreetData($streetFields);
        return $streetRepo->create($theme);
    }

    /**
     * Get fake instance of Street
     *
     * @param array $streetFields
     * @return Street
     */
    public function fakeStreet($streetFields = [])
    {
        return new Street($this->fakeStreetData($streetFields));
    }

    /**
     * Get fake data of Street
     *
     * @param array $postFields
     * @return array
     */
    public function fakeStreetData($streetFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'city_id' => $fake->randomDigitNotNull,
            'district_id' => $fake->randomDigitNotNull,
            'street_type_id' => $fake->randomDigitNotNull,
            'name_orig' => $fake->word,
            'point' => json_encode([$fake->latitude,$fake->longitude]),
            'bound' => json_encode([$fake->latitude.' '.$fake->longitude,$fake->latitude.' '.$fake->longitude]),
        ], $streetFields);
    }
}
