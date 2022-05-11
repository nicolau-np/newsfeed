@extends('layouts.app_admin')
@section('content')
    <div class="section">
        <h1>{{ $menu }}</h1> &nbsp;&nbsp; <a href="/admin/tvonline/create"> Novo </a>
    </div>
    <div class="section">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Canal</th>
                    <th>Link</th>
                    <th>Estado</th>
                    <th>Operações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($getCanals as $canals)
                    <tr>
                        <td>
                            <img src="{{ $canals->img }}" alt="" style="width: 53px; height:53px;">
                        </td>
                        <td>{{ $canals->canal }}</td>
                        <td>{{ $canals->link }}</td>
                        <td>{{ $canals->estado }}</td>

                        <td>
                            <a href="/admin/tvonline/edit/{{ $canals->id }}"
                                class="btn btn-primary btn-sm">Editar</a>&nbsp;&nbsp;
                            <a href="/admin/tvonline/delete/{{ $canals->id }}"
                                class="btn btn-danger btn-sm">Eliminar</a>&nbsp;&nbsp;
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $getCanals->links() }}
        </div>
    </div>
@endsection
