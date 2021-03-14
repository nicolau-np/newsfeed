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
        $getNegocios = Noticia::whereHas('categoria', function ($query) {
            $query->where('categoria', "Negocios");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $getModa = Noticia::whereHas('categoria', function ($query) {
            $query->where('categoria', "Moda");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $getTecnologia = Noticia::whereHas('categoria', function ($query) {
            $query->where('categoria', "Tecnologia");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $getJogos = Noticia::whereHas('categoria', function ($query) {
            $query->where('categoria', "Jogos");
        })->where('estado', "on")->limit(4)->get()->sortByDesc('id');

        $categorias = Categoria::where('estado', 'on')->get();

        $galeria = Noticia::orderBy('id', 'desc')->limit(6)->get();

        $data = [
            'title' => "angoNews",
            'menu' => "Home",
            'submenu' => null,
            'type' => "home",
            'getNegocios' => $getNegocios,
            'getModa' => $getModa,
            'getTecnologia' => $getTecnologia,
            'getJogos' => $getJogos,
            'getGaleria' => $galeria,
            'getCategorias' => $categorias,
        ];
        return view('home', $data);
    }

    public function contact()
    {
        $data = [
            'title' => "Contactar",
            'menu' => "Contactar",
            'submenu' => null,
            'type' => "contact",

        ];
        return view('contact', $data);
    }

    public function single_page($id)
    {
        $noticia = Noticia::find($id);
        if (!$noticia) {
            return back()->with(['error' => "Não encontrou notícia"]);
        }
        $publicacoes_relacionadas = Noticia::whereHas('categoria', function ($query) use ($noticia) {
            $query->where('categoria', $noticia->categoria->categoria);
        })->where('estado', "on")->where('id', '!=', $noticia->id)->inRandomOrder()->limit(3)->get();

        $categorias = Categoria::where('estado', 'on')->get();
        $data = [
            'title' => $noticia->title,
            'menu' => $noticia->title,
            'submenu' => null,
            'type' => "single_page",
            'getNoticia' => $noticia,
            'getCategorias' => $categorias,
            'getNoticiasRelacionadas' => $publicacoes_relacionadas,
        ];
        return view('single_page', $data);
    }

    public function category($categoria)
    {
        $categoriaLis = Categoria::where('categoria', $categoria)->first();
        if (!$categoriaLis) {
            return back()->with(['error' => "Não encontrou categoria"]);
        }
        $noticias = Noticia::where('id_categoria', $categoriaLis->id)->get();

        $data = [
            'title' => $categoriaLis->categoria,
            'menu' => $categoriaLis->categoria,
            'submenu' => null,
            'type' => "category",
            'getNoticias' => $noticias,
            'getCategoria'=>$categoriaLis,
        ];
        return view('category', $data);
    }
}