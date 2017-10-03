<?php

use Illuminate\Database\Seeder;

class LangSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lang')->delete();

        DB::table('lang')->insert([
            [
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'active' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Русский',
                'code' => 'ru',
                'active' => 1,
            ],
        ]);
        DB::unprepared("select setval('lang_id_seq', (select max(id) + 1 from lang));");
    }

}