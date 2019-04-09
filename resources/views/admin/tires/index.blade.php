@extends('layouts.dashboard')

@section('content')
<main>
	<section class="container center">
		<h3 class="navy-text titulo">Listado de Llantas</h3>
		<br>
		<a href="{{ route('tires.create') }}" class="btn right celeste">Crear</a>
		<table class="centered striped responsible-table">
			<thead>
				<th>Modelo</th>
				<th>Marca</th>
				<th>Categoria</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($tires as $tire)
					<tr>
						<td>{{ $tire->name }}</td>
						<td>{{ $tire->brand }}</td>
						<td>{{ $tire->category }}</td>
						<td><a href="{{ route('tires.edit', $tire->id) }}" class="btn navy">Editar</a></td>
						<td>
							{{ Form::open(['route' => ['tires.destroy', $tire->id], 'method' => 'DELETE']) }}
								{{Form::submit('Eliminar', ['class' => 'btn rojo'])}}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $tires->links('pagination::default') }}
		</div>
	</section>
</main>
@endsection