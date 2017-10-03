<?php

namespace App\Models;

class CityLang extends BaseModel
{
    protected $table = 'city_lang';
    public $timestamps = false;
    protected $fillable = ['name'];
}
