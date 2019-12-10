<?php

namespace App\Http\Controllers;
use App\cargos;
use Illuminate\Http\Request;

class cargosController extends Controller
{
    public function index()
    {
        $cargos = cargos::orderBy('created_at', 'asc')->paginate(10);
        return view('cargos.index', compact("cargos"));
    }
    public function create()
    {
        return view('cargos.create');
    }
    public function store(Request $request)
    {
        $cargos = new cargos;
        $cargos->nome_cargo = $request->nome_cargo;
        $cargos->save();
        return redirect()->route('cargos.index')->with('message', 'Cargo adicionado com Sucesso!');
    }
    public function show($id)
    {
        $cargos = cargos::find($id);
        return view('cargos.show', compact('cargos'));
    }
    public function edit($id)
    {
        $cargos = cargos::findOrFail($id);
        return view('cargos.edit',compact('cargos'));
    }
    public function update(Request $request, $id)
    {
        $cargos = cargos::findOrFail($id);
        $cargos->nome_cargo = $request->nome_cargo;
        $cargos->save();
        return redirect()->route('cargos.index')->with('message', 'Cargo Atualizado com Sucesso!');
    }
    public function destroy($id)
    {
        $cargos = cargos::findOrFail($id);
        $cargos->delete();
        return redirect()->route('cargos.index')->with('alert-success','Este Cargo será apagado!');
    }
}
