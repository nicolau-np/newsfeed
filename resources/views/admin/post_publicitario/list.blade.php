@extends('layouts.app_admin')
@section('content')
<div class="section">
    <h1>{{$menu}}</h1> &nbsp;&nbsp; <a href="/admin/publicidades/create"> Novo </a>
</div>
<div class="section">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titulo</th>
                <th>Link</th>
                <th>Estado</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getPostPublicitario as $post_publicitario)
             <tr>
             <td>
                 <img src="{{asset($post_publicitario->linkImg)}}" alt="" style="width: 150px; height:53px;">
             </td>
            <td>{{$post_publicitario->titulo}}</td>
            <td><a href="{{$post_publicitario->link}}">{{$post_publicitario->link}}</a></td>
            <td>{{$post_publicitario->estado}}</td>
            <td>
            <a href="/admin/noticias/edit/{{$post_publicitario->id}}" class="btn btn-primary btn-sm">Editar</a>&nbsp;&nbsp;
            <a href="/admin/noticias/delete/{{$post_publicitario->id}}" class="btn btn-danger btn-sm">Eliminar</a>&nbsp;&nbsp;
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{$getPostPublicitario->links()}}
    </div>
</div>
@endsection