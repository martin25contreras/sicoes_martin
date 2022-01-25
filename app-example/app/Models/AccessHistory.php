<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class AccessHistory extends Model
{
    use EncryptationId;

    protected $table = "historial_acceso";
    protected $fillable = [
      'id',
      'usuario_id',
      'fecha_entrada',
      'fecha_salida',
      'ip'
  ];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
