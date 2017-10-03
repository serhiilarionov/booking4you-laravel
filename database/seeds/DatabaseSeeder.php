<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('LangSeeder');
        $this->call('CountrySeeder');
        $this->call('RegionSeeder');
        $this->call('CitySeeder');
        $this->call('DistrictSeeder');
        $this->call('StreetTypeSeeder');
        $this->call('StreetSeeder');
        $this->call('BuildingSeeder');
        $this->call('CategorySeeder');
        $this->call('CompanySeeder');
        $this->call('CompanyServiceSeeder');
//        $this->call('SentinelRoleSeeder');
//        $this->call('SentinelPermissionSeeder');
//        $this->call('SentinelUserSeeder');

        Model::reguard();
    }
}
