<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class RestrictedAccess extends Model
{
    use EncryptationId;

    protected $table = "restriccion_acceso";
    protected $fillable = ['id','usuario_id','process_id','fecha_inicio','ip'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
