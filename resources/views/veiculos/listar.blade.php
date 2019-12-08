@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1>Detalhes do Veículo</h1>
@stop

@section('content')
<div>
    @foreach($veiculos as $veiculo)
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">{{$veiculo->nome_veiculo}}</div>
                <div class="panel-body">
                    <p>Cor: {{$veiculo->cor}}</p>
                    <p>Valor: {{$veiculo->valor}}</p>
                    <p>Ano: {{$veiculo->ano}}</p>
                    <p>Km: {{ $veiculo->km_rodado }}</p>
                    <p>Marca: {{ $veiculo->marcas_id }}</p>
                    <p>Modelo: {{ $veiculo->modelos_id }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@stop

@section('css')

@stop

@section('js')

@stop
