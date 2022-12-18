@extends('adminlte::page')

@section('title', "Detalhes do Veículo - {{ $car->name }}")

@section('content_header')
    <h1>Detalhes do Veículo - <b>{{ $car->name }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('includes.alerts')
            <ul>
                <li>
                    <strong>Marca:</strong> {{ $car->marca }}
                </li>
                <li>
                    <strong>Modelo:</strong> {{ $car->modelo }}
                </li>
                <li>
                    <strong>Versão:</strong> {{ $car->versao }}
                </li>
            </ul>
            <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Deletar Car {{ $car->name }}</button>
            </form>
        </div>
    </div>
@endsection