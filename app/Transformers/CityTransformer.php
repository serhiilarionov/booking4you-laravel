<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\City;

/**
 * Class CityTransformer
 * @package namespace App\Transformers;
 */
class CityTransformer extends TransformerAbstract
{

    /**
     * Transform the \City entity
     * @param City $model
     *
     * @return array
     */
    public function transform(City $model)
    {
        return [
            'id' => (int) $model->id,
            'slug' => $model->slug,
            'name' => $model->name,
            'region_id' => $model->region_id,
            'name_orig' => $model->name_orig,
            'active' => $model->active,
            'point' => $model->point,
            'bound' => $model->bound,
        ];
    }
}
