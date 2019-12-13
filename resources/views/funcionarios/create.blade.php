@extends('adminlte::page')

@section('title', 'Loja de Carros')

@section('content_header')
<h1><i class="fas fa-fx fa-car"></i>Inclusão de Novo Funcionário</h1>
@stop

@section('content')
<form method="post" action="{{ route('funcionarios.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="form-group col-md-6">
                <input type="text" name="nome" id="nome" class="form-control" required placeholder="Nome do funcionário">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="ctps" id="ctps" class="form-control" required placeholder="CTPS">
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="cracha" id="cracha" class="form-control" required placeholder="Crachá">
            </div>
            <div class="form-group col-md-6">
                <select id="cargos_id" name="cargos_id"  required>
                    <option value="">Escolha um Cargo</option>
                    {{$cargos = App\cargos::all()}}
                    @foreach($cargos as $cargo)
                        <option value="{{$cargo->id}}">{{$cargo->nome_cargo}}</option>
                    @endforeach
                </select>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{{ route('funcionarios.index') }}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Gravar</button>
        </div>
    </div>
</form>
@stop

@section('css')
@stop

@section('js')
@stop
