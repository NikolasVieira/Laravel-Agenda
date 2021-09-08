@extends ('layouts.app')
@section('content')
<div class="container">
    <form id="frmpessoa" name="frmpessoa" action="{{route('pessoa.update', $pessoa->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h3>Editando</h3>
        <hr />
        <p> Você esta editando as informações de {{ $pessoa->nome }} {{ $pessoa->sobrenome }}</p>
        @foreach ($turma as $turmas)
        @if ($turmas->id == $pessoa->turma_id)
        <p> {{ $pessoa->nome }} {{ $pessoa->sobrenome }} pertence a turma {{ $turmas->nome }}</p>
        @endif
        @endforeach
        <hr />
        <div class="row">
            <div class="form-group col">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{$pessoa->nome}}">
            </div>
            
            <div class="form-group col">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="{{$pessoa->sobrenome}}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="{{$pessoa->telefone}}">
            </div>

            <div class="form-group col">
                <label for="turma_id">Turma</label>
                <select name="turma_id" id="turma_id" class="form-control" value="{{ $pessoa->turma_id }}">
                    @foreach ($turma as $turmas)
                    @if ($turmas->id == $pessoa->turma_id)
                    <option selected value="{{$turmas->id}}"> {{ $turmas->nome }} </option>
                    @else
                    <option value="{{$turmas->id}}"> {{ $turmas->nome }} </option>
                    @endif
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
