<?php

use Faker\Factory as Faker;
use App\Models\ParserCompany;
use App\Repositories\ParserCompanyRepository;

trait MakeParserCompanyTrait
{
    /**
     * Create fake instance of ParserCompany and save it in database
     *
     * @param array $parserCompanyFields
     * @return ParserCompany
     */
    public function makeParserCompany($parserCompanyFields = [])
    {
        /** @var ParserCompanyRepository $parserCompanyRepo */
        $parserCompanyRepo = App::make(ParserCompanyRepository::class);
        $theme = $this->fakeParserCompanyData($parserCompanyFields);
        return $parserCompanyRepo->create($theme);
    }

    /**
     * Get fake instance of ParserCompany
     *
     * @param array $parserCompanyFields
     * @return ParserCompany
     */
    public function fakeParserCompany($parserCompanyFields = [])
    {
        return new ParserCompany($this->fakeParserCompanyData($parserCompanyFields));
    }

    /**
     * Get fake data of ParserCompany
     *
     * @param array $postFields
     * @return array
     */
    public function fakeParserCompanyData($parserCompanyFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'source' => $fake->randomDigitNotNull,
            'source_id' => $fake->randomDigitNotNull,
            'city_id' => $fake->randomDigitNotNull,
            'name' => $fake->word,
            'url' => $fake->word,
            'category_id' => $fake->word,
            'display_category_id' => $fake->word,
            'desc' => $fake->text,
            'phone' => $fake->word,
            'address' => $fake->word,
            'email' => $fake->word,
            'website' => $fake->word,
            'work_time' => $fake->word,
            'image_list' => $fake->word,
            'active' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word,
            'deleted_at' => $fake->word
        ], $parserCompanyFields);
    }
}
