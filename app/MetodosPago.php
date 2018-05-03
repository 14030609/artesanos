<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodosPago extends Model
{
    protected $table='MetodosPago';
    protected $fillable = ['nombre', 'descripcion'];

    public $timestamps  = false;
}
