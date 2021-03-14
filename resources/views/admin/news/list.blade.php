@extends('layouts.app_admin')
@section('content')
<div class="section">
    <h1>{{$menu}}</h1> &nbsp;&nbsp; <a href="/admin/noticias/create"> Novo </a>
</div>
<div class="section">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Desc.</th>
                <th>Estado</th>
                <th>Operações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($getNoticias as $noticias)
             <tr>
             <td>
                 <img src="{{asset($noticias->imagem)}}" alt="" style="width: 53px; height:53px;">
             </td>
            <td>{{$noticias->title}}</td>
            <td>{{$noticias->categoria->categoria}}</td>
            <td>{{$noticias->min_description}}</td>
            <td>{{$noticias->estado}}</td>
            <td>
            <a href="/admin/noticias/edit/{{$noticias->id}}" class="btn btn-primary btn-sm">Editar</a>&nbsp;&nbsp;
            <a href="/admin/noticias/delete/{{$noticias->id}}" class="btn btn-danger btn-sm">Eliminar</a>&nbsp;&nbsp;
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{$getNoticias->links()}}
    </div>
</div>
@endsection