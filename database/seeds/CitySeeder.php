<?php

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city_lang')->delete();
        DB::table('city')->delete();

        DB::table('city')->insert([
            [
                'id' => 1,
                'slug' => 'kryvyi-rih',
                'name_orig' => 'Кривий Ріг',
                'region_id' => 3,
                'point' => 'POINT(33.391783 47.910483)',
                'bound' => 'MULTIPOINT(33.134698 47.637942, 33.598335 48.176781)',
                'active' => 1,
            ],
            [
                'id' => 2,
                'slug' => 'dnipropetrovsk',
                'name_orig' => 'Дніпропетровськ',
                'region_id' => 3,
                'point' => 'POINT(35.046183 48.464717)',
                'bound' => 'MULTIPOINT(34.757975 48.355729, 35.242738 48.568868)',
                'active' => 1,
            ],
            [
                'id' => 3,
                'slug' => 'kyiv',
                'name_orig' => 'Київ',
                'region_id' => 9,
                'point' => 'POINT(30.5234 50.4501)',
                'bound' => 'MULTIPOINT(30.2394401 50.213273, 30.82594 50.5907981)',
                'active' => 1,
            ],
            [
                'id' => 4,
                'slug' => 'lvov',
                'name_orig' => 'Львов',
                'region_id' =>8,
                'point' => 'POINT(30.5234 50.4501)',
                'bound' => 'MULTIPOINT(30.2394401 50.213273, 30.82594 50.5907981)',
                'active' => 1,
            ],
        ]);

        DB::table('city_lang')->insert([
            ['city_id' => 1, 'locale' => 'ru', 'name' => 'Кривой Рог'],
            ['city_id' => 1, 'locale' => 'en', 'name' => 'Krivoy Rog'],
            ['city_id' => 2, 'locale' => 'ru', 'name' => 'Днепропетровск'],
            ['city_id' => 2, 'locale' => 'en', 'name' => 'Dnipropetrovsk'],
            ['city_id' => 3, 'locale' => 'ru', 'name' => 'Киев'],
            ['city_id' => 3, 'locale' => 'en', 'name' => 'Kiev'],
            ['city_id' => 4, 'locale' => 'ru', 'name' => 'Львов'],
            ['city_id' => 4, 'locale' => 'en', 'name' => 'Lvov'],
        ]);
        DB::unprepared("select setval('city_id_seq', (select max(id) + 1 from city));");
    }

}