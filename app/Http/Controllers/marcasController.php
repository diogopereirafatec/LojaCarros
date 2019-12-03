<?php

namespace App\Http\Controllers;
use App\Marcas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class marcasController extends Controller
{
    public function index()
    {
        $marcas = marcas::orderBy('created_at', 'asc')->paginate(10);
        //return view('marcas.index',['marcas' => $marcas]);
        return view('marcas.index', compact("marcas"));
    }
    public function create()
    {
        return view('marcas.create');
    }
    public function store(Request $request)
    {
        $marcas = new marcas;
        $marcas->nome_marca = $request->nome_marca;
        $marcas->save();
        return redirect()->route('marcas.index')->with('message', 'Marca adicionada com Sucesso!');
    }
    public function show($id)
    {
        $marcas = marcas::find($id);
        return view('marcas.show', compact('marcas'));
    }
    public function edit($id)
    {
        $marcas = marcas::findOrFail($id);
        return view('marcas.edit',compact('marcas'));
    }
    public function update(Request $request, $id)
    {
        $marcas = marcas::findOrFail($id);
        $marcas->nome_marca = $request->nome_marca;
        $marcas->save();
        return redirect()->route('marcas.index')->with('message', 'Marca Atualizada com Sucesso!');
    }
    public function destroy($id)
    {
        $marcas = marcas::findOrFail($id);
        $marcas->delete();
        return redirect()->route('marcas.index')->with('alert-success','Esta Marca será apagada!');
    }
}
