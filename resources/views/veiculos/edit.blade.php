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
                         <input type="text" name="nome_veiculo" id="nome_veiculo" placeholder="Nome do Veículo" class="form-control" required value="{{ $veiculos->nome_veiculo }}">
                    </div>
               </div>
               <div class="row" style="display:inline">
                         <input type="color" name="cor" id="cor" class="form-control form-group col-md-6" placeholder="Cor do Veículo" required value="{{ $veiculos->cor }}">
               </div>

               <div class="row">
                    <div class="form-group col-md-6">
                         <input type="number" name="valor" id="valor" step="0.5" class="form-control" placeholder="Valor do Veículo" required value="{{ $veiculos->valor }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <input type="number" name="ano" id="ano" class="form-control" placeholder="Ano de Fabricação" required value="{{ $veiculos->ano }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <input type="number" name="km_rodado" id="km_rodado" class="form-control" placeholder="Km do Veículo" required value="{{ $veiculos->km_rodado }}">
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                        <label>Marca <span class="text-red">*</span></label>
                        <select id="marcas_id" name="marcas_id" placeholder="Escolha uma marca" required>
                            <option value="{{ App\marcas::find($veiculos->marcas_id)->id }}">
                            {{ App\marcas::find($veiculos->marcas_id)->nome_marca }}
                            </option>
                            {{ $veiculos->marcas_id }}
                            {{$marcas = App\marcas::all()}}
                            @foreach($marcas as $marca)
                                <option value="{{$marca->id}}">{{$marca->nome_marca}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
               <div class="row">
                    <div class="form-group col-md-6">
                        <label>Modelo <span class="text-red">*</span></label>
                        <select id="modelos_id" name="modelos_id"  required>
                            <option value="{{ App\modelos::find($veiculos->modelos_id)->id }}">
                            {{ App\modelos::find($veiculos->modelos_id)->nome_modelo }}
                            </option>
                            {{ $veiculos->modelos_id }}
                            {{$modelos = App\modelos::all()}}
                            @foreach($modelos as $modelo)
                                <option value="{{$modelo->id}}">{{$modelo->nome_modelo}}</option>
                            @endforeach
                        </select>
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
