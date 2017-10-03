<?php

namespace App\Repositories;

use App\Models\Region;
use InfyOm\Generator\Common\BaseRepository;

class RegionRepository extends BaseRepository
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
        return Region::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\RegionPresenter";
    }
}
