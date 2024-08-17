<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class palabra extends Model {
 /**
     * Relación inversa: Muchos a uno con el modelo Categoria.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    protected $table = 'palabras';
    protected $fillable = ['palabra','categoria_id'];

// Esta funcion es para la relacion de muchos a uno 
public function categorias(){ 
            return $this->belongsTo('App\Models\categoria');
    }
}

