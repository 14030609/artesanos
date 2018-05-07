<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table='Categoria';
    protected $fillable = ['Descripcion'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
