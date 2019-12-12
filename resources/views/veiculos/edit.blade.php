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
               <div class="row">
                    <div class="form-group col-md-6">
                         <label>Nome do Veículo <span class="text-red">*</span></label>
                         <input type="text" name="nome_veiculo" id="nome_veiculo" class="form-control" required value="{{ $veiculos->nome_veiculo }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <label>Cor do Veículo</label>
                         <input type="color" name="cor" id="cor" class="form-control form-group col-md-6" required value="{{ $veiculos->cor }}">
                    </div>
               </div>

               <div class="row">
                    <div class="form-group col-md-6">
                         <labe>Valor</label>
                         <input type="number" name="valor" id="valor" step="0.5" class="form-control" required value="{{ $veiculos->valor }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <labe>Ano</label>
                         <input type="number" name="ano" id="ano" class="form-control" required value="{{ $veiculos->ano }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <labe>Quilometragem Rodada</label>
                         <input type="number" name="km_rodado" id="km_rodado" class="form-control" required value="{{ $veiculos->km_rodado }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <labe>Marca</label>
                         <input type="number" name="marcas_id" id="marcas_id" class="form-control" required value="{{ $veiculos->marcas_id }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <labe>Modelo</label>
                         <input type="number" name="modelos_id" id="modelos_id" class="form-control" required value="{{ $veiculos->modelos_id }}">
                    </div>
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
