@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1>Detalhes do Funcionário</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <tr align="center">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CTPS</th>
                    <th>Crachá</th>
                    <th>Cargo</th>
                </tr>
                <tr align="center">
                    <td>{{ $funcionarios->id }}</td>
                    <td>{{ $funcionarios->nome }}</td>
                    <td>{{ $funcionarios->ctps }}</td>
                    <td>{{ $funcionarios->cracha }}</td>
                    <td>{{ App\cargos::find($funcionarios->cargos_id)->nome_cargo }}</td>
                </tr>
            </table>
        </div>
    </div>
    @if (Route::has('login'))
    @auth
    <div class="panel-footer">
        <a href="{{ route('funcionarios.index') }}" class="btn btn-default">
            <i class="fas fa-reply"></i> Voltar
        </a>
    </div>
    @else
    <div class="panel-footer">
        <a href="{{ url('/funcionarios') }}" class="btn btn-default">
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
