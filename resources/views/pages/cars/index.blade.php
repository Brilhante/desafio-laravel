@extends('adminlte::page')

@section('title', 'Veículos')

@section('content_header')
    <h1><a href="{{ route('cars.create') }}" class="btn btn-dark">ADD</a> Veículos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Versão</th>
                        <th width="250" >Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($carsId as $car)
                    <tr>
                        <td>
                            {{ $car->marca }}
                        </td>
                        <td>
                            {{ $car->modelo }}
                        </td>
                        <td>
                            {{ $car->versao }}
                        </td>
                        <td style="width= 10rem">
                            <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="{{ route('cars.show', $car->id) }}" class="btn btn-sm btn-warning">VER</a>
                            <div class="btn-group">
                                <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
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
        <div class="card-footer">
            {!! $carsId->links('vendor.pagination.bootstrap-4') !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop