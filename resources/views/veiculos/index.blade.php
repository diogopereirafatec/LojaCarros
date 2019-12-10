@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
    <h1><i class="fas fa-car"></i>Lista de Veículos</h1>
@stop

@section('content')
<div>
	@foreach($veiculos as $veiculo)
    <div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading"><strong>{{$veiculo->nome_veiculo}}</strong></div>
			<div class="panel-body">
                <p>Cor: {{$veiculo->cor}}</p>
                <p>Valor: R${{$veiculo->valor}}</p>
                <p>Ano: {{$veiculo->ano}}</p>
                <p>Km: {{$veiculo->km_rodado}}</p>
                <p>Marca: {{$veiculo->marcas_id}}</p>
                <p>Modelo: {{$veiculo->modelos_id}}</p>

                @if (Route::has('login'))
                @auth
                <!-- botao de detalhes do registro -->
                <a href="{{ route('veiculos.show', $veiculo) }}" class="btn btn-xs btn-primary">
                    <i class="fas fa-fx fa-eye"></i>
                </a>
                <!-- botao de edicao do registro -->
                <a href="{{ route('veiculos.edit', $veiculo->id) }}" class="btn btn-xs btn-warning">
                    <i class="fas fa-fx fa-pencil-alt"></i>
                </a>
                <form action="{{ route('veiculos.destroy', $veiculo) }}" method="post" onsubmit="return confirm('Você tem certeza de que quer excluir este registro?');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-xs btn-danger">
                        <i class="fas fa-fx fa-trash-alt"></i>
                    </button>
                </form>
                @endauth
                @endif
            </div>
        </div>
	</div>
    @endforeach
</div>

@stop

@section('css')
@stop

@section('js')
<script>
$(document).ready(function() {
    $('#table-veiculos').DataTable({
        language: {
            url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json",
        }
    });
} );
</script>
@stop
