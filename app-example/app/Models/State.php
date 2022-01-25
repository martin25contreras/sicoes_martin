<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = "states";
    protected $fillable = ['id','nombre_estado','pais_id'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends =['crypt_id'];
}
