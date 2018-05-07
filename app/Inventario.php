<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table='Inventario';
    protected $fillable = ['id_Producto','id_Categoria','Cantidad'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
