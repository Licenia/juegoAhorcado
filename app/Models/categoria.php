<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    /**
     * Relación uno a muchos con el modelo Palabra.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    protected $table = 'categorias';
    protected $fillable =['nombre'];
  
    public function palabras()
    {
        return $this->hasMany('App\Models\palabra');
    }
}
