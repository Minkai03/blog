@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Editar clasificación</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>        
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($clasificacion, ['route'=>['admin.clasificacion.update', $clasificacion], 'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'nombre') !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la clasificación']) !!}

                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'slug') !!}
                    {!! Form::text('slug', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la clasificación', 'readonly']) !!}
                </div>
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                {!! Form::submit('Actualizar clasificación', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#nombre").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection