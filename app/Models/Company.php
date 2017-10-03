<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $connection = 'pgsql-loopback';

    protected $table = 'company';

    public $timestamps = false;

    public $fillable = [
        'name',
        'title',
        'cityid',
        'categoryid',
        'point',
        'fulladdress',
        'active',
        'createdat',
        'updatedat'
    ];

    public function detail()
    {
        return $this->hasOne('App\Models\CompanyDetail', 'companyid');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'categorycompany', 'companyid', 'categoryid');
    }
}
