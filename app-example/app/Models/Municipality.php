<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = "municipio";
    protected $fillable = ['id','nombre_municipio','estado_id'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends =['crypt_id'];
}
