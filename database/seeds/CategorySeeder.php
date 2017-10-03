<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_lang')->delete();
        DB::table('category')->delete();

        DB::table('category')->insert([
            [
                'id' => 1,
                'slug' => 'car',
                'parent_id' => 0,
                'icon' => 'local_shipping',
                'position' => 0,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'slug' => 'leisure',
                'parent_id' => 0,
                'icon' => 'tag_faces',
                'position' => 1,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'slug' => 'beauty',
                'parent_id' => 0,
                'icon' => 'palette',
                'position' => 2,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'slug' => 'health',
                'parent_id' => 0,
                'icon' => 'healing',
                'position' => 3,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'slug' => 'car-wash',
                'parent_id' => 1,
                'icon' => 'local_car_wash',
                'position' => 1,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'slug' => 'billiards',
                'parent_id' => 2,
                'icon' => 'hdr_weak',
                'position' => 1,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'slug' => 'bowling',
                'parent_id' => 2,
                'icon' => 'lens',
                'position' => 2,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'slug' => 'service-stations',
                'parent_id' => 1,
                'icon' => 'gears',
                'position' => 2,
                'active' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('category_lang')->insert([
            ['category_id' => 1, 'locale' => 'ru', 'name' => 'Авто'],
            ['category_id' => 1, 'locale' => 'en', 'name' => 'Car'],
            ['category_id' => 2, 'locale' => 'ru', 'name' => 'Досуг'],
            ['category_id' => 2, 'locale' => 'en', 'name' => 'Leisure'],
            ['category_id' => 3, 'locale' => 'ru', 'name' => 'Красота'],
            ['category_id' => 3, 'locale' => 'en', 'name' => 'Beauty'],
            ['category_id' => 4, 'locale' => 'ru', 'name' => 'Здоровье'],
            ['category_id' => 4, 'locale' => 'en', 'name' => 'Health'],

            ['category_id' => 21, 'locale' => 'ru', 'name' => 'Автомойка'],
            ['category_id' => 21, 'locale' => 'en', 'name' => 'Car wash'],
            ['category_id' => 22, 'locale' => 'ru', 'name' => 'Бильярд'],
            ['category_id' => 22, 'locale' => 'en', 'name' => 'Billiards'],
            ['category_id' => 23, 'locale' => 'ru', 'name' => 'Боулинг'],
            ['category_id' => 23, 'locale' => 'en', 'name' => 'Bowling'],
            ['category_id' => 24, 'locale' => 'ru', 'name' => 'СТО'],
            ['category_id' => 24, 'locale' => 'en', 'name' => 'Service Stations'],
        ]);
        DB::unprepared("select setval('category_id_seq', (select max(id) + 1 from category));");
    }

}
