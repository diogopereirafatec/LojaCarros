@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1>Detalhes do Modelo</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Detalhes do cadastro do Modelo
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>
                    <th class="col-md-6">Nome do Modelo</th>
                    <th class="col-md-4">Quantidade de portas</th>
                    <th class="col-md-2">ID</th>
                </tr>
                <tr>
                    <td class="col-md-6">{{ $modelos->nome_modelo }}</td>
                    <td class="col-md-4">{{ $modelos->qtde_portas }}</td>
                    <td class="col-md-2">{{ $modelos->id }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('modelos.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
