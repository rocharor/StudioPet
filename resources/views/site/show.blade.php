@extends('template')
@section('content')

    <h1>View</h1>

    <a href="/" class='btn btn-primary'> Home </a>
    <a href="/edit/{{ $data->id }}" class='btn btn-primary'> Editar </a>
    <br>
    <br>

    <div class="panel panel-default">
        <div class="panel-heading">Nome responsável</div>
        <div class="panel-body">
           {{ $data->name }}
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Nome animal</div>
        <div class="panel-body">
           {{ $data->name_animal }}
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Telefone</div>
        <div class="panel-body">
           {{ $data->phone }}
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Observação</div>
        <div class="panel-body">
           {{ $data->obs }}
        </div>
    </div>
@endsection

