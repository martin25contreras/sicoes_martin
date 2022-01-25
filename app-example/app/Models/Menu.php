<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Menu extends Model
{
    use EncryptationId;

    protected $table = "menus";
    protected $fillable = ['id', 'nombre_menu', 'descripcion', 'icon', 'order','status'];
    protected $connection = "pgsql";
    protected $appends = ['estatus','process','crypt_id'];
    public $timestamps = false;

    public function getProcessAttribute()
    {
        return $this->getProcess;
    }

    public function getProcess()
    {
        return $this->hasMany(Process::class, 'menu_id')->orderBy('order');
    }

    public function getEstatusAttribute()
    {
        $Rs='';
        if ($this->status== '1') {
            $Rs='Activo';
        }
        if ($this->status== '0') {
            $Rs='Inactivo';
        }

        return $Rs;
    }
}
