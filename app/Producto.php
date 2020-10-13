<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'user_id', 'nombre', 'descripcion', 'talla', 'marca', 'prenda', 'costo', 'foto'
    ];

    
}
