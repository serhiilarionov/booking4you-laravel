<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $connection = 'pgsql-loopback';

    protected $table = 'companydetail';

    public $timestamps = false;

    public $fillable = [
        'phone',
        'email',
        'website',
        'worktime',
        'imagelist',
    ];
}
