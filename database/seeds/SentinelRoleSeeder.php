<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class SentinelRoleSeeder extends Seeder
{

	public function run()
	{		
		try
		{
			$role = Sentinel::getRoleRepository()->createModel()->create([
			    'name' => 'Administrator',
			    'slug' => 'administrator',
			]);		
		} catch (\Exception $e) {
		}
	}
}