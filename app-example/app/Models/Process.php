<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Process extends Model
{
    use EncryptationId;

    protected $table = "procesos";
    protected $fillable = ['id', 'nombre_proceso', 'descripcion', 'route','estatus', 'menu_id'];
    protected $connection = "pgsql";
    protected $appends = ['profile', 'profile_array','crypt_id'];
    public $timestamps = false;

    public function getProfileArrayAttribute()
    {
        $list_id = array();
        foreach ($this->getProfile as $key => $value) {
            $list_id[] = $value->id;
        }
        return $list_id;
    }

    public function getProfileAttribute()
    {

        return $this->getProfile;
    }

    public function getProfile()
    {
        return $this->belongsToMany(Profile::class, 'perfil_procesos')
                        ->withPivot('profile_id', 'process_id');
                        
    }

    public function getMenus()
    {
        return $this->hasMany(Menu::class, 'menu_id');
    }
}
