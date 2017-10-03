<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

/**
 * @SWG\Definition(
 *      definition="Building",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="street_id",
 *          description="street_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="number",
 *          description="number",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="point",
 *          description="point",
 *          type="string"
 *      )
 * )
 */
class Building extends Model implements Presentable
{
    use PresentableTrait;
    
    public $table = 'building';

    public $timestamps = false;
    
    public $fillable = [
        'street_id',
        'number',
        'point'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'street_id' => 'integer',
        'number' => 'string',
        'point' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
