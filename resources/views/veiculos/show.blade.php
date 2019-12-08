@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1>Detalhes do Veículo</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr>

                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cor</th>
                    <th>Valor</th>
                    <th>Ano</th>
                    <th>Km Rodado</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
                <tr>
                    <td>{{ $veiculos->id }}</td>
                    <td>{{ $veiculos->nome_veiculo }}</td>
                    <td>{{ $veiculos->cor }}</td>
                    <td>{{ $veiculos->valor }}</td>
                    <td>{{ $veiculos->ano }}</td>
                    <td>{{ $veiculos->km_rodado }}</td>
                    <td>{{ $veiculos->marcas_id }}</td>
                    <td>{{ $veiculos->modelos_id }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('veiculos.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
