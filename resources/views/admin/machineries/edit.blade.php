@extends('layouts.dashboard')

@section('content')
<main>
	<section class="section">
		<div class="row">
			<div class="col m10 s12 offset-m1">
				<h3 class="navy-text titulo center">Editar maquinaria</h3>
				{{ Form::model($machinery,['route' => ['machineries.update', $machinery->id], 'method' => 'PUT', 'files' => 'true']) }}
					@include('admin.machineries.partials.form')
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection