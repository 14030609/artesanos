<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table='Ciudad';
    protected $fillable = ['nombre','id_Estado'];
    protected $guarded = ['id'];
    public $timestamps  = false;
}
