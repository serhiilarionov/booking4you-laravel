<?php

use Illuminate\Database\Seeder;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class SentinelUserSeeder extends Seeder
{

	public function run()
	{		
		try
		{

			$role = Sentinel::findRoleByName('Administrator');

			$credentials = [
                'email' => 'admin@admin.com',
                'password' => '123321',
			];

			$user = Sentinel::create($credentials);

			$role->users()->attach($user);

			$activation = Activation::create($user);

			$activation_complete = Activation::complete($user, $activation->code);
			
		} catch (\Exception $e)
		{
		}

		

	}

}