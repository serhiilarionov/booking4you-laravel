<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Dimsav\Translatable\Translatable;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

/**
 * @SWG\Definition(
 *      definition="City",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="slug",
 *          description="slug",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name_orig",
 *          description="name_orig",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="region_id",
 *          description="region_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="point",
 *          description="point",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="bound",
 *          description="bound",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="active",
 *          description="active",
 *          type="boolean"
 *      )
 * )
 */
class City extends Model implements Presentable
{
    use PresentableTrait, Translatable;
    
    public $table = 'city';
    
    public $timestamps = false;

    public $translatedAttributes = ['name'];
    
    public $fillable = [
        'slug',
        'name',
        'name_orig',
        'region_id',
        'point',
        'bound',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'name_orig' => 'string',
        'region_id' => 'integer',
        'point' => 'string',
        'bound' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
