<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\District;

/**
 * Class DistrictTransformer
 * @package namespace App\Transformers;
 */
class DistrictTransformer extends TransformerAbstract
{

    /**
     * Transform the \District entity
     * @param \District $model
     *
     * @return array
     */
    public function transform(District $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'city_id' => $model->city_id,
            'name_orig' => $model->name_orig,
            'point' => $model->point,
            'bound' => $model->bound,
        ];
    }
}
