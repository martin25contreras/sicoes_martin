<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Country extends Model
{
    use EncryptationId;

    protected $table = "pais";
    protected $fillable = ['id','code','nombre_pais','abreviacion','code_telefono','default'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;

    public function getListTelephoneOperators()
    {
        return $this->getTelephoneOperators;
    }

    public function getTelephoneOperators()
    {
        return $this->hasMany(TelephoneOperator::class, 'pais_id');
    }
}
