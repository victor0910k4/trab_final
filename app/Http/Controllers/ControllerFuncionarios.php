<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Funcionario;

class ControllerFuncionarios extends Controller
{
    public readonly Funcionario $funcionario;
    public function __construct()
    {
        $this->funcionario = new Funcionario();
    }
    public function index()
    {
        $funcionarios = $this->funcionario->all();
        return view('funcionario', compact('funcionarios'));
    }
    public function create()
    {
    return view('funcionarios.criar');
    }
    public function store(Request $request)
    {
        $created = $this->funcionario->create([
            'id' => Auth::id(),
            'nome' => $request->input('nome'),
            'localizacao' => $request->input('localizacao'),
            'telefone' => $request->input('telefone'),
        ]);
        return redirect()->route('funcionario.index');
    }
    public function show($id)
    {
    }
    public function edit(Funcionario $funcionario)
{
    return view('funcionarios.editar', ['funcionario' => $funcionario]);
}
public function update(Request $request, $id)
{
    //
    $updated=$this->funcionario->where('id',$id)->update($request->except(['_token','_method']));
    return redirect()->route('funcionario.index')->with('editado', 'm');
}
    public function destroy(string $id)
    {
        $this->funcionario->where('id', $id)->delete();
    return redirect()->route('funcionario.index')->with('apagado','g');
    }
}

