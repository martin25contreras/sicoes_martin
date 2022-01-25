<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Postulant extends Model
{
    use EncryptationId;

    protected $table = "postulante";
    protected $fillable = [
        'id','nombres_estudiante','apellidos_estudiante','cedula_estudianta','grado',
        'nombre_representante','apellido_representante','cedula','fecha_nacimiento',
        'correo','direccion','telefono','estatus'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
