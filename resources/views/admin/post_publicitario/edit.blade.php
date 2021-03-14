@extends('layouts.app_admin')
@section('content')
<div class="section">
    <h1>{{$menu}}</h1> &nbsp;&nbsp; <a href="/admin/publicidades/"> Listar </a>
</div>
<div class="section">
<div class="form">
    @if (session('error'))
    <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{__(session('error'))}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    @endif

    @if (session('success'))
    <div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> {{session('success')}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
     @endif
     {{Form::open(['method'=>"put", 'name'=>"formBlog", 'url'=>"/admin/publicidades/update/{$getPostPublicitario->id}", 'enctype'=>"multipart/form-data"])}}
    @csrf
        <fieldset>
            <legend>Dados</legend>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('titulo', "Título")}} <span class="text-danger">*</span>
                        {{Form::text('titulo', $getPostPublicitario->titulo, ['placeholder'=>"Título", 'class'=>"form-control"])}}
                        @if($errors->has('titulo'))
                        <span class="text-danger">{{$errors->first('titulo')}}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                       {{Form::label('estado', 'Estado')}} <span class="text-danger">*</span>
                       {{ Form::select('estado', [
                           'on'=>"on",
                           'off'=>"off"
                       ], $getPostPublicitario->estado, ['placeholder'=>"Estado", 'class'=>"form-control"]) }}
                       @if($errors->has('estado'))
                       <span class="text-danger">{{$errors->first('estado')}}</span>
                       @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('link', "Link")}} <span class="text-danger">*</span>
                        {{Form::text('link', $getPostPublicitario->link, ['placeholder'=>"Link acesso a pagina", 'class'=>"form-control"])}}
                        @if($errors->has('link'))
                        <span class="text-danger">{{$errors->first('link')}}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('linkImg', "Link da Foto")}} <span class="text-danger">*</span>
                        {{Form::text('linkImg', $getPostPublicitario->linkImg, ['placeholder'=>"Link da Foto", 'class'=>"form-control"])}}
                        @if($errors->has('linkImg'))
                        <span class="text-danger">{{$errors->first('linkImg')}}</span>
                        @endif
                    </div>
                </div>
              
            </div>
           <br/>
         </fieldset>
    
    <div class="row">
    <div class="col-md-2">
       {{ Form::submit('Salvar', ['class'=>"btn btn-primary"]) }} 
    </div>
   </div>
        
{{Form::close()}}
    
</div>
</div>



@endsection