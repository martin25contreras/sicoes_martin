<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Indicators extends Model
{
    use EncryptationId;

    protected $table = "indicadores";
    protected $fillable = ['id', 'nombre', 'materia','estatus'];
    protected $connection = "pgsql";
    protected $appends = ['statuses_indicators','crypt_id'];
    public $timestamps = false;

    public function getStatusesIndicatorsAttribute()
    {
        $Rs='';

        if ($this->materia== 'Mat') {
            $Rs='Matemática';
        }

        if ($this->materia== 'Len') {
            $Rs='Lenguaje';
        }

        if ($this->materia== 'Ci_Na') {
            $Rs='Ciencia Naturales';
        }

        if ($this->materia== 'Ci_So') {
            $Rs='Ciencia Sociales';
        }

        if ($this->materia== 'In') {
            $Rs='Inglés';
        }

        if ($this->materia== 'Est') {
            $Rs='Educación Estética';
        }

        if ($this->materia== 'Ed_fi') {
            $Rs='Educación Física';
        }

        if ($this->materia== 'Ed_Fe') {
            $Rs='Educación para la Fé';
        }

        if ($this->materia== 'Ludo') {
            $Rs='Ludoteca';
        }

        if ($this->materia== 'Inf') {
            $Rs='Informática';
        }

        if ($this->materia== 'Ref') {
            $Rs='Refuerzo Pedadagógio';
        }

        return $Rs;
    }
}
