<?php

namespace App\Http\Controllers;

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
        $data = [
            'title' => "angoNews",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",

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