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
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function cargo()
    {
        return $this->belongsTo(cargos::class);
    }
}
