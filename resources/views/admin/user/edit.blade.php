@extends('layouts.app_admin')
@section('content')
    <div class="section">
        <div class="form">
            @if (session('error'))
            <div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> {{__(session('error'))}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
            @endif
        
            @if (session('success'))
            <div class="alert bg-success" role="alert"><em class="fa fa-lg fa-check">&nbsp;</em> {{session('success')}} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a></div>
             @endif
             {{Form::open(['method'=>"post", 'name'=>"formPerfil", 'url'=>"/admin/usuario/update", 'enctype'=>"multipart/form-data"])}}
            @csrf
                <fieldset>
                <legend>{{Auth::user()->pessoa->nome}} <span style="font-size: 12px; font-weight: normal;">Editar Perfil</span></legend>
        
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                {{Form::label('passe1', "Palavra-Passe")}} <span class="text-danger">*</span>
                                {{Form::password('passe1', null, ['placeholder'=>"Palavra-Passe", 'class'=>"form-control"])}}
                                @if($errors->has('passe1'))
                                <span class="text-danger">{{$errors->first('passe1')}}</span>
                                @endif
                            </div>
                        </div>
        
                        <div class="col-md-4">
                            <div class="form-group">
                                {{Form::label('passe2', "Confirmar Palavra-Passe")}} <span class="text-danger">*</span>
                                {{Form::password('passe2', null, ['placeholder'=>"Confirmar Palavra-Passe", 'class'=>"form-control"])}}
                                @if($errors->has('passe2'))
                                <span class="text-danger">{{$errors->first('passe2')}}</span>
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