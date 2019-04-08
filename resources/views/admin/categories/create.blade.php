@extends('layouts.dashboard')

@section('content')
<main>
	<section class="section">
		<div class="row">
			<div class="col m10 s12 offset-m1">
				<h3 class="navy-text titulo center">Crear nueva categoría</h3>
				{{ Form::open(['route' => 'categories.store', 'method' => 'POST', 'files' => 'true']) }}
					@include('admin.categories.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection