@extends('layout')

@section('content')
<h1>Laravel</h1>
	@if(count($people))
		<h1>Arreglo</h1>
		<ul>
		@foreach ($people as $personas)
			<li>{{  $personas }}</li>	
		@endforeach
		</ul>
	


@stop
@endif