<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Area extends Model
{
    use EncryptationId;

    protected $table= "area";
    protected $fillable = ['id', 'nombre', 'carga_horaria','grado','seccion','estatus'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends = ['materia_seccion','crypt_id'];

    public function getMateriaSeccionAttribute()
    {
        return $this->nombre . ', ' . 'Grado: '. $this->seccion . ', Sección: '. $this->seccion;
    }
}
