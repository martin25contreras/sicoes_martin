<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class StaffArea extends Model
{
    use EncryptationId;

    protected $table= "personal_area";
    protected $fillable = ['id', 'cedula_personal', 'area_id','personal_id','estatus'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends = ['personal','area','nombre_apellido','crypt_id'];


    public function getNombreApellidoAttribute() { // Jose Perez
     
        return $this->getPersonals->nombres.' '.$this->getPersonals->apellidos;       
    }
    // public function getPersonalCedulaAttribute()
    // {
    //     return $this->getPersonals->nombre_documento_abreviacion->abreviacion . '-' . $this->cedula_personal;
    // }
    public function getPersonalAttribute()
    {
        return $this->getPersonals;
    }
    public function getAreaAttribute()
    {
        return $this->getAreas;
    }
    public function getAreas()
    {
        return $this->belongsTo(Area::class, 'area_id');
    }
    public function getPersonals()
    {
        return $this->belongsTo(Staff::class, 'personal_id');
    }
}
