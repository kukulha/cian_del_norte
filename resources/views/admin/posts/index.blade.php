@extends('layouts.dashboard')

@section('content')
<main>
	<section class="container center">
		<h3 class="navy-text titulo">Listado de articulos</h3>
		<br>
		<a href="{{ route('posts.create') }}" class="btn right celeste">Crear</a>
		<table class="centered striped responsible-table">
			<thead>
				<th>Titulo</th>
				<th>Extracto</th>
				<th colspan="3">Acciones</th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td>{{ $post->name }}</td>
						<td>{{ $post->excerpt }}</td>
						<td><a href="{{ route('posts.edit', $post->id) }}" class="btn navy">Editar</a></td>
						<td>
							{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
								{{Form::submit('Eliminar', ['class' => 'btn rojo'])}}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="center">
			{{ $posts->links('pagination::default') }}
		</div>
	</section>
</main>
@endsection