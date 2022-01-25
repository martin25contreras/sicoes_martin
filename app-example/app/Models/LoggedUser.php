<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class LoggedUser extends Model
{
    use EncryptationId;

    protected $table = "usuario_logueado";
    protected $fillable = [
        'id',
        'fecha_inicio',
        'platform',
        'browser',
        'browser_engine',
        'ip',
        'usuario_id',
    ];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
