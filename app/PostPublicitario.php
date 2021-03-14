<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostPublicitario extends Model
{
    protected $table = "post_publicitarios";
    
    protected $fillable = [
        'titulo',
        'link',
        'linkImg',
        'estado',
    ];
}