@extends('layouts.app')

@section('content')
<main class="section">
	<section class="container center section">
		<img src="/img/logo-2.png" class="responsive-img" width="450px" alt="">
		<h3 class="navy-text titulo">Lista de Blogs</h3>
		<div class="divider rojo"></div>
	</section>
	@foreach($posts as $post)
		@if($post->id % 2 == 0)
			<div class="card horizontal">
				<div class="card-image">
						<img src="{{ $post->file }}" class="responsive-img" alt="">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<a href="{{ route('post', $post->slug) }}"><h4 class="navy-text italic">{{ $post->name }}</h4></a>
						<p class="azul-text">{{ $post->excerpt }}</p>
					</div>
					<div class="card-action">
						<a href="{{ route('post', $post->slug) }}" class="btn navy right">Leer más</a>
					</div>
				</div>
			</div>
		@else
			<div class="card horizontal">
				
				<div class="card-stacked">
					<div class="card-content">
						<a href="{{ route('post', $post->slug) }}"><h4 class="navy-text italic">{{ $post->name }}</h4></a>
						<p class="azul-text">{{ $post->excerpt }}</p>
					</div>
					<div class="card-action">
						<a href="{{ route('post', $post->slug) }}" class="btn navy">Leer más</a>
					</div>
				</div>
				<div class="card-image">
					<img src="{{ $post->file }}" class="responsive-img" alt="">
				</div>
			</div>
		@endif
	@endforeach
	<div class="center">
		{{ $posts->links('pagination::default') }}
	</div>
</main>
@endsection
