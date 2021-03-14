<?php

namespace App\Http\Controllers;

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
        })->limit(4)->get()->sortByDesc('id');

        $getModa = Noticia::whereHas('categoria', function($query){
            $query->where('categoria', "Moda");
        })->limit(4)->get()->sortByDesc('id');

        $getTecnologia = Noticia::whereHas('categoria', function($query){
            $query->where('categoria', "Tecnologia");
        })->limit(4)->get()->sortByDesc('id');

        $galeria = Noticia::orderBy('id', 'desc')->limit(6)->get();
        
        $data = [
            'title' => "angoNews",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",
            'getNegocios'=>$getNegocios,
            'getModa'=>$getModa,
            'getTecnologia'=>$getTecnologia,
            'getGaleria'=>$galeria,
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