<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Presentable;
use Prettus\Repository\Traits\PresentableTrait;

/**
 * @SWG\Definition(
 *      definition="Category",
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
 *          property="parent_id",
 *          description="parent_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="icon",
 *          description="icon",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="position",
 *          description="position",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="active",
 *          description="active",
 *          type="boolean"
 *      )
 * )
 */
class Category extends Model implements Presentable
{
    use SoftDeletes, PresentableTrait, Translatable;

    protected $connection = 'pgsql-loopback';

    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'parent_id' => 'integer',
        'icon' => 'string',
        'position' => 'integer',
        'active' => 'boolean',
    ];

    public $translatedAttributes = ['name'];
    
    public $table = 'category';

    public $fillable = [
        'name',
        'slug',
        'parent_id',
        'icon',
        'position',
        'active'
    ];


    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
