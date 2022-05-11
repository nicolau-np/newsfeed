<?php

namespace App\Http\Controllers;

use App\Canal;
use Illuminate\Http\Request;

class TvOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canals = Canal::paginate(10);
        $data = [
            'title' => "TV Online",
            'menu' => "TV Online",
            'submenu' => "Novo",
            'type' => "tvonline",
            'getCanals' => $canals,
        ];
        return view('admin.tv.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => "TV Online",
            'menu' => "TV Online",
            'submenu' => "Novo",
            'type' => "tvonline",
        ];
        return view('admin.tv.create', $data);
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
            'canal' => ['required', 'string',],
            'estado' => ['required', 'string', 'min:1', 'max:4'],
            'link' => ['required', 'string'],
            'img' => ['required', 'string'],
        ]);

        $data = [
            'canal' => $request->canal,
            'img' => $request->img,
            'link' => $request->link,
            'estado' => $request->estado,
        ];

        if (Canal::create($data)) {
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
        $canal = Canal::find($id);
        if (!$canal) {
            return back()->with(['error' => "Nao encontrou"]);
        }

        $data = [
            'title' => "TV Online",
            'menu' => "TV Online",
            'submenu' => "Editar",
            'type' => "tvonline",
            'getCanal' => $canal,
        ];
        return view('admin.tv.edit', $data);
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
        $canal = Canal::find($id);
        if (!$canal) {
            return back()->with(['error' => "Nao encontrou"]);
        }

        $request->validate([
            'canal' => ['required', 'string',],
            'estado' => ['required', 'string', 'min:1', 'max:4'],
            'link' => ['required', 'string'],
            'img' => ['required', 'string'],
        ]);

        $data = [
            'canal' => $request->canal,
            'img' => $request->img,
            'link' => $request->link,
            'estado' => $request->estado,
        ];

        if (Canal::find($id)->update($data)) {
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