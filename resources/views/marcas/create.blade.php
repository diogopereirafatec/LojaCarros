@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i>Inclusão de Nova Marca</h1>
@stop

@section('content')
<form method="post" action="{{ route('marcas.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group col-md-6">
                <input type="text" name="nome_marca" id="nome_marca" class="form-control" required placeholder="Nome da Marca">
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{ route('marcas.index') }}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Gravar</button>
        </div>
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop
