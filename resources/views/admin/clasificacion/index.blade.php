@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Lista de clasificaciones</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>        
    @endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href={{route(admin.clasificacion.create)}}>Crear nueva clasificación</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clasificaciones as $clasificacion)
                    <tr>
                        <td>{{$clasificacion->id}}</td>
                        <td>{{$clasificacion->nombre}}</td>
                        <td width="10px"><a class="btn btn-primary btn-sm" href="{{route('admin.clasificacion.edit', $clasificacion)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.clasificacion.destroy', $clasificacion)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

