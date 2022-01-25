<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Inscription extends Model
{
    use EncryptationId;

    protected $table = "inscripcion";
    protected $fillable = ['id','fecha','año_cursar','seccion','estatus_pago','representante_id','estudiante_id','preincripcion_id'];
    protected $connection = "pgsql";
    protected $appends =['crypt_id'];
    public $timestamps = false;
}
