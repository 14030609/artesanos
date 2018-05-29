<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='Venta';
    protected $fillable = ['id_Usuario', 'Fecha_Venta','Subtotal','iva','TotalVenta','id_CuponDescuento','id_MetodosPago'];
    protected $guarded = ['id'];
    public $timestamps  = false;

}
