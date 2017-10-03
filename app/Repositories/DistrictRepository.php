<?php

namespace App\Repositories;

use App\Models\District;
use InfyOm\Generator\Common\BaseRepository;

class DistrictRepository extends BaseRepository
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
        return District::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\DistrictPresenter";
    }
}
