@extends('layouts.dashboard')

@section('content')
<main>
	<section class="container center">
		<h3 class="navy-text titulo">Listado de Mensajes</h3>
		<br>
		<table class="centered striped responsible-table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Teléfono</th>
				<th colspan="2">Acciones</th>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->phone }}</td>
						<td><a href="{{ route('messages.show', $message->id) }}" class="btn celeste">Ver</a></td>
						<td>
							{{ Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) }}
								{{Form::submit('Eliminar', ['class' => 'btn rojo'])}}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $messages->links('pagination::default') }}
		</div>
	</section>
</main>
@endsection