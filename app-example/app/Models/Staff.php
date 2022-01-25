<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Staff extends Model
{
    use EncryptationId;

    protected $table = "personal";
    protected $fillable = ['id', 'nombres', 'apellidos','cedula','direccion', 'correo','telefono_movil', 'telefono_casa','tipo_documento_id','dia_nacimiento','mes_nacimiento', 'ano_nacimiento', 'cargo'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends = ['fecha_nacimiento','nombre_documento','nombre_documento_abreviacion','nombre_apellido','crypt_id'];

    public function getFechaNacimientoAttribute() // 00/00/0000
    {
        return $this->dia_nacimiento.'/'.$this->mes_nacimiento.'/'.$this->ano_nacimiento;
    }

    public function getNombreDocumentoAbreviacionAttribute() { // V
     
        return $this->getTipoDocumento->abreviacion;
    }

    public function getNombreDocumentoAttribute() { // V-00000000
        return $this->getTipoDocumento->abreviacion . '-' . $this->cedula;
    }

    public function getNombreApellidoAttribute() { // Jose Perez
     
        return $this->nombres.' '.$this->apellidos;       
    }

    public function getTipoDocumento() {
        return $this->belongsTo(TypeDocument::class, 'tipo_documento_id');
    }
}
