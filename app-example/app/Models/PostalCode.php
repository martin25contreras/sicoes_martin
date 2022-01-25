<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    protected $table = "codigo_postal";
    protected $fillable = ['id','code','estado_id'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends =['crypt_id'];
}
