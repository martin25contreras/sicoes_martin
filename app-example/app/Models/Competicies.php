<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Competicies extends Model
{
    use EncryptationId;
    protected $table = "competencias";
    protected $fillable = ['id', 'nombre_competencia','estatus', 'ano_escolar'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
