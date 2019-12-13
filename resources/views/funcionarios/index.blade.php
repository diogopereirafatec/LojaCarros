@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
    <h1><i class="fas fa-car"></i> Lista de Funcionários</h1>
@stop

@section('content')
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <div class="pull-right">
            <a href="{{ route('funcionarios.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
            <a href="{{ route('funcionarios.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Inserir um Novo Registro</a>
        </div>
    </div>
    </br>
    <div class="panel-body">
        <table id="table-funcionarios" class="table table-striped table-bordered table-hover">
            <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Crachá</th>
                    <th>Cargo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($funcionarios as $funcionario)

                <tr align="center">
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->cracha}}</td>
                    <td>{{ App\cargos::find($funcionario->cargos_id)->nome_cargo }}</td>
                    <td>
                        <!-- botao de detalhes do registro -->
                        <a href="{{ route('funcionarios.show', $funcionario) }}" class="btn btn-xs btn-primary">
                            <i class="fas fa-fx fa-eye"></i>
                        </a>

                        <!-- botao de edicao do registro -->
                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-xs btn-warning">
                            <i class="fas fa-fx fa-pencil-alt"></i>
                        </a>

                        <!-- botao de exclusao -->
                        <form action="{{ route('funcionarios.destroy', $funcionario) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
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
    $('#table-funcionarios').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
    $('#table-cargos').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
