<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleVenta extends Model
{
    protected $table='detalleVenta';
    protected $fillable = ['id_Producto', 'id_Venta','cantidadProducto','Total'];
    protected $guarded = ['id'];
    public $timestamps  = false;

}
