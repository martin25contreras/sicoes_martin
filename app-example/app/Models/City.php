<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "ciudad";
    protected $fillable = ['id','name_ciudad','capital','estado_id'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends =['crypt_id'];
}
