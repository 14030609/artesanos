<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='Estado';
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
