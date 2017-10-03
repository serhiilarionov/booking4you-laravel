<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Street;

/**
 * Class StreetTransformer
 * @package namespace App\Transformers;
 */
class StreetTransformer extends TransformerAbstract
{

    /**
     * Transform the \Street entity
     * @param Street $model
     *
     * @return array
     */
    public function transform(Street $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'city_id' => $model->city_id,
            'district_id' => $model->district_id,
            'street_type_id' => $model->street_type_id,
            'name_orig' => $model->name_orig,
            'point' => $model->point,
            'bound' => $model->bound,
        ];
    }
}
