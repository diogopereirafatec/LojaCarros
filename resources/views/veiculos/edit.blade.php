@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados do Veículo</h1>
@stop

@section('content')
<form method="post" action="{{ route('veiculos.update', $veiculos->id) }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group col-md-6">
                <label for="nome">Nome do Veículo</label>
                <input type="text" name="nome_veiculo" id="nome_veiculo" placeholder="Nome do Veículo" class="form-control" disabled value="{{ $veiculos->nome_veiculo }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Cor</label>
                <input type="color" name="cor" id="cor" class="form-control form-group col-md-6" placeholder="Cor do Veículo" required value="{{ $veiculos->cor }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Valor</label>
                <input type="number" name="valor" id="valor" step="0.5" class="form-control" placeholder="Valor do Veículo" required value="{{ $veiculos->valor }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Ano de Fabricação</label>
                <input type="number" name="ano" id="ano" class="form-control" placeholder="Ano de Fabricação" disabled value="{{ $veiculos->ano }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Quilometragem</label>
                <input type="number" name="km_rodado" id="km_rodado" class="form-control" placeholder="Km do Veículo" required value="{{ $veiculos->km_rodado }}">
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Marca</label>
                <input type="text" class="form-control" value="{{ App\marcas::find($veiculos->marcas_id)->nome_marca }}" disabled>
            </div>
            <div class="form-group col-md-6">
                <label for="nome">Marca</label>
                <input type="text" class="form-control" value="{{ App\modelos::find($veiculos->modelos_id)->nome_modelo }}" disabled>
            </div>
        </div>

        <div class="panel-footer">
            <a href="{{ route('veiculos.index') }}" class="btn btn-default">
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
