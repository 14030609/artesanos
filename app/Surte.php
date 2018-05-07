<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surte extends Model
{
    protected $table='Surte';
    protected $fillable = ['id_Proveedor','id_Producto', 'fecha','Cantidad'];
    protected $guarded = ['id'];
    public $timestamps  = false;

}
