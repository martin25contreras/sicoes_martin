<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class IndicatorsLapse extends Model
{
    use EncryptationId;

    protected $table= "indicadores_lapso";
    protected $fillable = ['id','lapso_escolar','competencia_id','indicador_id'];
    protected $connection = "pgsql";
    protected $appends = ['competencia','indicador','statuses','crypt_id'];
    public $timestamps = false;

    public function getStatusesAttribute()
    {
        $Rs='';
        if ($this->lapso_escolar== 'I') {
            $Rs='Primer Momento';
        }
        if ($this->lapso_escolar== 'II') {
            $Rs='Segundo Momento';
        }
        if ($this->lapso_escolar== 'III') {
            $Rs='Tercer Momento';
        }
        return $Rs;
    }

    public function getCompetencias()
    {
        return $this->belongsTo(Competicies::class, 'competencia_id');
    }
    public function getCompetenciaAttribute()
    {
        return $this->getCompetencias->nombre_competencia;
    }

    public function getIndicadores()
    {
        return $this->belongsTo(Indicators::class, 'indicador_id');
    }
    public function getIndicadorAttribute()
    {
        return $this->getIndicadores->nombre;
    }
}
