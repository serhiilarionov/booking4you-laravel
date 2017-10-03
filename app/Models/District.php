<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Dimsav\Translatable\Translatable;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

/**
 * @SWG\Definition(
 *      definition="District",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name_orig",
 *          description="name_orig",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="city_id",
 *          description="city_id",
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
 *      )
 * )
 */
class District extends Model implements Presentable
{
    use PresentableTrait, Translatable;

    public $table = 'district';

    public $timestamps = false;

    public $translatedAttributes = ['name'];

    public $fillable = [
        'name',
        'name_orig',
        'city_id',
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
        'name_orig' => 'string',
        'city_id' => 'integer',
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
