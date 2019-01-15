@extends('template')
@section('content')

    <br>

    <a href="/" class='btn btn-primary'> Home </a>

    @if (isset($data))
        <a href="/show/{{ $data->id }}" class='btn btn-primary'> Visualizar</a>
        <br>
        <br>
        <form action="/update/{{ $data->id }}" method="post">
            {{ csrf_field() }}
            <label>Nome:</label> <input type="text" name='name' class='form-control' value="{{ $data->name }}">
            <label>Nome Animal:</label> <input type="text" name='name_animal' class='form-control' value="{{ $data->name_animal }}">
            <label>Telefone:</label> <input type="text" name='phone' class='form-control' value="{{ $data->phone }}">
            <label>Observações:</label> <br><textarea name="obs" rows="10" class='form-control'>{{ $data->obs }}</textarea>

            <br>
            <input type="submit" value="Salvar" class='btn btn-success'>
        </form>
    @else
        <br>
        <br>
        <form action="/store" method="post">
            {{ csrf_field() }}
            <label>Nome:</label> <input type="text" name='name' class='form-control' required>
            <label>Nome Animal:</label> <input type="text" name='name_animal' class='form-control' required>
            <label>Telefone:</label> <input type="text" name='phone' class='form-control' required>
            <label>Observações:</label> <br><textarea name="obs" rows="10" class='form-control'></textarea>
            <br>
            <input type="submit" value="Salvar" class='btn btn-success'>
        </form>
    @endif
@endsection
