<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visualizacoes extends Model
{
    protected $table = "visualizacoes";

    protected $fillable = [
        'id_noticia',
        'value',
    ];

    public function noticia(){
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id');
    }
}