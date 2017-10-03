<?php

use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('building')->delete();

        DB::table('building')->insert([
            ['id' => 1, 'street_id' => 1, 'number' => '5a', 'point' => 'POINT(33.421607 47.936635)'],
            ['id' => 2, 'street_id' => 2, 'number' => '27б', 'point' => 'POINT(33.377237 47.888798)'],
            ['id' => 3, 'street_id' => 3, 'number' => '19', 'point' => 'POINT(33.437559 47.995350)'],
            ['id' => 4, 'street_id' => 4, 'number' => '5', 'point' => 'POINT(33.286898 47.885698)'],
            ['id' => 5, 'street_id' => 5, 'number' => '1', 'point' => 'POINT(33.321911 47.907665)'],
            ['id' => 6, 'street_id' => 5, 'number' => '95', 'point' => 'POINT(33.312606 47.907304)'],
            ['id' => 7, 'street_id' => 6, 'number' => '78', 'point' => 'POINT(33.426990 47.970498)'],
            ['id' => 8, 'street_id' => 7, 'number' => '3', 'point' => 'POINT(35.046775 48.432023)'],
            ['id' => 9, 'street_id' => 8, 'number' => '12', 'point' => 'POINT(34.805495 48.430485)'],
            ['id' => 10, 'street_id' => 9, 'number' => '26', 'point' => 'POINT(35.122061 48.494692)'],
            ['id' => 11, 'street_id' => 10, 'number' => '42a', 'point' => 'POINT(35.016339 48.459405)'],
            ['id' => 12, 'street_id' => 11, 'number' => '20', 'point' => 'POINT(35.074855 48.450705)'],
            ['id' => 13, 'street_id' => 12, 'number' => '22', 'point' => 'POINT(35.027667 48.478605)'],
            ['id' => 14, 'street_id' => 13, 'number' => '99к', 'point' => 'POINT(30.548981 50.344374)'],
            ['id' => 15, 'street_id' => 14, 'number' => '2д', 'point' => 'POINT(30.336987 50.49294)'],
            ['id' => 16, 'street_id' => 15, 'number' => '1в', 'point' => 'POINT(30.49466 50.476915)'],
            ['id' => 17, 'street_id' => 16, 'number' => '3', 'point' => 'POINT(30.508665 50.528409)'],
            ['id' => 18, 'street_id' => 17, 'number' => '2', 'point' => 'POINT(30.587725 50.477161)'],
        ]);

        DB::unprepared("select setval('building_id_seq', (select max(id) + 1 from building));");
    }

}