@extends('template')
@section('content')

    <h1>Lista de pessoas cadastradas</h1>

    <a href="/create" class='btn btn-primary'> Criar novo</a>

    <br>
    <br>

    @if (count($data) == 0)
        <h1>Nenhum registro encontrado</h1>
    @else
        <input type="text" name="search" placeholder="Buscar" class='form-control' disabled>

        <br>
        <br>

        <table class='table table-striped'>
            <thead>
                <th>ID</th>
                <th>Nome Responsável</th>
                <th>Nome Animal</th>
                <th>Telefone</th>
                <th colspan="3">Ações</th>
            </thead>
            <tbody>
                @foreach ($data as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->name_animal }}</td>
                        <td>{{ $value->phone }}</td>
                        <td style="width:10px"><a href='/show/{{$value->id}}' class='btn btn-success'><span class='glyphicon glyphicon-eye-open'></span></a></td>
                        <td style="width:10px"><a href='/edit/{{$value->id}}' class='btn btn-primary'><span class='glyphicon glyphicon-pencil'></span></a></td>
                        <td style="width:10px"><a href='/destroy/{{$value->id}}' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection
