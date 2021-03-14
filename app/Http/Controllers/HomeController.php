<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $getNegocios = Noticia::whereHas('categoria', function($query){
            $query->where('categoria', "Negocios");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $getModa = Noticia::whereHas('categoria', function($query){
            $query->where('categoria', "Moda");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $getTecnologia = Noticia::whereHas('categoria', function($query){
            $query->where('categoria', "Tecnologia");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $getJogos = Noticia::whereHas('categoria', function($query){
            $query->where('categoria', "Jogos");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $categorias = Categoria::where('estado', 'on')->get();
        
        $galeria = Noticia::orderBy('id', 'desc')->limit(6)->get();
  
        $data = [
            'title' => "angoNews",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",
            'getNegocios'=>$getNegocios,
            'getModa'=>$getModa,
            'getTecnologia'=>$getTecnologia,
            'getJogos'=>$getJogos,
            'getGaleria'=>$galeria,
            'getCategorias'=>$categorias,
        ];
        return view('home', $data);
    }

    public function contact(){
        $data = [
            'title' => "Contactar",
            'menu' => "Contactar",
            'submenu' => null,
            'type' => "contact",

        ];
        return view('contact', $data);
    }
}