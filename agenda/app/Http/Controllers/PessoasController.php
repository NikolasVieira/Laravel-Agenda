<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoasController extends Controller
{

    public function index()
    {
        $pessoa = Pessoa::all();
        return view('pessoa.index', compact('pessoa'));
    }


    public function create()
    {
        $pessoa = Pessoa::all();
        return view('pessoa.create', compact('pessoa'));
    }

    public function store(PessoaRequest $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa->sobrenome = $request->input('sobrenome');
        $pessoa->telefone = $request->input('telefone');
        $pessoa->save();
        return redirect()->route('produto.index', compact('pessoa'));
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
}
