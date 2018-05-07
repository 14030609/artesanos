<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuponDescuento extends Model
{
    protected $table='CuponDescuento';
    protected $fillable = ['nombre', 'descripcion','fecha_inicio','fecha_termino','porcentaje'];
    protected $guarded = ['id'];
    public $timestamps  = false;

}
