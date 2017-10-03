<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Region;

/**
 * Class RegionTransformer
 * @package namespace App\Transformers;
 */
class RegionTransformer extends TransformerAbstract
{

    /**
     * Transform the \Region entity
     * @param Region $model
     *
     * @return array
     */
    public function transform(Region $model)
    {
        return [
            'id' => (int) $model->id,
            'name' => $model->name,
            'name_orig' => $model->name_orig,
            'slug' => $model->slug,
            'country_id' => $model->country_id,
            'point' => $model->point,
            'bound' => $model->bound,
            'active' => $model->active,
        ];
    }
}
