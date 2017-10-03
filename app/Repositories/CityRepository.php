<?php

namespace App\Repositories;

use App\Models\City;
use InfyOm\Generator\Common\BaseRepository;

class CityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return City::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\CityPresenter";
    }
}
