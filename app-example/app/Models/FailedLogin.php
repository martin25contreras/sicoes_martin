<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class FailedLogin extends Model
{
    use EncryptationId;

    protected $table = "intentos_login";
    protected $fillable = ['id','usuario_id','fecha_inicio','ip'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
