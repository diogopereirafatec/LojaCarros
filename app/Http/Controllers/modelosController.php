<?php

namespace App\Http\Controllers;
use App\Modelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class modelosController extends Controller
{
    public function index()
    {
        $modelos = modelos::orderBy('created_at', 'asc')->paginate(10);
        return view('modelos.index', compact("modelos"));
    }
    public function create()
    {
        return view('modelos.create');
    }
    public function store(Request $request)
    {
        $modelos = new modelos;
        $modelos->nome_modelo = $request->nome_modelo;
        $modelos->qtde_portas = $request->qtde_portas;
        $modelos->save();
        return redirect()->route('modelos.index')->with('message', 'Modelo adicionada com Sucesso!');
    }
    public function show($id)
    {
        $modelos = modelos::find($id);
        return view('modelos.show', compact('modelos'));
    }
    public function edit($id)
    {
        $modelos = modelos::findOrFail($id);
        return view('modelos.edit',compact('modelos'));
    }
    public function update(Request $request, $id)
    {
        $modelos = modelos::findOrFail($id);
        $modelos->nome_modelo = $request->nome_modelo;
        $modelos->qtde_portas = $request->qtde_portas;
        $modelos->save();
        return redirect()->route('modelos.index')->with('message', 'modelo Atualizada com Sucesso!');
    }
    public function destroy($id)
    {
        $modelos = modelos::findOrFail($id);
        $modelos->delete();
        return redirect()->route('modelos.index')->with('alert-success','Esta modelo será apagada!');
    }
}
