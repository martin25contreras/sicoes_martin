<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Representative extends Model
{
    use EncryptationId;

    protected $table = "representante";
    protected $fillable = ['id','documento','primer_nombre','segundo_nombre','primer_apellido','segundo_apellido','fecha_nacimiento','telefono','email','tipo_documento_id','telefono_operador_id', 'ocupacion', 'tipo_ocupacion', 'principal', 'direccion_ocupacion'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];

    public $timestamps = false;
}
