<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class TypeOperator extends Model
{
    use EncryptationId;

    protected $table = "tipo_operador";
    protected $fillable = ['id','descripcion'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
