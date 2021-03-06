<?php

namespace App\Repositories;

use App\Models\Category;
use InfyOm\Generator\Common\BaseRepository;

class CategoryRepository extends BaseRepository
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
        return Category::class;
    }

    protected $skipPresenter = true;

    public function presenter()
    {
        return "App\\Presenters\\CategoryPresenter";
    }
}
