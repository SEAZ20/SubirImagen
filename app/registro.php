<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
    public $table = 'registros';
    public $timestamps = false;
    protected $fillable = [
        'descripcion', 'numero', 'imagen', 'fech_inicio', 'fech_fin'
    ];
}
