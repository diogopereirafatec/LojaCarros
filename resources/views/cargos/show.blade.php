@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1>Detalhes do Cargo</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr align="center">
                    <th>ID</th>
                    <th>Nome do Cargo</th>
                </tr>
                <tr align="center">
                    <td>{{ $cargos->id }}</td>
                    <td>{{ $cargos->nome_cargo }}</td>
                </tr>
            </table>
        </div>
    </div>

    <div class="panel-footer">
        <a href="{{ route('cargos.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
</div>
@stop

@section('css')

@stop

@section('js')

@stop
