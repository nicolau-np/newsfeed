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
            'title' => "NewsFeed",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",

        ];
        return view('home', $data);
    }
}