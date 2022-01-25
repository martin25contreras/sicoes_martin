<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Document extends Model
{
    use EncryptationId;

    protected $table = "documento";
    protected $fillable = ['id','nombre_documento','tipo_documento','estatus'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}