@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i>Inclusão de Novo Cargo</h1>
@stop

@section('content')
<form method="post" action="{{ route('cargos.store') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de cadastramento de Cargo
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Cargo <span class="text-red">*</span></label>
                         <input type="text" name="nome_cargo" id="nome_cargo" class="form-control" required>
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
