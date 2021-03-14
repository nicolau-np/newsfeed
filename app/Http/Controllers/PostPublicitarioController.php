<?php

namespace App\Http\Controllers;

use App\PostPublicitario;
use Illuminate\Http\Request;

class PostPublicitarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post_publicitario = PostPublicitario::orderBy('id', 'desc')->paginate(5);
        $data = [
            'title' => "Post Publicitário",
            'menu' => "Post Publicitário",
            'submenu' => "Listar",
            'type' => "post_publicitario",
            'getPostPublicitario' => $post_publicitario,

        ];
        return view('admin.post_publicitario.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => "Post Publicitário",
            'menu' => "Post Publicitário",
            'submenu' => "Novo",
            'type' => "post_publicitario",

        ];
        return view('admin.post_publicitario.create', $data);
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
            'titulo' => ['required', 'string', 'min:5', 'max:255'],
            'estado' => ['required', 'string', 'min:1', 'max:4'],
            'link' => ['required', 'string'],
            'linkImg' => ['required', 'string'],
        ]);

        $data = [
            'titulo' => $request->titulo,
            'link' => $request->link,
            'linkImg' => $request->linkImg,
            'estado' => $request->estado,
        ];

        if (PostPublicitario::create($data)) {
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