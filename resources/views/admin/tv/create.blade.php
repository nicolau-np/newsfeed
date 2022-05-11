@extends('layouts.app_admin')
@section('content')
<div class="section">
    <h1>{{$menu}}</h1> &nbsp;&nbsp; <a href="/admin/tvonline/"> Listar </a>
</div>
<div class="section">
<div class="form">
    @if (session('error'))
    <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{__(session('error'))}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
    @endif

    @if (session('success'))
    <div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> {{session('success')}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
     @endif
     {{Form::open(['method'=>"post", 'name'=>"formBlog", 'url'=>"/admin/tvonline/store", 'enctype'=>"multipart/form-data"])}}
    @csrf
        <fieldset>
            <legend>Dados</legend>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{Form::label('canal', "Canal")}} <span class="text-danger">*</span>
                        {{Form::text('canal', null, ['placeholder'=>"Canal", 'class'=>"form-control"])}}
                        @if($errors->has('canal'))
                        <span class="text-danger">{{$errors->first('canal')}}</span>
                        @endif
                    </div>
                </div>

                <div class="col-md-3">
                    {{Form::label('link', 'Link')}} <span class="text-danger">*</span>
                    {{ Form::text('link', null, ['class'=>"form-control", 'placeholder'=>"Link"]) }}
                    @if($errors->has('link'))
                       <span class="text-danger">{{$errors->first('link')}}</span>
                    @endif
                </div>

                <div class="col-md-3">
                    {{Form::label('img', 'Imagem')}} <span class="text-danger">*</span>
                    {{ Form::text('img', null, ['class'=>"form-control",  'placeholder'=>"Imagem"]) }}
                    @if($errors->has('img'))
                       <span class="text-danger">{{$errors->first('img')}}</span>
                    @endif
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
