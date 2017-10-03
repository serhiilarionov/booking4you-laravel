<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_lang')->delete();
        DB::table('country')->delete();

        DB::table('country')->insert([
            [
                'id' => 1,
                'name_orig' => 'Україна',
                'code' => 'ua',
                'active' => 1,
            ],
        ]);

        DB::table('country_lang')->insert([
            ['country_id' => 1, 'locale' => 'ru', 'name' => 'Украина'],
            ['country_id' => 1, 'locale' => 'en', 'name' => 'Ukraine'],
        ]);
        DB::unprepared("select setval('country_id_seq', (select max(id) + 1 from country));");
    }

}