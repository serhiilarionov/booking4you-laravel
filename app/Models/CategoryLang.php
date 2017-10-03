<?php

namespace App\Models;

class CategoryLang extends BaseModel
{
    protected $table = 'category_lang';
    public $timestamps = false;
    protected $fillable = ['name'];
}
