@extends('layouts.dashboard')

@section('content')
<main>
	<section class="section">
		<div class="row">
			<div class="col m10 s12 offset-m1">
				<h3 class="navy-text titulo center">Editar articulo</h3>
				{{ Form::model($post,['route' => 'posts.store', 'method' => 'PUT', 'files' => 'true']) }}
					@include('admin.posts.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection