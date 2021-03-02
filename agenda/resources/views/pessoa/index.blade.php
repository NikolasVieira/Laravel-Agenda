@extends ('layouts.app')

@section('content')

<div class="container">

    <h2>Agenda</h2>
    <hr/>
    <a href="{​​​​​{​​​​​ url('pessoa/create') }​​​​​}​​​​​" class="btn btn-success">Novo Contato</a>
    <br/><br/>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Numero</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nikolas</td>
                <td>Raposo</td>
                <td>(17)98828-7775</td>
                <td></td>
            </tr>
        </tbody>
    </table>

</div>

@endsection