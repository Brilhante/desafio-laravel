@extends('adminlte::page')

@section('title', 'Cadastrar Novo Veículo')

@section('content_header')
    <h1>Cadastrar Novo Veículo</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('cars.store') }}" class="form" method="POST">
                @csrf
                @include('includes.alerts')

                <input type="hidden" value="{{Auth::user()->id ?? old('user_id')}}" name="user_id">
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
        </div>
    </div>
@endsection