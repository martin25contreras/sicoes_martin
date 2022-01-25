<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Ratings extends Model
{
    use EncryptationId;

    protected $table = "calificaciones";
    protected $fillable = ['id','indicador_lapso_id','estudiante_id','literal'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
