<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class PasswordHistory extends Model
{
    use EncryptationId;

    protected $table = "password_historial";
    protected $fillable = ['id','password','fecha_inicio','fecha_fin','usuario_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
