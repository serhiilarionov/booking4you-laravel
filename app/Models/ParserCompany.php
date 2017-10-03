<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="ParserCompany",
 *      required={},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="source",
 *          description="source",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="source_id",
 *          description="source_id",
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
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="url",
 *          description="url",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="category_id",
 *          description="category_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="display_category_id",
 *          description="display_category_id",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="desc",
 *          description="desc",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="address",
 *          description="address",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="website",
 *          description="website",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="work_time",
 *          description="work_time",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="image_list",
 *          description="image_list",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="active",
 *          description="active",
 *          type="boolean"
 *      )
 * )
 */
class ParserCompany extends Model
{
    use SoftDeletes;

    public $table = 'parser_company';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'source',
        'source_id',
        'city_id',
        'name',
        'url',
        'category_id',
        'display_category_id',
        'desc',
        'phone',
        'address',
        'email',
        'website',
        'work_time',
        'image_list',
        'active',
        'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'source' => 'integer',
        'source_id' => 'integer',
        'city_id' => 'integer',
        'name' => 'string',
        'url' => 'string',
        'category_id' => 'string',
        'display_category_id' => 'string',
        'desc' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'email' => 'string',
        'website' => 'string',
        'work_time' => 'string',
        'image_list' => 'string',
        'active' => 'boolean',
        'deleted_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
