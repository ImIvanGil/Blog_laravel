@extends ('layout')

@section('content')

<h1>Detalle de articulos</h1>
<p>
    <h1>{{$articulo->titulo}}</h1>
    <h2>{{$articulo->descripcion}}</h2>
    <h3>{{$articulo->autor}}</h3>
</p>
@stop
