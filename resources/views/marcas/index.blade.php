@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
    <h1><i class="fas fa-bars"></i> Lista de Marcas</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-right">
            <a href="{{ route('marcas.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('marcas.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    </br>
    <div class="panel-body">
        <table id="table-marcas" class="table table-striped table-bordered table-hover">
            <thead>
            <tr align="center">
                    <td>ID</td>
                    <td>Nome da Marca</td>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($marcas as $marca)
                <tr align="center">
                    <td>{{ $marca->id }}</td>
                    <td>{{ $marca->nome_marca }}</td>
                    <td>
                        <!-- botao de detalhes do registro -->
                        <a href="{{ route('marcas.show', $marca) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>

                        <!-- botao de edicao do registro -->
                        <a href="{{ route('marcas.edit', $marca->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>

                        <!-- botao de exclusao -->
                        <form action="{{ route('marcas.destroy', $marca) }}" method="post"
                            onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');"
                            style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-xs btn-danger">
                               <i class="fas fa-fx fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-marcas').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
