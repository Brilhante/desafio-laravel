@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h3>Manutenções previstas para os próximos 7 dias</h3>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
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
                @foreach ($dateMaintenance as $repair)
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
                            <a href="{{ route('repairs.show', $repair->id) }}" class="btn btn-sm btn-warning">Detalhes</a>
                            {{-- <div class="btn-group">
                                <form action="{{ route('repairs.destroy', $repair->id) }}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                </form>
                            </div> --}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
        <div class="repaird-footer">
            {{-- {!! $repairs->links('vendor.pagination.bootstrap-4') !!} --}}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop