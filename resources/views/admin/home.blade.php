@extends('layouts.app_admin')
@section('content')
    <div class="section">
        <h1>angoNews Admin</h1>
    </div>
    <div class="section">
        Seja bem vindo {{Auth::user()->pessoa->nome}}
        <br/>
        <a href="/admin/usuario/edit">Editar Perfil</a>
    </div>
@endsection