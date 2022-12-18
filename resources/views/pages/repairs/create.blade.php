@extends('adminlte::page')

@section('title', 'Cadastrar Nova Manutenção')

@section('content_header')
<h1>Cadastrar Nova Manutenção</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('repairs.store') }}" class="form" method="POST">
            @csrf
            @include('includes.alerts')

            <input type="hidden" value="{{Auth::user()->id ?? old('user_id')}}" name="user_id">
            <div class="form-group">
                <label for="tipo_manutencao">Tipo de Manutenção:</label>
                <select class="form-control" placeholder="Tipo de Manutenção:" name="tipo_manutencao">
                    <option value=" 0">Selecione</option>
                    <option value=" 1">Preventiva</option>
                    <option value=" 2">Corretiva</option>
                </select>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <select class="form-control" placeholder="Modelo:" name="modelo">
                    <option value=" 0">Selecione</option>
                    @foreach($dataCars as $car)
                    <option value=" {{ $car->modelo }}">
                        {{ $car->modelo }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="agendamento">Agendamento:</label>
                <input type="date" name="data_agendada" class="form-control" placeholder="Agendamento:"
                    value="">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-dark">Enviar</button>

            </div>
        </form>
    </div>
</div>
@endsection