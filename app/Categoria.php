<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = [
        'categoria',
        'estado',
    ];

    public function noticia(){
        return $this->hasMany(Noticia::class, 'id_categoria', 'id');
    }
}