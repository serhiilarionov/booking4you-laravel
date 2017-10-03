<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Dimsav\Translatable\Translatable;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

/**
 * @SWG\Definition(
 *      definition="Street",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="city_id",
 *          description="city_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="district_id",
 *          description="district_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="street_type_id",
 *          description="street_type_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name_orig",
 *          description="name_orig",
 *          type="string"
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
 *      )
 * )
 */
class Street extends Model implements Presentable
{
    use PresentableTrait, Translatable;
    
    public $table = 'street';

    public $timestamps = false;

    public $translatedAttributes = ['name'];
    
    public $fillable = [
        'name',
        'city_id',
        'district_id',
        'street_type_id',
        'name_orig',
        'point',
        'bound'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'city_id' => 'integer',
        'district_id' => 'integer',
        'street_type_id' => 'integer',
        'name_orig' => 'string',
        'point' => 'string',
        'bound' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
