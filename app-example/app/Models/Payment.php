<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class Payment extends Model
{

    use EncryptationId;

    protected $table = "pagos";
    protected $fillable = ['id','nombre_pago','monto_asignado','estatus','moneda'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
