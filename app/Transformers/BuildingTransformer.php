<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Building;

/**
 * Class BuildingTransformer
 * @package namespace App\Transformers;
 */
class BuildingTransformer extends TransformerAbstract
{

    /**
     * Transform the \Building entity
     * @param Building $model
     *
     * @return array
     */
    public function transform(Building $model)
    {
        return [
            'id' => (int) $model->id,
            'street_id' => $model->street_id,
            'number' => $model->number,
            'point' => $model->point,
        ];
    }
}
