<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class PreInscription extends Model
{
    use EncryptationId;

    protected $table = "pre_inscripcion";
    protected $fillable = ['id','ano_preinscripcion','estatus','documento_id','postulante_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
