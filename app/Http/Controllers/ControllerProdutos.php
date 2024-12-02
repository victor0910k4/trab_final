<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Produto;

class ControllerProdutos extends Controller
{
    public readonly Produto $produto;

    public function __construct()
    {
        $this->produto = new Produto();
    }

    public function index()
    {
        $produtos = $this->produto->all();
        return view('produtos', compact('produtos'));
    }


    public function create()
    {
    return view('produtos.criar');
    }
    public function store(Request $request)
    {
        $created = $this->produto->create([

            'nome' => $request->input('nome'),
            'localizacao' => $request->input('localizacao'),
            'telefone' => $request->input('telefone'),
        ]);
        return redirect()->route('produto.index');
    }
    public function show($id)
    {
    }
    public function edit(Produto $produto)
{
    return view('produtos.editar', ['produto' => $produto]);
}
public function update(Request $request, $id)
{
    //
    $updated=$this->produto->where('id',$id)->update($request->except(['_token','_method']));
    return redirect()->route('produto.index')->with('editado', 'm');
}
    public function destroy(string $id)
    {
        $this->produto->where('id', $id)->delete();
    return redirect()->route('produto.index')->with('apagado','g');
    }
}

