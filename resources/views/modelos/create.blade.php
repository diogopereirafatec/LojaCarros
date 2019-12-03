@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i>Inclusão de Novo Modelo</h1>
@stop

@section('content')
<form method="post" action="{{ route('modelos.store') }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <div class="panel panel-default">
          <div class="panel-heading">
               <i class="fas fa-fx fa-user"></i> Tela de cadastramento de Modelo
          </div>

          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome do Modelo <span class="text-red">*</span></label>
                         <input type="text" name="nome_modelo" id="nome_modelo" class="form-control" required>
                    </div>
               </div>
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Quantidade de Portas <span class="text-red">*</span></label>
                         <input type="number" name="qtde_portas" id="qtde_portas" min="2" max="4" class="form-control" required>
                    </div>
               </div>
          </div>

          <div class="panel-footer">
               <a href="{{ route('marcas.index') }}" class="btn btn-default">
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
