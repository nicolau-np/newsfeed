<?php

namespace App\Http\Controllers;

use App\Canal;
use Illuminate\Http\Request;

class TvController extends Controller
{
    public function index()
    {
        $canals = Canal::where(['estado' => "on"])->get();
        $data = [
            'title' => "Tv Online",
            'type' => "tv",
            'menu' => "Tv Online",
            'submenu' => "Listar",
            'getCanals' => $canals,
        ];

        return view('tv.list', $data);
    }

    public function show($id)
    {
        $canals = Canal::find($id);
        if (!$canals) {
            return back()->with(['error' => "Nao encontrou"]);
        }
        $data = [
            'title' => $canals->canal,
            'type' => "showtv",
            'menu' => "Tv Online",
            'submenu' => "Assistir",
            'getCanal' => $canals,
        ];

        return view('tv.view', $data);
    }
}