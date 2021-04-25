<?php

namespace App\Http\Controllers;

use App\Http\Requests\PessoaRequest;
use App\Models\Pessoa;
use App\Models\Turma;

class PessoasController extends Controller
{

    public function index()
    {
        $pessoa = Pessoa::All();
        return view('pessoa.index', compact('pessoa'));
    }

    public function create()
    {
        $turma = Turma::all();
        $pessoa = Pessoa::All();
        return view('pessoa.create', compact('pessoa','turma'));
    }

    public function store(PessoaRequest $request)
    {
        $pessoa = new Pessoa();
        $pessoa->nome       = $request->input('nome');
        $pessoa->sobrenome  = $request->input('sobrenome');
        $pessoa->telefone   = $request->input('telefone');
        $pessoa->turma_id   = $request->input('turma_id');

        $pessoa->save();
        return redirect()->route('pessoa.index', compact('pessoa'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $turma = Turma::all();
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)){
            return view('pessoa.edit', compact('pessoa','turma'));
        }
            return view('pessoa.index');
    }

    public function update(PessoaRequest $request, $id)
    {
        $pessoa = Pessoa::find($id);
        if (isset($pessoa)) {
            $pessoa->nome       = $request->input('nome');
            $pessoa->sobrenome  = $request->input('sobrenome');
            $pessoa->telefone   = $request->input('telefone');
            $pessoa->turma_id   = $request->input('turma_id');
            $pessoa->save();
        }
            return redirect()->route('pessoa.index', compact('pessoa'));
    }

    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        if (isset($pessoa)) {
            $pessoa->delete();
        }
            return redirect()->route('pessoa.index');

    }
}
