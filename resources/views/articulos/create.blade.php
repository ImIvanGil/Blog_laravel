@extends ('layout')

@section('content')

<h1>Crear Articulos</h1>
{!! Form::open(['url' => 'articulos']) !!}
  <div class="form-group">
    {!! Form::label('titulo','Titulo:') !!}
    {!! Form::text('titulo',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('descripcion','Descripcion:') !!}
    {!! Form::textarea('descripcion',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('Autor','Autor:') !!}
    {!! Form::text('Autor',null,['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::submit('Agregar Articulo',['class' => 'btn btn-primary form-control']) !!}
  </div>

{!! Form::close() !!}

@if ($errors->any())
  <ul class="alert" alert-damage>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach

  </ul>

@endif
@stop
 