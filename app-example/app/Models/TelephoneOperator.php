<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class TelephoneOperator extends Model
{
    use EncryptationId;

    protected $table = "telefono_operador";
    protected $fillable = ['id','code','descripcion','pais_id','tipo_operador_id'];
    protected $connection = "pgsql";
    protected $appends = ['country','crypt_id'];
    public $timestamps = false;

    public function getCountryAttribute()
    {
        return $this->belongsTo(Country::class, 'pais_id')->get()->toArray();
    }
}
