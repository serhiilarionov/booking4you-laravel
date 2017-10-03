<?php

namespace App\Repositories;

use App\Models\Building;
use InfyOm\Generator\Common\BaseRepository;

class BuildingRepository extends BaseRepository
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
        return Building::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\BuildingPresenter";
    }
}
