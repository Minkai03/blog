@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Crear nueva clasificación</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.clasificacion.store']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'nombre') !!}
                    {!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre de la clasificación']) !!}

                @error('nombre')
                    <span class="text-danger">{{$message}}</span>
                @enderror

                </div>
                <div class="form-group">
                    {!! Form::label('slug', 'slug') !!}
                    {!! Form::text('slug', null, ['class'=>'form-control']) !!}
                </div>
                @error('slug')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                {!! Form::submit('Crear clasificación', ['class'=>'btn btn-primary', 'placeholder'=>'Ingrese el nombre de la clasificación', 'readonly']) !!}
            {!! Form::close() !!}
        </div>
    </div>
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
