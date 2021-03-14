<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PessoaSeeder extends Seeder
{
    static $pessoas = [
        [
            'id_municipio'=>1,
            'nome'=>"Sebastiao Combe",
            'genero'=>"M"
        ],
        [
            'id_municipio'=>2,
            'nome'=>"Fibras Admin",
            'genero'=>"M"
        ],
    ];
    public function run()
    {
        foreach(Self::$pessoas as $pessoa){
            DB::table('pessoas')->insert(
                $pessoa
            );
        }
    }
}