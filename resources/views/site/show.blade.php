@extends('template')
@section('content')

    <h1>View</h1>

    <a href="/" class='btn btn-primary'> Home </a>
    <a href="/edit/{{ $data->id }}" class='btn btn-primary'> Editar </a>
<br>
    <p><label>Nome:</label>    {{ $data->name }}</p>
    <p><label>Nome animal:</label>    {{ $data->name_animal }}</p>
    <p><label>Telefone:</label>    {{ $data->phone }}</p>
    <p><label>Observação:</label>    {{ $data->obs }}</p>
@endsection
