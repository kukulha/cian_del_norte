@extends('layouts.dashboard')

@section('content')
<main>
	<section class="container center">
		<h3 class="navy-text titulo">Listado de categorías</h3>
		<br>
		<a href="{{ route('categories.create') }}" class="btn right celeste">Crear</a>
		<table class="centered striped responsible-table">
			<thead>
				<th>Nombre</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td><a href="{{ route('categories.edit', $category->id) }}" class="btn navy">Editar</a></td>
						<td>
							{{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
								{{Form::submit('Eliminar', ['class' => 'btn rojo'])}}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $categories->links('pagination::default') }}
		</div>
	</section>
</main>
@endsection