<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias = Noticia::orderBy('id', 'desc')->paginate(5);
        $data = [
            'title' => "Notícias",
            'menu' => "Notícias",
            'submenu' => null,
            'type' => "noticias",
            'getNoticias' => $noticias,
        ];
        return view('admin.news.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::where('estado', "on")->pluck('categoria', 'id');
        $data = [
            'title' => "Notícias",
            'menu' => "Notícias",
            'submenu' => null,
            'type' => "noticias",
            'getCategorias' => $categorias,
        ];
        return view('admin.news.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'min:4', 'max:255', 'unique:noticias,title'],
            'estado' => ['required', 'string', 'min:1', 'max:4'],
            'categoria' => ['required', 'string', 'min:2'],
            'foto' => ['required', 'mimes:jpg,jpeg,png,JPG,JPEG,PNG', 'max:10000'],
            'min_description' => ['required', 'string', 'min:20', 'max:255'],
            'descricao' => ['required', 'string', 'min:20'],
        ]);

        $data = [
            'id_categoria'=>$request->categoria,
            'title'=>$request->titulo,
            'min_description'=>$request->min_description,
            'description'=>$request->descricao,
            'estado'=>$request->estado,
            'imagem'=>null,
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}