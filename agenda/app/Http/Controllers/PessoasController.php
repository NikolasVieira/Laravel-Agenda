<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoasController extends Controller
{
    public function index()
    {
        $pessoa = Pessoa :: all();
        return view('pessoa.index', compact('pessoa'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
