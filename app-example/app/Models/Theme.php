<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Theme extends Model
{
    use EncryptationId;

    protected $table = "tema";
    protected $fillable = ['id','descripcion','class_nombre'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
