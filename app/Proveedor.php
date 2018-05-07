<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='Proveedor';
    protected $fillable = ['nombre', 'telefono','direccion','e_mail'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
