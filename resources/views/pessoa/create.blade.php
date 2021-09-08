@extends ('layouts.app')
@section('content')
<div class="container">

    <form id="frmpessoa" name="frmpessoa" action="{{ route('pessoa.store') }}" method="POST">
        @csrf
        <div class="row">
            {{-- nome --}}
            <div class="form-group col">
                <label for="nome">Nome</label>
                <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}" id="nome"
                    name="nome" placeholder="Informe o nome">
                @if ($errors->has('nome'))
                <div class="invalid-feedback">
                    {{$errors->first('nome','Atenção o campo nome é obrigatório!')}}
                </div>
                @endif
            </div>
            {{-- sobrenome --}}
            <div class="form-group col">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control {{ $errors->has('sobrenome') ? 'is-invalid' : ''}}"
                    id="sobrenome" name="sobrenome" placeholder="Informe o Sobrenome">
                @if ($errors->has('sobrenome'))
                <div class="invalid-feedback">
                    {{$errors->first('sobrenome','Atenção o campo sobrenome é obrigatório!')}}
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            {{-- telefone --}}
            <div class="form-group col">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" id="telefone"
                    name="telefone" placeholder="Informe o Telefone">
                @if ($errors->has('telefone'))
                <div class="invalid-feedback">
                    {{$errors->first('telefone','Atenção o campo telefone é obrigatório!')}}
                </div>
                @endif
            </div>

            {{-- turma --}}
            <div class="form-group col">
                <label for="turma_id">Turma</label>
                <select class="form-control" id="turma_id" name="turma_id">
                    <option>selecione</option>
                    @foreach ($turma as $turmas)
                    <option value="{{ $turmas->id }}">{{ $turmas->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
