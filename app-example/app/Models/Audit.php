<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Audit extends Model
{
    use EncryptationId;

    protected $table = "audit";
    protected $fillable = [
      'id',
      'fecha_acceso',
      'data_procesada',
      'process_id',
      'historial_accseso_id'
  ];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
