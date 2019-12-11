@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
    <h1><i class="fas fa-car"></i> Lista de Veículos</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-right">
            <a href="{{ route('veiculos.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('veiculos.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    </br>
    <div class="panel-body">
        <table id="table-veiculos" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cor</th>
                    <th>Valor</th>
                    <th>Ano</th>
                    <th>Km Rodado</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($veiculos as $veiculo)
                <tr>
                    <td>{{ $veiculo->id }}</td>
                    <td>{{ $veiculo->nome_veiculo }}</td>
                    <td>{{ $veiculo->cor }}</td>
                    <td>{{ $veiculo->valor }}</td>
                    <td>{{ $veiculo->ano }}</td>
                    <td>{{ $veiculo->km_rodado }}</td>
                    <td>{{ $veiculo->marcas_id }}</td>
                    <td>{{ $veiculo->modelos_id }}</td>
                    <td>
                        <!-- botao de detalhes do registro -->
                        <a href="{{ route('veiculos.show', $veiculo) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>

                        <!-- botao de edicao do registro -->
                        <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>

                        <!-- botao de exclusao -->
                        <form action="{{ route('veiculos.destroy', $veiculo) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
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
    $('#table-modelos').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
