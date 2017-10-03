<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_location')->delete();
        DB::table('company_detail')->delete();
        DB::table('company')->delete();

        DB::table('company')->insert([
            [
                'id' => 1,
                'name' => 'Экспресс',
                'title' => 'Автомойка «Экспресс»',
                'category_id' => 21,
                'desc' => 'EXPRESS МОЙКА 25грн. 10мин. Каждая 10 мойка БЕСПЛАТНО ХИМЧИСТКА КОВРОВ 15грн.М2 ПОЛИРОВКА КУЗОВА Комплекс для TAXI 35грн.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Автоцентр «CITIАВТО»',
                'title' => 'Автоцентр «CITIАВТО»',
                'category_id' => 21,
                'desc' => 'Услуги автомойки: бесконтактная мойка кузова, удаление битумных и других пятен любой сложности, широкий выбор автохимии по уходу и защите ЛКП и деталей автомобиля, химчистку салона, бесконтактную мойку моторного отсека специальными средствами.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Манго',
                'title' => 'Манго',
                'category_id' => 21,
                'desc' => 'Мы рады предложить широкий спектр услуг по уходу за Вашим автомобилем: профессиональная мойка авто, химчистка салона, предпродажная подготовка кузова, восстановление цвета кузова, удаление царапин, восстановление резины, полировка фар, стекол, экспресс-мойка 3-4 минуты!',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Автомойка "5555"',
                'title' => 'Автомойка "5555"',
                'category_id' => 21,
                'desc' => 'Автомойка "5555" в Кривом Роге оказывает полный спектр услуг по мойке и химчистке автомобилей: бесконтактная мойка, химчистка салона, стирка ковров, мойка двигателя, чернение резины, полировка AMWAY. Время роботы: круглосуточно.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'Автомойка "Немо"',
                'title' => 'Автомойка "Немо"',
                'category_id' => 21,
                'desc' => 'Мойка, химчистка.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'Автомойка-кафе "Elvis"',
                'title' => 'Автомойка-кафе "Elvis"',
                'category_id' => 21,
                'desc' => 'Автомойка-кафе "Elvis" в Кривом Роге - с радостью,предоставит вам самые качественные услуги: мойка вашего авто,любых видов загрязнения;химчистка салона; полировка кузова и т.д. Так же к вашим услугам работает шинамонтаж и уютное кафе на втором этаже комплекса.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'name' => 'Автомойка и ремонтные боксы для автомобилей',
                'title' => 'Автомойка и ремонтные боксы для автомобилей',
                'category_id' => 21,
                'desc' => 'Автомойка и ремонтные боксы для автомобилей. СТО',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'name' => 'Модена Авто',
                'title' => 'Модена Авто',
                'category_id' => 21,
                'desc' => 'Автомойка, хим чистка.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'name' => 'Автоцентр «Аэлита». Mitsubishi Motors',
                'title' => 'Автоцентр «Аэлита». Mitsubishi Motors',
                'category_id' => 21,
                'desc' => 'Здесь представлен полный модельный ряд автомобилей, крупный сервисный центр оборудован по последнему слову техники. Широкий спектр услуг: индивидуальный тест-драйв, продажа в кредит, страхование, трейд-ин (обмен старого автомобиля на новый с доплатой), лизинг. ВРЕМЯ РАБОТЫ: 9:00-18:00',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'name' => 'Алеко-сервис',
                'title' => 'Алеко-сервис',
                'category_id' => 21,
                'desc' => '-ремонт подвески;
-ремонт тормозной системы, включая АВС;
-ремонт гидроусилителей руля;
-ремонт рулевых реек, реставрация;
-регулировка развала схождения и колес;
-ремонт механических коробок передач;
-ремонт двигателей;
-ремонт электрооборудования (стартеры, генераторы);
-компьютерная диагностика и ремонт электронных систем, имобилайзеров, блоков управления, щитков приборов;
-чистка инжекторов;
-чип-тюнинг (увеличение тяговых характеристик);
-восстановление кузовов после ДТП на фирменном стенде точностью до 1мм;
-окраска кузова и деталей;
-антикоррозийная обработка "Тектилом" по голландской технологии;
-тонирование стекол пленками производства США с выдачей сертификата;
-мойка, химчистка салона;
-полировка покрасочных покрытий с нанесением защитной пленки;
-установка противоугонных замков MUL-T-LOCK;
-установка автосигнализаций;
-обесшумливание салона; … и многое другое.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'name' => 'Мерседес центр',
                'title' => 'Мерседес центр',
                'category_id' => 21,
                'desc' => 'Официальный дилер Mercedes-Benz. Ремонтные и сервисные работы автомобилей Mercedes-Benz. Любая продукция для автомобилей Mercedes-benz.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'name' => 'АИС Автоцентр Днепр',
                'title' => 'АИС Автоцентр Днепр',
                'category_id' => 21,
                'desc' => 'Автоцентр, мойка, СТО.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'name' => 'Автомойка Акваматик',
                'title' => 'Автомойка Акваматик',
                'category_id' => 21,
                'desc' => 'Автоматическая автомойка',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'name' => 'ЛУКОЙЛ',
                'title' => 'ЛУКОЙЛ',
                'category_id' => 21,
                'desc' => 'Замена масел, автомойка',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'name' => 'Автомойка',
                'title' => 'Автомойка',
                'category_id' => 21,
                'desc' => 'Проф.полировка кузова, полная химчистка салона, расконцервация кузова, передпродажная подготовка автомобиля, мойка двигателя.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'name' => 'Блеск-авто',
                'title' => 'Блеск-авто',
                'category_id' => 21,
                'desc' => 'Удаление царапин и других дефектов. Восстановительная и защитная полировка. Профессиональный косметический уход за автомобилем. Полировка фар. Химчистка.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'name' => 'Пронта',
                'title' => 'Пронта',
                'category_id' => 21,
                'desc' => 'Автомойка, полировка, химчистка.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'name' => 'Паровая автомойка',
                'title' => 'Паровая автомойка',
                'category_id' => 21,
                'desc' => 'Комплексная очистка салона автомобиля паром - это передовая авто моечная технология. Одна из главных ее преимуществ в том, что чистка паром позволяет быстро и эффективно очистить автомобиль от загрязнений самого разного рода. Комплексное чистки автомобиля паром, это инновационная, безопасная, эффективная технология очистки.',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);

        DB::table('company_location')->insert([
            [
                'company_id' => 1,
                'point' => "POINT(33.421607 47.936635)",
                'building_id' => 1,
                'street_id' => 1,
                'district_id' => 5,
                'city_id' => 1,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 2,
                'point' => "POINT(33.377237 47.888798)",
                'building_id' => 2,
                'street_id' => 2,
                'district_id' => 1,
                'city_id' => 1,
                'room' => '',
                'detail' => 'район Песочной',
            ],
            [
                'company_id' => 3,
                'point' => "POINT(33.437559 47.995350)",
                'building_id' => 3,
                'street_id' => 3,
                'district_id' => 3,
                'city_id' => 1,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 4,
                'point' => "POINT(33.286898 47.885698)",
                'building_id' => 4,
                'street_id' => 4,
                'district_id' => 7,
                'city_id' => 1,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 5,
                'point' => "POINT(33.321911 47.907665)",
                'building_id' => 5,
                'street_id' => 5,
                'district_id' => 7,
                'city_id' => 1,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 6,
                'point' => "POINT(33.312606 47.907304)",
                'building_id' => 6,
                'street_id' => 5,
                'district_id' => 7,
                'city_id' => 1,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 7,
                'point' => "POINT(33.426990 47.970498)",
                'building_id' => 7,
                'street_id' => 6,
                'district_id' => 5,
                'city_id' => 1,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 8,
                'point' => "POINT(35.046775 48.432023)",
                'building_id' => 8,
                'street_id' => 7,
                'district_id' => 10,
                'city_id' => 2,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 9,
                'point' => "POINT(34.805495 48.430485)",
                'building_id' => 9,
                'street_id' => 8,
                'district_id' => 12,
                'city_id' => 2,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 10,
                'point' => "POINT(35.122061 48.494692)",
                'building_id' => 10,
                'street_id' => 9,
                'district_id' => 15,
                'city_id' => 2,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 11,
                'point' => "POINT(35.016339 48.459405)",
                'building_id' => 11,
                'street_id' => 10,
                'district_id' => 12,
                'city_id' => 2,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 12,
                'point' => "POINT(35.074855 48.450705)",
                'building_id' => 12,
                'street_id' => 11,
                'district_id' => 10,
                'city_id' => 2,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 13,
                'point' => "POINT(35.027667 48.478605)",
                'building_id' => 13,
                'street_id' => 12,
                'district_id' => 12,
                'city_id' => 2,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 14,
                'point' => "POINT(30.548981 50.344374)",
                'building_id' => 14,
                'street_id' => 13,
                'district_id' => 16,
                'city_id' => 3,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 15,
                'point' => "POINT(30.336987 50.49294)",
                'building_id' => 15,
                'street_id' => 14,
                'district_id' => 23,
                'city_id' => 3,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 16,
                'point' => "POINT(30.49466 50.476915)",
                'building_id' => 16,
                'street_id' => 15,
                'district_id' => 22,
                'city_id' => 3,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 17,
                'point' => "POINT(30.508665 50.528409)",
                'building_id' => 17,
                'street_id' => 16,
                'district_id' => 20,
                'city_id' => 3,
                'room' => '',
                'detail' => '',
            ],
            [
                'company_id' => 18,
                'point' => "POINT(30.587725 50.477161)",
                'building_id' => 18,
                'street_id' => 17,
                'district_id' => 19,
                'city_id' => 3,
                'room' => '',
                'detail' => '',
            ],
        ]);

        DB::table('company_detail')->insert([
            [
                'company_id' => 1,
                'phone' => json_encode([
                    [
                        'number' => '+380671621288',
                        'code' => '+380',
                        'operator' => '67',
                        'note' => 'бронирование',
                        'priority' => 1
                    ],
                    [
                        'number' => '+380992218850',
                        'code' => '+380',
                        'operator' => '99',
                        'note' => 'информация',
                        'priority' => 0
                    ],
                ]),
                'email' => json_encode([
                    'auto-express@mail.ru',
                ]),
                'website' => json_encode([
                    'auto-express.com.ua',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                    '1/1/1.jpg',
                    '1/1/2.jpg',
                    '1/1/3.jpg',
                    '1/1/4.jpg',
                    '1/1/5.jpg',
                    '1/1/6.jpg',
                ]),
            ],
            [
                'company_id' => 2,
                'phone' => json_encode([
                    [
                        'number' => '+380972204009',
                        'code' => '+380',
                        'operator' => '97',
                        'note' => 'Автомойка',
                        'priority' => 1
                    ],
                    [
                        'number' => '+380675692389',
                        'code' => '+380',
                        'operator' => '67',
                        'note' => 'Автосалон, кредит, страхование',
                        'priority' => 0
                    ],
                    [
                        'number' => '+380970775588',
                        'code' => '+380',
                        'operator' => '97',
                        'note' => 'Мастер СТО, техподдержка ГБО',
                        'priority' => 0
                    ],[
                        'number' => '+380675695095',
                        'code' => '+380',
                        'operator' => '67',
                        'note' => 'Кузовной сервис',
                        'priority' => 0
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                    '1/2/2.jpg',
                    '1/2/3.jpg',
                    '1/2/4.jpg',
                ]),
            ],
            [
                'company_id' => 3,
                'phone' => json_encode([
                    [
                        'number' => '+380965297790',
                        'code' => '+380',
                        'operator' => '96',
                        'note' => 'кафе',
                        'priority' => 0
                    ],
                    [
                        'number' => '+380976077742',
                        'code' => '+380',
                        'operator' => '97',
                        'note' => 'кафе',
                        'priority' => 0
                    ],
                    [
                        'number' => '+380982092332',
                        'code' => '+380',
                        'operator' => '98',
                        'note' => 'автомойка',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                    '1/3/6.jpg',
                ]),
            ],
            [
                'company_id' => 4,
                'phone' => json_encode([
                    [
                        'number' => '+380974555599',
                        'code' => '+380',
                        'operator' => '97',
                        'note' => 'справки',
                        'priority' => 0
                    ],
                    [
                        'number' => '+380983435862',
                        'code' => '+380',
                        'operator' => '98',
                        'note' => 'телефон для записи',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '5555@gmail.com',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 5,
                'phone' => json_encode([
                    [
                        'number' => '+380960444037',
                        'code' => '+380',
                        'operator' => '96',
                        'note' => 'бронирование',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'nemo.com',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 6,
                'phone' => json_encode([
                    [
                        'number' => '123123123123',
                        'code' => '+380',
                        'operator' => '123',
                        'note' => '',
                        'priority' => 0
                    ],
                    [
                        'number' => '123123123123',
                        'code' => '+380',
                        'operator' => '123',
                        'note' => '',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    'asdfasdf@gmail.com',
                ]),
                'website' => json_encode([
                    'elvis.com',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 7,
                'phone' => json_encode([
                    [
                        'number' => '+380984313871',
                        'code' => '+380',
                        'operator' => '98',
                        'note' => 'заказ',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    'dimadollar@mai.ru',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 8,
                'phone' => json_encode([
                    [
                        'number' => '+380563713007',
                        'code' => '+380',
                        'operator' => '563',
                        'note' => '',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 9,
                'phone' => json_encode([
                    [
                        'number' => '+380562323002',
                        'code' => '+380',
                        'operator' => '562',
                        'note' => '',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'mitsubishi-aelita.dp.ua',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 10,
                'phone' => json_encode([
                    [
                        'number' => '+380663386742',
                        'code' => '+380',
                        'operator' => '66',
                        'note' => '',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'www.alekoservis.dp.ua',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 11,
                'phone' => json_encode([
                    [
                        'number' => '+380567703384',
                        'code' => '+380',
                        'operator' => '56',
                        'note' => '',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'www.mercedes-benz.dp.ua',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 12,
                'phone' => json_encode([
                    [
                        'number' => '+380567569409',
                        'code' => '+380',
                        'operator' => '56',
                        'note' => 'СТО, мойка',
                        'priority' => 1
                    ],
                    [
                        'number' => '+380567569412',
                        'code' => '+380',
                        'operator' => '56',
                        'note' => 'СТО, мойка',
                        'priority' => 0
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'http://dnepr.ais.ua/',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 13,
                'phone' => json_encode([
                    [
                        'number' => '+380563740438',
                        'code' => '+380',
                        'operator' => '56',
                        'note' => 'бронирование',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 14,
                'phone' => json_encode([
                    [
                        'number' => '+380445939300',
                        'code' => '+380',
                        'operator' => '44',
                        'note' => 'бронирование автомойки',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'www.lukoil.com.ua/rus/auto',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 15,
                'phone' => json_encode([
                    [
                        'number' => '+380501352030',
                        'code' => '+380',
                        'operator' => '50',
                        'note' => '',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 16,
                'phone' => json_encode([
                    [
                        'number' => '+380445929196',
                        'code' => '+380',
                        'operator' => '98',
                        'note' => 'автомойка',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'polirovka.kiev.ua/',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 17,
                'phone' => json_encode([
                    [
                        'number' => '+380675011410',
                        'code' => '+380',
                        'operator' => '67',
                        'note' => 'бронирование автомойки',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    '',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
            [
                'company_id' => 18,
                'phone' => json_encode([
                    [
                        'number' => '+380445928791',
                        'code' => '+380',
                        'operator' => '44',
                        'note' => 'запись на автомойку',
                        'priority' => 1
                    ],
                ]),
                'email' => json_encode([
                    '',
                ]),
                'website' => json_encode([
                    'http://www.avtosunsky.com/',
                ]),
                'work_time' => json_encode([
                ]),
                'image_list' => json_encode([
                ]),
            ],
        ]);

        DB::table('category_company')->insert([
            ['company_id' => 1, 'category_id' => 21],
            ['company_id' => 2, 'category_id' => 21],
            ['company_id' => 2, 'category_id' => 24],
            ['company_id' => 3, 'category_id' => 21],
            ['company_id' => 4, 'category_id' => 21],
            ['company_id' => 5, 'category_id' => 21],
            ['company_id' => 6, 'category_id' => 21],
            ['company_id' => 7, 'category_id' => 21],
            ['company_id' => 7, 'category_id' => 24],
            ['company_id' => 8, 'category_id' => 21],
            ['company_id' => 9, 'category_id' => 21],
            ['company_id' => 9, 'category_id' => 24],
            ['company_id' => 10, 'category_id' => 21],
            ['company_id' => 10, 'category_id' => 24],
            ['company_id' => 11, 'category_id' => 21],
            ['company_id' => 11, 'category_id' => 24],
            ['company_id' => 12, 'category_id' => 21],
            ['company_id' => 13, 'category_id' => 21],
            ['company_id' => 14, 'category_id' => 21],
            ['company_id' => 15, 'category_id' => 21],
            ['company_id' => 16, 'category_id' => 21],
            ['company_id' => 17, 'category_id' => 21],
            ['company_id' => 18, 'category_id' => 21],
        ]);

        DB::unprepared("select setval('company_id_seq', (select max(id) + 1 from company));");
    }

}