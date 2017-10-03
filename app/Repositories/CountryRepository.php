<?php

namespace App\Repositories;

use App\Models\Country;
use InfyOm\Generator\Common\BaseRepository;

class CountryRepository extends BaseRepository
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
        return Country::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\CountryPresenter";
    }
}
