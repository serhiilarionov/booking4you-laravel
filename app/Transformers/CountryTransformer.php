<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Country;

/**
 * Class CountryTransformer
 * @package namespace App\Transformers;
 */
class CountryTransformer extends TransformerAbstract
{

    /**
     * Transform the \Country entity
     * @param Country $model
     *
     * @return array
     */
    public function transform(Country $model)
    {
        return [
            'id' => (int) $model->id,
            'code' => $model->code,
            'name' => $model->name,
            'name_orig' => $model->name_orig,
            'active' => $model->active,
            'point' => $model->point,
            'bound' => $model->bound,
        ];
    }
}
