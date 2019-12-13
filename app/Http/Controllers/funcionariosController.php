<?php

namespace App\Http\Controllers;
use App\funcionarios;
use App\cargos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class funcionariosController extends Controller
{
    protected $fillable = ['cargos_id','nome_cargo'];

    public function index()
    {
        //$funcionarios = funcionarios::orderBy('created_at', 'asc')->paginate(10);
        $funcionarios = funcionarios::with('cargo')->get();
        return view('funcionarios.index',compact("funcionarios"));
    }
    public function create()
    {
        return view('funcionarios.create');
    }
    public function store(Request $request)
    {
        $funcionarios = new funcionarios;
        $funcionarios->nome = $request->nome;
        $funcionarios->ctps = $request->ctps;
        $funcionarios->cracha = $request->cracha;
        $funcionarios->cargos_id = $request->cargos_id;
        $funcionarios->save();
        return redirect()->route('funcionarios.index')->with('message', 'Funcionário adicionado com Sucesso!');
    }
    public function show($id)
    {
        $funcionarios = funcionarios::find($id);
        return view('funcionarios.show', compact('funcionarios'));
    }
    public function edit($id)
    {
        $funcionarios = funcionarios::findOrFail($id);
        return view('funcionarios.edit',compact('funcionarios'));
    }
    public function update(Request $request, $id)
    {
        $funcionarios = funcionarios::findOrFail($id);
        $funcionarios->nome = $request->nome;
        $funcionarios->save();
        return redirect()->route('funcionarios.index')->with('message', 'Funcionário Atualizado com Sucesso!');
    }

    public function destroy($id)
    {
        $funcionarios = funcionarios::findOrFail($id);
        $funcionarios->delete();
        return redirect()->route('funcionarios.index')->with('alert-success','Esta Funcionário será apagado!');
    }

    public function cargo()
    {
        return $this->belongsTo(cargos::class);
    }
}
