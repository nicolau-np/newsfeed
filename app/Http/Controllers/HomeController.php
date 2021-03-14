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

        $data = [
            'title' => "angoNews",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",
            'getNegocios'=>$getNegocios,
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