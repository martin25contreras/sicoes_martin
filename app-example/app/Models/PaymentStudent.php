<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\EncryptationId;

class PaymentStudent extends Model
{
    use EncryptationId;

    protected $table = "pagos_estudiante";
    protected $fillable = ['id','tipo_pago','monto_asignado','estudiante_id','pago_id'];
    protected $connection = "pgsql";
    protected $appends = ['crypt_id'];
    public $timestamps = false;
}
