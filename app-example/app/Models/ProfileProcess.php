<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class ProfileProcess extends Model
{
    use EncryptationId;

    protected $table = "perfil_procesos";
    protected $fillable = ['id','fecha_registro','process_id','profile_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
