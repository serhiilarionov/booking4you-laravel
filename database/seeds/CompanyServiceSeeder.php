<?php

use Illuminate\Database\Seeder;

class CompanyServiceSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_service_lang')->delete();
        DB::table('company_service')->delete();

        DB::table('company_service')->insert([
            [
                'id' => 1,
                'company_id' => 1,
                'category_id' => 21,
                'name_orig' => 'EXPRESS мойка',
                'desc_orig' => '10 мин. Каждая 10 мойка БЕСПЛАТНО',
                'price' => 30.00,
                'sale_price' => 25.00,
                'currency' => 'uah',
                'position' => 1,
                'active' => 1,
            ],
            [
                'id' => 2,
                'company_id' => 1,
                'category_id' => 21,
                'name_orig' => 'Мойка кузова (бесконтактная)',
                'desc_orig' => '',
                'price' => 50.00,
                'sale_price' => 40.00,
                'currency' => 'uah',
                'position' => 2,
                'active' => 1,
            ],
            [
                'id' => 3,
                'company_id' => 1,
                'category_id' => 21,
                'name_orig' => 'Мойка кузова (контактная)',
                'desc_orig' => '',
                'price' => 50.00,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 3,
                'active' => 1,
            ],
            [
                'id' => 4,
                'company_id' => 1,
                'category_id' => 21,
                'name_orig' => 'Уборка салона',
                'desc_orig' => 'Уборка салона пылесосом влажная уборка',
                'price' => 30.00,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 4,
                'active' => 1,
            ],
            [
                'id' => 5,
                'company_id' => 1,
                'category_id' => 21,
                'name_orig' => 'Уборка багажника',
                'desc_orig' => 'пылесос',
                'price' => 15.00,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 4,
                'active' => 1,
            ],
            [
                'id' => 21,
                'company_id' => 2,
                'category_id' => 21,
                'name_orig' => 'Мойка кузова',
                'desc_orig' => 'Мойка пеной антисоль жидкий холодный воск',
                'price' => 70.00,
                'sale_price' => 60.00,
                'currency' => 'uah',
                'position' => 1,
                'active' => 1,
            ],
            [
                'id' => 22,
                'company_id' => 2,
                'category_id' => 21,
                'name_orig' => 'Экспресс мойка',
                'desc_orig' => 'сбивка грязи водой с кузова авто с автохимией, без сушки кузова',
                'price' => 50.00,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 2,
                'active' => 1,
            ],
            [
                'id' => 23,
                'company_id' => 2,
                'category_id' => 21,
                'name_orig' => 'Комплексная мойка',
                'desc_orig' => '',
                'price' => 150.00,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 2,
                'active' => 1,
            ],
            [
                'id' => 24,
                'company_id' => 2,
                'category_id' => 24,
                'name_orig' => 'Ремонт двигателя',
                'desc_orig' => '',
                'price' => null,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 1,
                'active' => 1,
            ],
            [
                'id' => 25,
                'company_id' => 2,
                'category_id' => 24,
                'name_orig' => 'Ремонт КПП',
                'desc_orig' => '',
                'price' => null,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 2,
                'active' => 1,
            ],
            [
                'id' => 26,
                'company_id' => 2,
                'category_id' => 24,
                'name_orig' => 'Диагностика двигателя',
                'desc_orig' => '',
                'price' => null,
                'sale_price' => null,
                'currency' => 'uah',
                'position' => 3,
                'active' => 1,
            ],
        ]);

        DB::table('company_service_lang')->insert([
            [
                'company_service_id' => 1,
                'locale' => 'ru',
                'name' => 'EXPRESS мойка',
                'desc' => '10 мин. Каждая 10 мойка БЕСПЛАТНО'
            ],
            [
                'company_service_id' => 1,
                'locale' => 'en',
                'name' => 'EXPRESS wash',
                'desc' => '10 min. Every 10 car wash FREE'
            ],
            ['company_service_id' => 2, 'locale' => 'ru', 'name' => 'Мойка кузова (бесконтактная)', 'desc' => ''],
            ['company_service_id' => 2, 'locale' => 'en', 'name' => 'Body wash (non-contact)', 'desc' => ''],
            ['company_service_id' => 3, 'locale' => 'ru', 'name' => 'Мойка кузова (контактная)', 'desc' => ''],
            ['company_service_id' => 3, 'locale' => 'en', 'name' => 'Body wash (contact)', 'desc' => ''],
            [
                'company_service_id' => 21,
                'locale' => 'ru',
                'name' => 'Мойка кузова',
                'desc' => 'Мойка пеной антисоль жидкий холодный воск'
            ],
            [
                'company_service_id' => 21,
                'locale' => 'en',
                'name' => 'Body wash',
                'desc' => 'Cleaning foam antisol liquid cold wax'
            ],
        ]);
        DB::unprepared("select setval('company_service_id_seq', (select max(id) + 1 from lang));");
    }

}