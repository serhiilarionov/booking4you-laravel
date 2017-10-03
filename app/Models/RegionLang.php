<?php

namespace App\Models;

class RegionLang extends BaseModel
{
    protected $table = 'region_lang';
    public $timestamps = false;
    protected $fillable = ['name'];
}
