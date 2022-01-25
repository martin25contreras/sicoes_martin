<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;
use DB;
use App\Models\Menu;

class User extends Model
{
    use EncryptationId;

    protected $table = "users";
    protected $fillable = ['id', 'nombre_usuario', 'apellido_usuario', 'username', 'password', 'password_decrypt','documento','telefono', 'email', 'special_permission', 'sensitive_info', 'cambiar_password', 'bloqueado', 'tiempo_inactividad', 'avatar', 'tipo_documento_id', 'telefono_operador_id', 'profile_id', 'tema_id', 'usuario_id', 'fecha_registro', 'ip'];
    protected $connection = "pgsql";
    public $timestamps = false;
    protected $appends = ['profile', 'crypt_id'];

    public function getMenu()
    {
        $Menu = Menu::Where('status', 1)->orderBy('order')->get()->toArray();
        foreach ($Menu as $key => $value) {
            foreach ($value['get_process'] as $key2 => $value2) {
                if (!in_array($this->profile_id, $value2['profile_array'])) {
                    unset($Menu[$key]['get_process'][$key2]);
                    unset($Menu[$key]['process'][$key2]);
                }
            }
            if (count($Menu[$key]['get_process']) == 0) {
                unset($Menu[$key]);
            }
        }
        return $Menu;
    }

    public function getProfile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function getProfileAttribute()
    {
        return $this->getProfile;
    }

    public function isSuspended()
    {
        //$instance = $this->hasMany(SuspendedUser::class, 'user_suspended_id');
        $instance = $this->getSuspensions();
        $list = $instance->getQuery()->whereBetween(DB::raw("'" . date('Y-m-d H:i:s') . "'"), [DB::raw('fecha_inicio'), DB::raw('fecha_fin')])->get();
        return count($list) > 0 ? true : false;
    }

    public function getSuspensions()
    {
        return $this->hasMany(SuspendedUser::class, 'usuario_suspendido_id');
    }
}
