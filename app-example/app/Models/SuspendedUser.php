<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class SuspendedUser extends Model
{
    use EncryptationId;

    protected $table = "usuario_suspendido";
    protected $fillable = ['id','fecha_inicio','fecha_fin','ip','usuario_suspendido_id','usuario_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
