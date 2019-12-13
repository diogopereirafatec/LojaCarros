@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1>Detalhes da Marca</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do cadastro da Marca
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th>ID</th>
                    <th>Nome da Marca</th>
                </tr>
                <tr>
                    <td>{{ $marcas->nome_marca }}</td>
                    <td>{{ $marcas->id }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('marcas.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
