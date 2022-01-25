<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Student extends Model
{
    use EncryptationId;

    protected $table = "estudiante";
    protected $fillable = ['id','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','cedula','correo','genero','telefono','dia_nacimiento','mes_nacimiento','ano_nacimiento','direccion'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}