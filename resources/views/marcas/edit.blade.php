@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-user"></i> Alteração de dados da Marca</h1>
@stop

@section('content')
<form method="post" action="{{ route('marcas.update', $marcas->id) }}" enctype="multipart/form-data">
     {{ csrf_field() }}
     <input type="hidden" name="_method" value="PUT">

     <div class="panel panel-default">
          <div class="panel-body">
               <div class="row">
                    <div class="form-group col-md-6">
                         <label for="nome">Nome da Marca</label>
                         <input type="text" name="nome_marca" id="nome_marca" class="form-control" required value="{{ $marcas->nome_marca }}">
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
