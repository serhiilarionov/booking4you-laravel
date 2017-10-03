<?php

namespace App\Models;

class DistrictLang extends BaseModel
{
    protected $table = 'district_lang';
    public $timestamps = false;
    protected $fillable = ['name'];
}
