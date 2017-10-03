<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Category;

/**
 * Class CategoryTransformer
 * @package namespace App\Transformers;
 */
class CategoryTransformer extends TransformerAbstract
{

    /**
     * Transform the \Category entity
     * @param Category $model
     *
     * @return array
     */
    public function transform(Category $model)
    {
        return [
            'id' => (int)$model->id,
            'name' => $model->name,
            'slug' => $model->slug,
            'parent_id' => $model->parent_id,
            'icon' => $model->icon,
            'position' => $model->position,
            'active' => $model->active,
        ];
    }
}
