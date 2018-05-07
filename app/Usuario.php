<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='Usuario';
    protected $fillable = ['nombre_Usuario','pass','id_Rol'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
