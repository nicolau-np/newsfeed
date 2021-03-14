<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{

    static $categorias = [
        [
            'categoria' => "Política",
            'estado' => "on",
        ], [
            'categoria' => "Desporto",
            'estado' => "on",
        ], [
            'categoria' => "Tecnologia",
            'estado' => "on",
        ], [
            'categoria' => "Moda",
            'estado' => "on",
        ], [
            'categoria' => "Negócios",
            'estado' => "on",
        ], [
            'categoria' => "Jogos",
            'estado' => "on",
        ], [
            'categoria' => "Estilo de Vida",
            'estado' => "on",
        ],
    ];

    public function run()
    {
        foreach (self::$categorias as $categoria) {
            DB::table('categorias')->insert(
                $categoria
            );
        }
    }
}