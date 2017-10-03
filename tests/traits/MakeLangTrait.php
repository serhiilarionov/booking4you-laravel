<?php

use Faker\Factory as Faker;
use App\Models\Lang;
use App\Repositories\LangRepository;

trait MakeLangTrait
{
    /**
     * Create fake instance of Lang and save it in database
     *
     * @param array $langFields
     * @return Lang
     */
    public function makeLang($langFields = [])
    {
        /** @var LangRepository $langRepo */
        $langRepo = App::make(LangRepository::class);
        $theme = $this->fakeLangData($langFields);
        return $langRepo->create($theme);
    }

    /**
     * Get fake instance of Lang
     *
     * @param array $langFields
     * @return Lang
     */
    public function fakeLang($langFields = [])
    {
        return new Lang($this->fakeLangData($langFields));
    }

    /**
     * Get fake data of Lang
     *
     * @param array $postFields
     * @return array
     */
    public function fakeLangData($langFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'code' => $fake->randomNumber(3),
            'active' => 1
        ], $langFields);
    }
}
