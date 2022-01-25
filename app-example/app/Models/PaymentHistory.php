<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class PaymentHistory extends Model
{
    use EncryptationId;

    protected $table = "historial_pagos";
    protected $fillable = ['id','mes_pago','tipo_pago','fecha_pago','estatus_pago','envio_pago','pago_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
