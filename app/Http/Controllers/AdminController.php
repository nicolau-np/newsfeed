<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'title' => "angoNews Admin",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",

        ];
        return view('admin.home', $data);
    }
}