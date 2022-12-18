@extends('adminlte::page')

@section('title', "Detalhes da Manutenção " )

@section('content_header')
    <h1>Detalhes da Manutenção - <b> {{ $repair->tipo_manutencao == 1 ? 'Preventiva' : 'Corretiva' }}</b></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @include('includes.alerts')
            <ul>
                <li>
                    <strong>Data do Agendamento:</strong> {{ $repair->data_agendada }}
                </li>
                <li>
                    <strong>Tipo de Manutenção:</strong> {{ $repair->tipo_manutencao == 1 ? 'Preventiva' : 'Corretiva' }}
                </li>
                <li>
                    <strong>Modelo:</strong> {{ $repair->modelo }}
                </li>
            </ul>
            <form action="{{ route('repairs.destroy', $repair->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Deletar {{ $repair->name }}</button>
            </form>
        </div>
    </div>
@endsection