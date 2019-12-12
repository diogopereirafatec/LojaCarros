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
                <tr align="center">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cor</th>
                    <th>Valor</th>
                    <th>Ano</th>
                    <th>Km Rodado</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
                <tr align="center">
                    <td>{{ $veiculos->id }}</td>
                    <td>{{ $veiculos->nome_veiculo }}</td>
                    <td><svg width="50" height="25">
                    <rect width="300" height="100" style="fill:{{$veiculos->cor}}"; />
                    Sorry, your browser does not support inline SVG.
                    </svg></td>
                    <td>{{ $veiculos->valor }}</td>
                    <td>{{ $veiculos->ano }}</td>
                    <td>{{ $veiculos->km_rodado }}</td>
                    <td>{{ App\marcas::find($veiculos->marcas_id)->nome_marca }}</td>
                    <td>{{ App\modelos::find($veiculos->modelos_id)->nome_modelo }}</td>
                </tr>
            </table>
        </div>
    </div>
    @if (Route::has('login'))
    @auth
    <div class="panel-footer">
        <a href="{{ route('veiculos.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
    @else
    <div class="panel-footer">
        <a href="{{ url('/') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
    @endauth
    @endif
</div>
@stop

@section('css')

@stop

@section('js')

@stop
