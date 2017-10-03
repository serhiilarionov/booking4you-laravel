<?php

use Illuminate\Database\Seeder;

class StreetTypeSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('street_type_lang')->delete();
        DB::table('street_type')->delete();

        DB::table('street_type')->insert([
            ['id' => 1, 'name_orig' => 'улица'],
            ['id' => 2, 'name_orig' => 'площадь'],
            ['id' => 3, 'name_orig' => 'проспект'],
            ['id' => 4, 'name_orig' => 'переулок'],
            ['id' => 5, 'name_orig' => 'бульвар'],
            ['id' => 6, 'name_orig' => 'шоссе'],
            ['id' => 7, 'name_orig' => 'дорога'],
            ['id' => 8, 'name_orig' => 'проезд'],
            ['id' => 9, 'name_orig' => 'тупик'],
            ['id' => 10, 'name_orig' => 'балка'],
            ['id' => 11, 'name_orig' => 'спуск'],
            ['id' => 12, 'name_orig' => 'набережная'],
            ['id' => 13, 'name_orig' => 'станция'],
            ['id' => 14, 'name_orig' => 'жилой массив'],
        ]);

        DB::table('street_type_lang')->insert([
            ['street_type_id' => 1, 'locale' => 'ru', 'name' => 'улица', 'name_short' => 'ул.'],
            ['street_type_id' => 1, 'locale' => 'en', 'name' => 'street', 'name_short' => 'st'],
            ['street_type_id' => 2, 'locale' => 'ru', 'name' => 'площадь', 'name_short' => 'пл.'],
            ['street_type_id' => 2, 'locale' => 'en', 'name' => 'square', 'name_short' => 'sq'],
            ['street_type_id' => 3, 'locale' => 'ru', 'name' => 'проспект', 'name_short' => 'просп.'],
            ['street_type_id' => 3, 'locale' => 'en', 'name' => 'avenue', 'name_short' => 'ave'],
            ['street_type_id' => 4, 'locale' => 'ru', 'name' => 'переулок', 'name_short' => 'пер.'],
            ['street_type_id' => 4, 'locale' => 'en', 'name' => 'lane', 'name_short' => 'ln'],
            ['street_type_id' => 5, 'locale' => 'ru', 'name' => 'бульвар', 'name_short' => 'б-р'],
            ['street_type_id' => 5, 'locale' => 'en', 'name' => 'boulevard', 'name_short' => 'blvd'],
            ['street_type_id' => 6, 'locale' => 'ru', 'name' => 'шоссе', 'name_short' => 'ш.'],
            ['street_type_id' => 6, 'locale' => 'en', 'name' => 'highway', 'name_short' => 'hwy'],
            ['street_type_id' => 7, 'locale' => 'ru', 'name' => 'дорога', 'name_short' => 'дор.'],
            ['street_type_id' => 7, 'locale' => 'en', 'name' => 'road', 'name_short' => 'rd'],
            ['street_type_id' => 8, 'locale' => 'ru', 'name' => 'проезд', 'name_short' => 'пр.'],
            ['street_type_id' => 8, 'locale' => 'en', 'name' => 'pass', 'name_short' => 'pass'],
            ['street_type_id' => 9, 'locale' => 'ru', 'name' => 'тупик', 'name_short' => 'тупик'],
            ['street_type_id' => 9, 'locale' => 'en', 'name' => 'end', 'name_short' => 'end'],
            ['street_type_id' => 10, 'locale' => 'ru', 'name' => 'балка', 'name_short' => 'балка'],
            ['street_type_id' => 10, 'locale' => 'en', 'name' => 'valley', 'name_short' => 'vly'],
            ['street_type_id' => 11, 'locale' => 'ru', 'name' => 'спуск', 'name_short' => 'спуск'],
            ['street_type_id' => 11, 'locale' => 'en', 'name' => 'down', 'name_short' => 'dwn'],
            ['street_type_id' => 12, 'locale' => 'ru', 'name' => 'набережная', 'name_short' => 'наб.'],
            ['street_type_id' => 12, 'locale' => 'en', 'name' => 'quay', 'name_short' => 'quay'],
            ['street_type_id' => 13, 'locale' => 'ru', 'name' => 'станция', 'name_short' => 'ст.'],
            ['street_type_id' => 13, 'locale' => 'en', 'name' => 'station', 'name_short' => 'st.'],
            ['street_type_id' => 14, 'locale' => 'ru', 'name' => 'жилой массив', 'name_short' => 'ж/м'],
            ['street_type_id' => 14, 'locale' => 'en', 'name' => 'housing estate', 'name_short' => 'h.est'],

        ]);
        DB::unprepared("select setval('street_type_id_seq', (select max(id) + 1 from street_type));");
    }

}