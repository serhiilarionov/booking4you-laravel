<?php

use Illuminate\Database\Seeder;

class StreetSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('street_lang')->delete();
        DB::table('street')->delete();

        DB::table('street')->insert([
            ['id' => 1, 'name_orig' => 'корнійчука', 'city_id' => 1, 'district_id' => 5, 'street_type_id' => 1],
            ['id' => 2, 'name_orig' => 'вокзальна', 'city_id' => 1, 'district_id' => 1, 'street_type_id' => 1],
            ['id' => 3, 'name_orig' => 'іртишська', 'city_id' => 1, 'district_id' => 3, 'street_type_id' => 1],
            ['id' => 4, 'name_orig' => 'миколаївське', 'city_id' => 1, 'district_id' => 7, 'street_type_id' => 6],
            ['id' => 5, 'name_orig' => 'модрівська', 'city_id' => 1, 'district_id' => 7, 'street_type_id' => 1],
            ['id' => 6, 'name_orig' => 'сагайдачного', 'city_id' => 1, 'district_id' => 5, 'street_type_id' => 1],
            ['id' => 7, 'name_orig' => 'лазаряна', 'city_id' => 2, 'district_id' => 10, 'street_type_id' => 1],
            ['id' => 8, 'name_orig' => 'академіка павлова', 'city_id' => 2, 'district_id' => 12, 'street_type_id' => 1],
            ['id' => 9, 'name_orig' => 'курсантська', 'city_id' => 2, 'district_id' => 15, 'street_type_id' => 1],
            ['id' => 10, 'name_orig' => 'шмідта', 'city_id' => 2, 'district_id' => 12, 'street_type_id' => 1],
            ['id' => 11, 'name_orig' => 'перемоги', 'city_id' => 2, 'district_id' => 10, 'street_type_id' => 12],
            ['id' => 12, 'name_orig' => 'горького', 'city_id' => 2, 'district_id' => 12, 'street_type_id' => 1],
            ['id' => 13, 'name_orig' => 'столичне', 'city_id' => 3, 'district_id' => 16, 'street_type_id' => 6],
            ['id' => 14, 'name_orig' => 'пономарьова', 'city_id' => 3, 'district_id' => 23, 'street_type_id' => 1],
            ['id' => 15, 'name_orig' => 'новоконстантинівська', 'city_id' => 3, 'district_id' => 22, 'street_type_id' => 1],
            ['id' => 16, 'name_orig' => 'північна', 'city_id' => 3, 'district_id' => 20, 'street_type_id' => 1],
            ['id' => 17, 'name_orig' => 'марка черемшини', 'city_id' => 3, 'district_id' => 19, 'street_type_id' => 1],

        ]);

        DB::table('street_lang')->insert([
            ['street_id' => 1, 'locale' => 'ru', 'name' => 'корнейчука'],
            ['street_id' => 1, 'locale' => 'en', 'name' => 'korniychuka'],
            ['street_id' => 2, 'locale' => 'ru', 'name' => 'вокзальная'],
            ['street_id' => 2, 'locale' => 'en', 'name' => 'vokzalna'],
            ['street_id' => 3, 'locale' => 'ru', 'name' => 'иртышская'],
            ['street_id' => 3, 'locale' => 'en', 'name' => 'irtyshska'],
            ['street_id' => 4, 'locale' => 'ru', 'name' => 'николаевское'],
            ['street_id' => 4, 'locale' => 'en', 'name' => 'mykolaivska'],
            ['street_id' => 5, 'locale' => 'ru', 'name' => 'Мопровская'],
            ['street_id' => 5, 'locale' => 'en', 'name' => 'Modrivska'],
            ['street_id' => 6, 'locale' => 'ru', 'name' => 'Сагайдачного'],
            ['street_id' => 6, 'locale' => 'en', 'name' => 'Sagaidachnogo'],
            ['street_id' => 7, 'locale' => 'ru', 'name' => 'лазаряна'],
            ['street_id' => 7, 'locale' => 'en', 'name' => 'lazaryana'],
            ['street_id' => 8, 'locale' => 'ru', 'name' => 'академика павлова'],
            ['street_id' => 8, 'locale' => 'en', 'name' => 'academician pavlov'],
            ['street_id' => 9, 'locale' => 'ru', 'name' => 'курсантская'],
            ['street_id' => 9, 'locale' => 'en', 'name' => 'kursantska'],
            ['street_id' => 10, 'locale' => 'ru', 'name' => 'шмидта'],
            ['street_id' => 10, 'locale' => 'en', 'name' => 'shmidt'],
            ['street_id' => 11, 'locale' => 'ru', 'name' => 'победы'],
            ['street_id' => 11, 'locale' => 'en', 'name' => 'peremogi'],
            ['street_id' => 12, 'locale' => 'ru', 'name' => 'горького'],
            ['street_id' => 12, 'locale' => 'en', 'name' => 'gorkogo'],
            ['street_id' => 13, 'locale' => 'ru', 'name' => 'столичное'],
            ['street_id' => 13, 'locale' => 'en', 'name' => 'stolichne'],
            ['street_id' => 14, 'locale' => 'ru', 'name' => 'пономарёва'],
            ['street_id' => 14, 'locale' => 'en', 'name' => 'ponomareva'],
            ['street_id' => 15, 'locale' => 'ru', 'name' => 'новоконстантиновская'],
            ['street_id' => 15, 'locale' => 'en', 'name' => 'novokonstantinivska'],
            ['street_id' => 16, 'locale' => 'ru', 'name' => 'северная'],
            ['street_id' => 16, 'locale' => 'en', 'name' => 'pivnichna'],
            ['street_id' => 17, 'locale' => 'ru', 'name' => 'марка черемшины'],
            ['street_id' => 17, 'locale' => 'en', 'name' => 'mark cheremshina'],

        ]);
        DB::unprepared("select setval('street_id_seq', (select max(id) + 1 from street));");

//        DB::unprepared(file_get_contents(database_path().'/seeds/sql/street_kryvyi-rih.sql'));
//        DB::unprepared(file_get_contents(database_path().'/seeds/sql/street_dnipropetrovsk.sql'));
//        DB::unprepared(file_get_contents(database_path().'/seeds/sql/street_kyiv.sql'));
    }

}