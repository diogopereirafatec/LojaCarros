@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
@if (Route::has('login'))
@auth
@else
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"> Login</i></a>
    @if (Route::has('register'))
        <a class="navbar-brand" href="{{ route('register') }}"><i class="fas fa-portrait"> Register</i></a>
    @endif
</nav>
    @endauth
@endif

<h1><i class="fas fa-car"></i>Lista de Veículos</h1>
@stop

@section('content')
<div>
	@foreach($veiculos as $veiculo)
    <div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading"><strong>{{$veiculo->nome_veiculo}} - {{ App\modelos::find($veiculo->modelos_id)->qtde_portas }} Portas</strong></div>
			<div class="panel-body">
                <p><strong>Cor:</strong> <svg width="50" height="25">
                    <rect width="300" height="100" style="fill:{{$veiculo->cor}}"; />
                    Sorry, your browser does not support inline SVG.
                </svg></p>
                <p><strong>Valor:</strong> R${{$veiculo->valor}}</p>
                <p><strong>Ano:</strong> {{$veiculo->ano}}</p>
                <p><strong>Km:</strong> {{$veiculo->km_rodado}}</p>
                <p><strong>Marca:</strong> {{ App\marcas::find($veiculo->marcas_id)->nome_marca }}</p>
                <p><strong>Modelo:</strong> {{ App\modelos::find($veiculo->modelos_id)->nome_modelo }}</p>

                <!-- botao de detalhes do registro -->
                <a href="{{ route('veiculos.show', $veiculo) }}" class="btn btn-xs btn-primary">
                    <i class="fas fa-fx fa-eye"></i>
                </a>
                @if (Route::has('login'))
                @auth
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
