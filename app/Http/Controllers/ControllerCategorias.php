<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ControllerCategorias extends Controller
{
    public readonly Categoria $categoria;
    public function __construct()
    {
        $this->categoria = new Categoria();
    }
    public function index()
    {
        $categorias = $this->categoria->all();
        return view('categoria', compact('categorias'));
    }
    public function create()
    {
    return view('categorias.criar');
    }
    public function store(Request $request)
    {
        $created = $this->categoria->create([
            'id' => Auth::id(),
            'nome' => $request->input('nome'),
        ]);
        return redirect()->route('categoria.index');
    }
    public function show($id)
    {
    }
    public function edit(Categoria $categoria)
{
    return view('categorias.editar', ['categoria' => $categoria]);
}
public function update(Request $request, $id)
{
    //
    $updated=$this->categoria->where('id',$id)->update($request->except(['_token','_method']));
    return redirect()->route('categoria.index')->with('editado', 'm');
}
    public function destroy(string $id)
    {
        $this->categoria->where('id', $id)->delete();
    return redirect()->route('categoria.index')->with('apagado','g');;
    }
}
