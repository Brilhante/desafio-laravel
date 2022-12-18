@extends('adminlte::page')

@section('title', 'Manutenção')

@section('content_header')
    <h1><a href="{{ route('repairs.create') }}" class="btn btn-dark">ADD</a> Manutenção</h1>
@stop

@section('content')
    <div class="repaird">
        <div class="repaird-header">
        </div>
        <div class="repaird-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Data do agendamento</th>
                        <th>Tipo de Manutenção</th>
                        <th>Modelo</th>
                        <th width="250" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($repairsId as $repair)
                    <tr>
                        <td>
                            {{ Carbon\Carbon::parse($repair->data_agendada)->format('d/m/Y') }}
                        </td>
                        <td>
                            {{ $repair->tipo_manutencao == 1 ? 'Preventiva' : 'Corretiva' }}
                        </td>
                        <td>
                            {{ $repair->modelo }}
                        </td>
                        <td style="width= 10rem">
                            <a href="{{ route('repairs.edit', $repair->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{ route('repairs.show', $repair->id) }}" class="btn btn-sm btn-warning">VER</a>
                            <div class="btn-group">
                                <form action="{{ route('repairs.destroy', $repair->id) }}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
        <div class="repaird-footer">
            {!! $repairs->links('vendor.pagination.bootstrap-4') !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop