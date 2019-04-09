@extends('layouts.dashboard')

@section('content')
<main>
	<section class="container center">
		<h3 class="navy-text titulo">Listado de Maquinaria</h3>
		<br>
		<a href="{{ route('machineries.create') }}" class="btn right celeste">Crear</a>
		<table class="centered striped responsible-table">
			<thead>
				<th>Modelo</th>
				<th>Marca</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($machineries as $machinery)
					<tr>
						<td>{{ $machinery->name }}</td>
						<td>{{ $machinery->brand }}</td>
						<td><a href="{{ route('machineries.edit', $machinery->id) }}" class="btn navy">Editar</a></td>
						<td>
							{{ Form::open(['route' => ['machineries.destroy', $machinery->id], 'method' => 'DELETE']) }}
								{{Form::submit('Eliminar', ['class' => 'btn rojo'])}}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $machineries->links('pagination::default') }}
		</div>
	</section>
</main>
@endsection