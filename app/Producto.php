<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='Producto';
    protected $fillable = ['id_Categoria', 'Nombre','precioVenta','precioCompra'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
