<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class ControlRatings extends Model
{
    use EncryptationId;

    protected $table = "control_calificaciones";
    protected $fillable = ['id','estudiante_id','indicadores_lapso_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
