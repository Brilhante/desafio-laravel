@extends('adminlte::page')

@section('title', "Editar Veículo {$car->name}")

@section('content_header')
    <h1>Editar Veículo - <b>{{$car->name}}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('cars.update', $car->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                @include('includes.alerts')
              
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" name="marca" class="form-control" placeholder="Marca:" value="{{ $car->marca ?? old('marca') }}">
                    
                </div>
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" class="form-control" placeholder="Modelo:" value="{{ $car->modelo ?? old('modelo') }}">
                    
                </div>
                <div class="form-group">
                    <label for="versao">Versão:</label>
                    <input type="text" name="versao" class="form-control" placeholder="Versao:" value="{{ $car->versao ?? old('versao') }}">
                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                    
                </div>
            </form>
            </form>
        </div>
    </div>
@endsection