<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = "noticias";

    protected $fillable = [
        'id_categoria',
        'title',
        'min_description',
        'description',
        'estado',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id');
    }

    public function visualizacao(){
        return $this->hasMany(Visualizacoes::class, 'id_noticia', 'id');
    }
}