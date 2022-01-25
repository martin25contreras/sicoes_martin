<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Profile extends Model
{
    use EncryptationId;

    protected $table = "perfil";
    protected $fillable = ['id','code','nombre_perfil','descripcion','estatus'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;

    public function getProcesses()
    {
        return $this->belongsToMany(Process::class, 'perfil_procesos')
                        ->withPivot('process_id', 'profile_id');
    }
}
