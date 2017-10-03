<?php

namespace App\Models;

class CountryLang extends BaseModel
{
    protected $table = 'country_lang';
    public $timestamps = false;
    protected $fillable = ['name'];
}
