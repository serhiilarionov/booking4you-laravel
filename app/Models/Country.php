<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Dimsav\Translatable\Translatable;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

/**
 * @SWG\Definition(
 *      definition="Country",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="code",
 *          description="code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="name_orig",
 *          description="name_orig",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="active",
 *          description="active",
 *          type="boolean"
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
class Country extends Model implements Presentable
{

    use PresentableTrait, Translatable;
    
    public $table = 'country';

    public $timestamps = false;

    public $translatedAttributes = ['name'];

    public $fillable = [
        'code',
        'name',
        'name_orig',
        'active',
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
        'code' => 'string',
        'name_orig' => 'string',
        'active' => 'boolean',
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
