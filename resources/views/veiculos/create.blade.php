@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-car"></i>Inclusão de Novo Veículo</h1>
@stop

@section('content')
<form method="post" action="{{ route('veiculos.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group col-md-6">
                <input type="text" name="nome_veiculo" id="nome_veiculo" class="form-control" required placeholder="Nome do Veículo">
            </div>
            <div class="form-group col-md-6">
                <input type="color" name="cor" id="cor" class="form-control form-group col-md-6" required placeholder="Cor do Veículo">
            </div>
            <div class="form-group col-md-6">
                <input type="number" name="valor" id="valor" min="0" step="0.5" class="form-control form-group col-md-6" required placeholder="Valor do Veículo">
            </div>
            <div class="form-group col-md-6">
                <input type="number" name="ano" id="ano" min="1950" step="1" class="form-control form-group col-md-6" required placeholder="Ano de Fabricação">
            </div>
            <div class="form-group col-md-6">
                <input type="number" name="km_rodado" id="km_rodado" min="0" step="1" class="form-control form-group col-md-6" required placeholder="Km do Veículo">
            </div>
            <div class="form-group col-md-6">
                <select id="marcas_id" name="marcas_id" placeholder="Escolha uma marca" required>
                <option value="">Escolha uma Marca</option>
                    {{$marcas = App\marcas::all()}}
                    @foreach($marcas as $marca)
                        <option value="{{$marca->id}}">{{$marca->nome_marca}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-6">
                <select id="modelos_id" name="modelos_id"  required>
                    <option value="">Escolha um Modelo</option>
                    {{$modelos = App\modelos::all()}}
                    @foreach($modelos as $modelo)
                        <option value="{{$modelo->id}}">{{$modelo->nome_modelo}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{ route('veiculos.index') }}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Gravar</button>
        </div>
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop
