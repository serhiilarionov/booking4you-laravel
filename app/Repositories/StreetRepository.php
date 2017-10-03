<?php

namespace App\Repositories;

use App\Models\Street;
use InfyOm\Generator\Common\BaseRepository;

class StreetRepository extends BaseRepository
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
        return Street::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\StreetPresenter";
    }
}
