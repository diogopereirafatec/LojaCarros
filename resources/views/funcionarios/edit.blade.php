@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados do Funcionário</h1>
@stop

@section('content')
<form method="post" action="{{ route('funcionarios.update', $funcionarios->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group col-md-6">
                <label for="nome">Nome </label>
                <input type="text" name="nome" id="nome" placeholder="Nome do Funcionario" class="form-control" required value="{{ $funcionarios->nome }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">CTPS</label>
                <input type="text" name="ctps" id="ctps" class="form-control" placeholder="CTPS" disabled value="{{ $funcionarios->ctps }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Crachá</label>
                <input type="text" name="cracha" id="cracha" class="form-control" placeholder="Crachá do Funcionário" disabled value="{{ $funcionarios->cracha }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Cargo</label>
                <input type="text" class="form-control" value="{{ App\cargos::find($funcionarios->cargos_id)->nome_cargo }}" disabled>
            </div>
        </div>

        <div class="panel-footer">
            <a href="{{ route('funcionarios.index') }}" class="btn btn-default">
                <i class="fas fa-reply"></i> Voltar
            </a>

            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Gravar
            </button>
        </div>
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop
