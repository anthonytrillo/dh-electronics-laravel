@extends('layouts.app')

@section('title', $productToShow->name)

@section('content')
	<h2>DETALLE DEL PRODUCTO</h2>
	<h3>{{ $productToShow->name }}</h3>
	<h4><b>Precio: $</b> {{ $productToShow->price }}</h4>
	<p><b>Categoria:</b> {{ $productToShow->category->name}}</p>
	<p><b>Descripción:</b> {{ $productToShow->description}}</p>

	<img src="/storage/images/fotosDH/{{ $productToShow->image }}" width="200">
	<hr>

	{{-- @auth --}}
		<form action="/products/{{ $productToShow->id }}" method="post" style="display: inline-block;">
			{{-- Siempre un formulario necesita el toke --}}
			@csrf
			{{-- Para usar el método HTTP que realmente queremos usar --}}
			{{ method_field('delete') }}
			<button type="submit" class="btn btn-danger">Eliminar</button>
		</form>


		<a href="/products/edit/{{ $productToShow->id }}" class="btn btn-warning">Editar</a>
		</form>

		<a href={{ URL::previous() }} class="btn btn-success">Volver atras</a>

	{{-- @endauth --}}
@endsection
