<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envios extends Model
{
    protected $table='Envios';
    protected $fillable = ['nombre', 'email','id_Ciudad','id_Estado','telefono','direccion','id_Usuario'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
