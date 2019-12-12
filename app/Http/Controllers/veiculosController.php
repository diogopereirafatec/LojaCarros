<?php

namespace App\Http\Controllers;
use App\veiculos;
use App\Marcas;
//use App\Modelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class veiculosController extends Controller
{
    public function index()
    {
        $veiculos = veiculos::orderBy('created_at', 'asc')->paginate(10);
        return view('veiculos.index', compact("veiculos"));
    }
    public function create()
    {
        return view('veiculos.create');
    }
    public function store(Request $request)
    {
        $veiculos = new veiculos;
        $veiculos->nome_veiculo = $request->nome_veiculo;
        $veiculos->cor = $request->cor;
        $veiculos->valor = $request->valor;
        $veiculos->ano = $request->ano;
        $veiculos->km_rodado = $request->km_rodado;
        $veiculos->marcas_id = $request->marcas_id;
        $veiculos->modelos_id = $request->modelos_id;

        $veiculos->save();
        return redirect()->route('veiculos.index')->with('message', 'Veículo adicionado com Sucesso!');
    }
    public function show($id)
    {
        $veiculos = veiculos::find($id);
        return view('veiculos.show', compact('veiculos'));
    }
    public function edit($id)
    {
        $veiculos = veiculos::findOrFail($id);
        return view('veiculos.edit',compact('veiculos'));
    }
    public function update(Request $request, $id)
    {
        $veiculos = veiculos::findOrFail($id);
        $veiculos->nome_veiculo = $request->nome_veiculo;
        $veiculos->cor = $request->cor;
        $veiculos->valor = $request->valor;
        $veiculos->ano = $request->ano;
        $veiculos->km_rodado = $request->km_rodado;
        $veiculos->save();
        return redirect()->route('veiculos.index')->with('message', 'Veículo Atualizado com Sucesso!');
    }
    public function destroy($id)
    {
        $veiculos = veiculos::findOrFail($id);
        $veiculos->delete();
        return redirect()->route('veiculos.index')->with('alert-success','Esta veículo será apagado!');
    }

    public function listar(){
        {
            $veiculos = veiculos::orderBy('created_at', 'asc')->paginate(10);
            return view('veiculos.listar', compact("veiculos"));
        }
    }
}
