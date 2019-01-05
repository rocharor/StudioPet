@extends('template')
@section('content')

    <a href="/" class='btn btn-primary'> Home </a>

    @if (isset($data))
        <a href="/show/{{ $data->id }}" class='btn btn-primary'> Visualizar</a>

        <form action="/update/{{ $data->id }}" method="post">
            {{ csrf_field() }}
            <label>Nome:</label> <input type="text" name='name' class='form-control' value="{{ $data->name }}">
            <label>Nome Animal:</label> <input type="text" name='name_animal' class='form-control' value="{{ $data->name_animal }}">
            <label>Telefone:</label> <input type="text" name='phone' class='form-control' value="{{ $data->phone }}">
            <label>Observações:</label> <br><textarea name="obs" rows="10" class='form-control'>{{ $data->obs }}</textarea>

            <br>
            <input type="submit" value="Salvar" class='btn btn-primary'>
        </form>
    @else
        <form action="/store" method="post">
            {{ csrf_field() }}
            <label>Nome:</label> <input type="text" name='name' class='form-control'>
            <label>Nome Animal:</label> <input type="text" name='name_animal' class='form-control'>
            <label>Telefone:</label> <input type="text" name='phone' class='form-control'>
            <label>Observações:</label> <br><textarea name="obs" rows="10" class='form-control'></textarea>
            <br>
            <input type="submit" value="Salvar" class='btn btn-primary'>
        </form>
    @endif
@endsection
