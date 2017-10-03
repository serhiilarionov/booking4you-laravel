<?php

namespace App\Models;

class StreetLang extends BaseModel
{
    protected $table = 'street_lang';
    public $timestamps = false;
    protected $fillable = ['name'];
}
