<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $table = "canals";

    protected $fillable = [
       'canal',
        'img',
        'link',
       'estado',
    ];

    
}