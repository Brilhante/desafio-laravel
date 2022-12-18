@extends('adminlte::page')

@section('title', "Editar Manutenção {$repair->name}")

@section('content_header')
    <h1>Editar Manutenção - <b>{{$repair->name}}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('repairs.update', $repair->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')
                @include('includes.alerts')
              
                <div class="form-group">
                    <label for="data_agendada">Data do Agendamento:</label>
                    <input type="date" value="{{ $repair->data_agendada ?? old('data_agendada') }}"class="form-control" placeholder="Data do Agendamento:" name="data_agendada">
                    </select>
                </div>
                <div class="form-group">
                    <label for="tipo_manutencao">Tipo de Manutenção:</label>
                    <select class="form-control" placeholder="Tipo de Manutenção:" name="tipo_manutencao">
                        <option value=" 0">Selecione</option>
                        <option value="1" {{ $repair->tipo_manutencao == 1 ? 'selected' : ''}}>Preventiva</option>
                        <option value="2" {{ $repair->tipo_manutencao == 2 ? 'selected' : ''}}>Corretiva</option>
                    </select>
                </div>
               
                <div class="form-group">
                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" class="form-control" placeholder="Modelo:" value="{{ $repair->modelo ?? old('modelo') }}">
                    
                </div>
               
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                    
                </div>
            </form>
            </form>
        </div>
    </div>
@endsection