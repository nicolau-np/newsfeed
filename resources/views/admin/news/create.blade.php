@extends('layouts.app_admin')
@section('content')
<div class="section">
    <h1>{{$menu}}</h1> &nbsp;&nbsp; <a href="/admin/noticias/"> Listar </a>
</div>
<div class="section">
<div class="form">
    @if (session('error'))
    <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{__(session('error'))}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    @endif

    @if (session('success'))
    <div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> {{session('success')}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
     @endif
     {{Form::open(['method'=>"post", 'name'=>"formBlog", 'url'=>"/admin/noticias/store", 'enctype'=>"multipart/form-data"])}}
    @csrf
        <fieldset>
            <legend>Dados</legend>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('titulo', "Título")}} <span class="text-danger">*</span>
                        {{Form::text('titulo', null, ['placeholder'=>"Título", 'class'=>"form-control"])}}
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
                       ], null, ['placeholder'=>"Estado", 'class'=>"form-control"]) }}
                       @if($errors->has('estado'))
                       <span class="text-danger">{{$errors->first('estado')}}</span>
                       @endif
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                       {{Form::label('categoria', 'Categoria')}} <span class="text-danger">*</span>
                       {{ Form::select('categoria', $getCategorias, null, ['placeholder'=>"Categoria", 'class'=>"form-control"]) }}
                       @if($errors->has('categoria'))
                       <span class="text-danger">{{$errors->first('categoria')}}</span>
                       @endif
                    </div>
                </div>
               
                <div class="col-md-3">
                    <div class="form-group">
                       {{Form::label('foto', 'Foto')}} <span class="text-danger">*</span>
                       {{ Form::file('foto', null, ['placeholder'=>"Foto", 'class'=>"form-control"]) }}
                       @if($errors->has('foto'))
                       <span class="text-danger">{{$errors->first('foto')}}</span>
                       @endif
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    {{Form::label('pDescricao', 'Rescalgo da Notícia')}} <span class="text-danger">*</span>
                    {{ Form::textarea('pDescricao', null, ['class'=>"form-control", 'cols'=>"100", "rows"=>"3", 'placeholder'=>"Rescalgo da Notícia"]) }}
                    @if($errors->has('pDescricao'))
                       <span class="text-danger">{{$errors->first('pDescricao')}}</span>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{Form::label('descricao', 'Notícia Completa')}} <span class="text-danger">*</span>
                    {{ Form::textarea('descricao', null, ['class'=>"form-control textarea", 'style'=>"width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;", 'cols'=>"100", "rows"=>"4", 'placeholder'=>"Notícia Completa"]) }}
                    @if($errors->has('descricao'))
                       <span class="text-danger">{{$errors->first('descricao')}}</span>
                    @endif
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