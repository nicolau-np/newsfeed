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
            'submenu' => "Listar",
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
            'submenu' => "Novo",
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
            'categoria' => ['required', 'Integer'],
            'foto' => ['required', 'mimes:jpg,jpeg,png,JPG,JPEG,PNG', 'max:10000'],
            'min_description' => ['required', 'string', 'min:20', 'max:255'],
            'descricao' => ['required', 'string', 'min:20'],
        ]);

        $data = [
            'id_categoria' => $request->categoria,
            'title' => $request->titulo,
            'min_description' => $request->min_description,
            'description' => $request->descricao,
            'estado' => $request->estado,
            'imagem' => null,
        ];

        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $path = $request->file('foto')->store('img_noticias');
            $data['imagem'] = $path;
        }

        if (Noticia::create($data)) {
            return back()->with(['success' => "Feito com sucesso"]);
        }
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
        $noticia = Noticia::find($id);
        if (!$noticia) {
            return back()->with(['error' => "Não encontrou a notícia"]);
        }

        $categorias = Categoria::where('estado', "on")->pluck('categoria', 'id');
        $data = [
            'title' => "Notícias",
            'menu' => "Notícias",
            'submenu' => "Editar",
            'type' => "noticias",
            'getCategorias' => $categorias,
            'getNoticia' => $noticia,
        ];
        return view('admin.news.edit', $data);
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
        $noticia = Noticia::find($id);
        if (!$noticia) {
            return back()->with(['error' => "Não encontrou a notícia"]);
        }

        $request->validate([
            'titulo' => ['required', 'string', 'min:4', 'max:255',],
            'estado' => ['required', 'string', 'min:1', 'max:4'],
            'categoria' => ['required', 'Integer'],
            'min_description' => ['required', 'string', 'min:20', 'max:255'],
            'descricao' => ['required', 'string', 'min:20'],
        ]);

        $data = [
            'id_categoria' => $request->categoria,
            'title' => $request->titulo,
            'min_description' => $request->min_description,
            'description' => $request->descricao,
            'estado' => $request->estado,
            'imagem' => $noticia->imagem,
        ];
        if ($noticia->title != $request->titulo) {
            $request->validate([
                'titulo' => ['required', 'string', 'min:4', 'max:255', 'unique:noticias,title'],
            ]);
        }
        
        if ($request->hasFile('foto') && $request->foto->isValid()) {
            $request->validate([
                'foto' => ['required', 'mimes:jpg,jpeg,png,JPG,JPEG,PNG', 'max:10000']
            ]);
            if ($noticia->imagem != "" && file_exists($noticia->imagem)) {
                unlink($noticia->imagem );
            }
            $path = $request->file('foto')->store('img_noticias');
            $data['imagem'] = $path;
        }

        if (Noticia::find($id)->update($data)) {
            return back()->with(['success' => "Feito com sucesso"]);
        }
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