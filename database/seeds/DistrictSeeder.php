<?php

use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('district_lang')->delete();
        DB::table('district')->delete();

        DB::table('district')->insert([
            [
                'id' => 1,
                'name_orig' => 'Дзержинський район',
                'city_id' => 1,
                'point' => 'POINT(33.3895755 47.8807098)',
                'bound' => 'MULTIPOINT(33.349832 47.827602, 33.4579691 47.910443)',
            ],
            [
                'id' => 2,
                'name_orig' => 'Довгинцівський район',
                'city_id' => 1,
                'point' => 'POINT(33.4511855 47.9271524)',
                'bound' => 'MULTIPOINT(33.4103292 47.846204, 33.521941 47.967638)',
            ],
            [
                'id' => 3,
                'name_orig' => 'Жовтневий район',
                'city_id' => 1,
                'point' => 'POINT(33.4856998 47.9825604)',
                'bound' => 'MULTIPOINT(33.369671147.958186, 33.5236469 48.048206)',
            ],
            [
                'id' => 4,
                'name_orig' => 'Інгулецький район',
                'city_id' => 1,
                'point' => 'POINT(33.2 47.6958)',
                'bound' => 'MULTIPOINT(33.134698 47.637942, 33.389748 47.8789991)',
            ],
            [
                'id' => 5,
                'name_orig' => 'Саксаганський район',
                'city_id' => 1,
                'point' => 'POINT(33.408679 47.946668)',
                'bound' => 'MULTIPOINT(33.366901 47.904464, 33.4692051 47.975087)',
            ],
            [
                'id' => 6,
                'name_orig' => 'Тернівський район',
                'city_id' => 1,
                'point' => 'POINT(33.5276837 48.1025172)',
                'bound' => 'MULTIPOINT(33.368122 48.034461, 33.598335 48.176781)',
            ],
            [
                'id' => 7,
                'name_orig' => 'Центрально-Міський район',
                'city_id' => 1,
                'point' => 'POINT(33.3351734 47.898529)',
                'bound' => 'MULTIPOINT(33.224411 47.787266, 33.3727281 47.9426099)',
            ],
            [
                'id' => 8,
                'name_orig' => 'Амур-Нижньодніпровський район',
                'city_id' => 2,
                'point' => 'POINT(34.9746164 48.51473)',
                'bound' => 'MULTIPOINT(34.870127148.468559, 35.0942299 48.568868)',
            ],
            [
                'id' => 9,
                'name_orig' => 'Бабушкінський район',
                'city_id' => 2,
                'point' => 'POINT(35.013848.4063)',
                'bound' => 'MULTIPOINT(34.965108 48.355729, 35.058669 48.482421)',
            ],
            [
                'id' => 10,
                'name_orig' => 'Жовтневий район',
                'city_id' => 2,
                'point' => 'POINT(35.06857 48.4365564)',
                'bound' => 'MULTIPOINT(35.0227659 48.386354, 35.1242051 48.479856)',
            ],
            [
                'id' => 11,
                'name_orig' => 'Індустріальний район',
                'city_id' => 2,
                'point' => 'POINT(35.0603618 48.5247577)',
                'bound' => 'MULTIPOINT(34.98715 48.47866, 35.125953 48.56438)',
            ],
            [
                'id' => 12,
                'name_orig' => 'Кіровський район',
                'city_id' => 2,
                'point' => 'POINT(35.0338718 48.4770705)',
                'bound' => 'MULTIPOINT(35.003795 48.42915, 35.0536791 48.4888131)',
            ],
            [
                'id' => 13,
                'name_orig' => 'Красногвардійський район',
                'city_id' => 2,
                'point' => 'POINT(34.9707821 48.4251154)',             
                'bound' => 'MULTIPOINT(34.9002541 48.381492, 35.0285951 48.489784)',
            ],
            [
                'id' => 14,
                'name_orig' => 'Ленінський район',
                'city_id' => 2,
                'point' => 'POINT(34.9071122 48.4812793)',            
                'bound' => 'MULTIPOINT(34.757975 48.421829, 35.0099601 48.5092969)',
            ],
            [
                'id' => 15,
                'name_orig' => 'Самарський район',
                'city_id' => 2,
                'point' => 'POINT(35.126832 48.4560436)',            
                'bound' => 'MULTIPOINT(35.0844939 48.392817, 35.242738 48.509188)',
            ],
            [
                'id' => 16,
                'name_orig' => 'Голосіївський район',
                'city_id' => 3,
                'point' => 'POINT(30.515278 50.402778)',            
                'bound' => 'MULTIPOINT(30.4306449 50.213273, 30.6568691 50.4169171)',
            ],
            [
                'id' => 17,
                'name_orig' => 'Дарницький район',
                'city_id' => 3,
                'point' => 'POINT(30.676667 50.406111)',           
                'bound' => 'MULTIPOINT(30.5815081 50.3324201, 30.825941 50.470329)',
            ],
            [
                'id' => 18,
                'name_orig' => 'Деснянський район',
                'city_id' => 3,
                'point' => 'POINT(30.704167 50.53)',           
                'bound' => 'MULTIPOINT(30.524814 50.446887, 30.8248251 50.590798)',
            ],
            [
                'id' => 19,
                'name_orig' => 'Дніпровський район',
                'city_id' => 3,
                'point' => 'POINT(30.601521 50.4535873)',            
                'bound' => 'MULTIPOINT(30.528604 50.4169171, 30.7598902 50.4954659)',
            ],
            [
                'id' => 20,
                'name_orig' => 'Оболонський район',
                'city_id' => 3,
                'point' => 'POINT(30.4372576 50.5467298)',            
                'bound' => 'MULTIPOINT(30.2976351 50.476633, 30.541629 50.586366)',
            ],
            [
                'id' => 21,
                'name_orig' => 'Печерський район',
                'city_id' => 3,
                'point' => 'POINT(30.549444 50.420556)',            
                'bound' => 'MULTIPOINT(30.5160829 50.402478, 30.588075 50.4569339)',
            ],
            [
                'id' => 22,
                'name_orig' => 'Подільський район',
                'city_id' => 3,
                'point' => 'POINT(30.4428556 50.4938086)',           
                'bound' => 'MULTIPOINT(30.3618142 50.4549287, 30.541629 50.5276071)',
            ],
            [
                'id' => 23,
                'name_orig' => 'Святошинський район',
                'city_id' => 3,
                'point' => 'POINT(30.345138 50.464301)',          
                'bound' => 'MULTIPOINT(30.2394401 50.397983, 30.429484 50.547732)',
            ],
            [
                'id' => 24,
                'name_orig' => 'Солом`янський район',
                'city_id' => 3,
                'point' => 'POINT(30.4529175 50.4282552)',
                'bound' => 'MULTIPOINT(30.3977108 50.3819804, 30.5153096 50.4593346)',
            ],
            [
                'id' => 25,
                'name_orig' => 'Шевченківський район',
                'city_id' => 3,
                'point' => 'POINT(30.4664647 50.4642048)',            
                'bound' => 'MULTIPOINT(30.3957135 50.4385319, 30.5280638 50.4869029)',
            ],
        ]);

        DB::table('district_lang')->insert([
            ['district_id' => 1, 'locale' => 'ru', 'name' => 'Дзержинский район'],
            ['district_id' => 1, 'locale' => 'en', 'name' => 'Dzerzhinsk district'],
            ['district_id' => 2, 'locale' => 'ru', 'name' => 'Долгинцевский район'],
            ['district_id' => 2, 'locale' => 'en', 'name' => 'Dovhyntsivskyy district'],
            ['district_id' => 3, 'locale' => 'ru', 'name' => 'Жовтневый район'],
            ['district_id' => 3, 'locale' => 'en', 'name' => 'Jovtnevy district'],
            ['district_id' => 4, 'locale' => 'ru', 'name' => 'Ингулецкий район'],
            ['district_id' => 4, 'locale' => 'en', 'name' => 'Inguletsky district'],
            ['district_id' => 5, 'locale' => 'ru', 'name' => 'Саксаганский район'],
            ['district_id' => 5, 'locale' => 'en', 'name' => 'Saksagansky district'],
            ['district_id' => 6, 'locale' => 'ru', 'name' => 'Терновской район'],
            ['district_id' => 6, 'locale' => 'en', 'name' => 'Ternovskii district'],
            ['district_id' => 7, 'locale' => 'ru', 'name' => 'Центрально-Городской район'],
            ['district_id' => 7, 'locale' => 'en', 'name' => 'Centralno-Misky district'],
            ['district_id' => 8, 'locale' => 'ru', 'name' => 'Амур – Нижнеднепровский район'],
            ['district_id' => 8, 'locale' => 'en', 'name' => 'Amur - Nizhnodnіprovsky district'],
            ['district_id' => 9, 'locale' => 'ru', 'name' => 'Бабушкинский район'],
            ['district_id' => 9, 'locale' => 'en', 'name' => 'Babushkіnsky district'],
            ['district_id' => 10, 'locale' => 'ru', 'name' => 'Жовтневый район'],
            ['district_id' => 10, 'locale' => 'en', 'name' => 'Jovtnevy district'],
            ['district_id' => 11, 'locale' => 'ru', 'name' => 'Индустриальный район'],
            ['district_id' => 11, 'locale' => 'en', 'name' => 'Іndustrіalny district'],
            ['district_id' => 12, 'locale' => 'ru', 'name' => 'Кировский район'],
            ['district_id' => 12, 'locale' => 'en', 'name' => 'Kіrovsky district'],
            ['district_id' => 13, 'locale' => 'ru', 'name' => 'Красногвардейский район'],
            ['district_id' => 13, 'locale' => 'en', 'name' => 'Krasnogvardіysky district'],
            ['district_id' => 14, 'locale' => 'ru', 'name' => 'Ленинский район'],
            ['district_id' => 14, 'locale' => 'en', 'name' => 'Lenіnsky district'],
            ['district_id' => 15, 'locale' => 'ru', 'name' => 'Самарский район'],
            ['district_id' => 15, 'locale' => 'en', 'name' => 'Samarsky district'],
            ['district_id' => 16, 'locale' => 'ru', 'name' => 'Голосеевский район'],
            ['district_id' => 16, 'locale' => 'en', 'name' => 'Golosiivsky district'],
            ['district_id' => 17, 'locale' => 'ru', 'name' => 'Дарницкий район'],
            ['district_id' => 17, 'locale' => 'en', 'name' => 'Darnitsky district'],
            ['district_id' => 18, 'locale' => 'ru', 'name' => 'Деснянский район'],
            ['district_id' => 18, 'locale' => 'en', 'name' => 'Desnyansky district'],
            ['district_id' => 19, 'locale' => 'ru', 'name' => 'Днепровский район'],
            ['district_id' => 19, 'locale' => 'en', 'name' => 'Dniprovsky district'],
            ['district_id' => 20, 'locale' => 'ru', 'name' => 'Оболонский район'],
            ['district_id' => 20, 'locale' => 'en', 'name' => 'Obolonsky district'],
            ['district_id' => 21, 'locale' => 'ru', 'name' => 'Печерский район'],
            ['district_id' => 21, 'locale' => 'en', 'name' => 'Pechers`ka district'],
            ['district_id' => 22, 'locale' => 'ru', 'name' => 'Подольский район'],
            ['district_id' => 22, 'locale' => 'en', 'name' => 'Podіlsky district'],
            ['district_id' => 23, 'locale' => 'ru', 'name' => 'Святошинский район'],
            ['district_id' => 23, 'locale' => 'en', 'name' => 'Svyatoshinsky district'],
            ['district_id' => 24, 'locale' => 'ru', 'name' => 'Соломенский район'],
            ['district_id' => 24, 'locale' => 'en', 'name' => 'Solom`yansky district'],
            ['district_id' => 25, 'locale' => 'ru', 'name' => 'Шевченковский район'],
            ['district_id' => 25, 'locale' => 'en', 'name' => 'Shevchenkivsky'],
        ]);
        DB::unprepared("select setval('district_id_seq', (select max(id) + 1 from district));");
    }

}