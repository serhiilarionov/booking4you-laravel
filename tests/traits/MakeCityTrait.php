<?php

use Faker\Factory as Faker;
use App\Models\City;
use App\Repositories\CityRepository;

trait MakeCityTrait
{
    /**
     * Create fake instance of City and save it in database
     *
     * @param array $cityFields
     * @return City
     */
    public function makeCity($cityFields = [])
    {
        /** @var CityRepository $cityRepo */
        $cityRepo = App::make(CityRepository::class);
        $theme = $this->fakeCityData($cityFields);
        return $cityRepo->create($theme);
    }

    /**
     * Get fake instance of City
     *
     * @param array $cityFields
     * @return City
     */
    public function fakeCity($cityFields = [])
    {
        return new City($this->fakeCityData($cityFields));
    }

    /**
     * Get fake data of City
     *
     * @param array $postFields
     * @return array
     */
    public function fakeCityData($cityFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'slug' => $fake->word,
            'name' => $fake->word,
            'name_orig' => $fake->word,
            'region_id' => $fake->randomDigitNotNull,
            'point' => json_encode([$fake->latitude,$fake->longitude]),
            'bound' => json_encode([$fake->latitude.' '.$fake->longitude,$fake->latitude.' '.$fake->longitude]),
            'active' => 1
        ], $cityFields);
    }
}
