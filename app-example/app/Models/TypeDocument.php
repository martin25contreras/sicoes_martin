<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class TypeDocument extends Model
{
    use EncryptationId;

    protected $table = "tipo_documento";
    protected $fillable = ['id','code','nombre_documento','abreviacion'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
