@extends ('layout')

@section('content')

    <h1>Editar el articulo: {{ $articulo->titulo }}</h1>
    <hr>

    {!! Form::model($articulo ,['method' => 'PATCH', 'action' => ['ArticulosController@update', $articulo->id] ]) !!}
    <div class="form-group">
        {!! Form::label('titulo','Titulo:') !!}
        {!! Form::text('titulo',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('descripcion','Descripcion:') !!}
        {!! Form::textarea('descripcion',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('autor','Autor:') !!}
        {!! Form::text('autor',null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Agregar Articulo',['class' => 'btn btn-primary form-control']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'delete','route' => ['articulos.destroy',$articulo -> id]]) !!}
        <div class="form form-group">
            {!! Form::submit('Eliminar Articulo',['class' => 'btn btn-danger form-control']) !!}

        </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    @endif


@stop