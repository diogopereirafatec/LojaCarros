@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados do Cargo</h1>
@stop

@section('content')
<form method="post" action="{{ route('cargos.update', $cargos->id) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="PUT">

     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de alteração de dados
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Cargo <span class="text-red">*</span></label>
                         <input type="text" name="nome_cargo" id="nome_cargo" class="form-control" required value="{{ $cargos->nome_cargo }}">
                    </div>
               </div>
          </div>

          <div class="panel-footer">
               <a href="{{ route('cargos.index') }}" class="btn btn-default">
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
