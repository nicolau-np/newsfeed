<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'id_pessoa' => 1,
                'email' => "nic340k@gmail.com",
                'password' => Hash::make("babaca"),
                'estado' => "on",
                'nivel_acesso' => "admin",
            ],

            [
                'id_pessoa' => 1,
                'email' => "geral@angolanews.co.ao",
                'password' => Hash::make("angolanews2021"),
                'estado' => "on",
                'nivel_acesso' => "admin",
            ],


        ]);
    }
}