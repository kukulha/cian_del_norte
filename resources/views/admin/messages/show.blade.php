@extends('layouts.dashboard')

@section('content')
<main>
	<section class="section container center">
		<h2 class="navy-text">Nuevo mensaje</h2>
		<p class="navy-text"><span class="italic">Nombre:</span> {{ $message->name }}</p>
		<p class="navy-text"><span class="italic">Correo:</span> {{ $message->email }}</p>
		<p class="navy-text"><span class="italic">Teléfono:</span> {{ $message->phone }}</p>
		<p class="navy-text"><span class="italic">Producto seleccionado:</span> {{ $message->product }}</p>
		<p class="navy-text"><span class="italic">Mensaje:</span> {{ $message->body }}</p>
	</section>
</main>
@endsection