@extends('layouts.app')

@section('subtitle')
{{ $post->name }}
@endsection

@section('seo')

	<meta name="keywords" content="@foreach($post->tags as $tag) {{ $tag->name }} @endforeach">
    <meta name="description" content="{{$post->excerpt}}">
    <!--SEO Twitter -->    
    <meta property="twitter:card" content="summary">
    <meta property="twitter:title" content="{{ $post->name }}">
    <meta property="twitter:description" content="{{ $post->excerpt }}">
    <meta property="twitter:url" content="{{ Request::url()}}">
    <meta property="twitter:image" content="http://www.ciandelnorte.com/favicon.ico">
    <meta property="twitter:creator" content="@Kukulha">
    

    <!--SEO Facebook -->    
    <meta property="og:title" content="{{ $post->name }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ Request::url()}}">
    <meta property="og:image" content="http://ciandelnorte.com/favicon.ico">
    <meta property="og:locale" content="es_MX">
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}">

    <!--Schema.org-->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Article",
            "name": "{{ $post->name }}",
            "headline": "{{ $post->name }}",
            "url": "http://www.ciandelnorte.com/blog/{{ $post->slug }}",
            "image": "http://ciandelnorte.com{{ Storage::url($post->file) }}",
            "description" : "{{ $post->excerpt }}",
            "keywords" : "@foreach($post->tags as $tag) {{ $tag->name }} @endforeach",
            "author": {
				"@type": "Person",
				"name" : "{{ $post->user->name }}"
        	},
            "datePublished": "{{ $post->created_at->diffForHumans() }}",
            "dateModified": "{{ $post->updated_at->diffForHumans() }}",
            "publisher": {
				"@type": "Organization",
				"name" : "Cian del Norte",
				"logo": {
					"@type": "imageObject",
					"url": "http://www.ciandelnorte.com/img/logo.png"
				}
        	},
        	"mainEntityOfPage" : {
				"@type": "WebPage",
				"@id": "http://www.ciandelnorte.com"
        	}
        }
    </script> 
@endsection

@section('content')
<main>
	<article class="section center">
		<h4 class="navy-text italic">{{ $post->name }}</h4>
		<div class="card horizontal hide-on-med-and-down">
			<div class="card-image">
				<img src="{{ $post->file }}" class="responsive-img" alt="">
				<br>
				<p class=" navy-text">Autor: <span class="italic">{{ $post->user->name }}</span></p>
					<p class=" navy-text">Fecha: <span class="italic">{{ $post->created_at->format('l d \d\e F Y, g:i a') }}</span></p>
					<div class="divider"></div>
					<br>
			</div>
			<div class="card-stacked">
				<div class="card-content">
					<p>{!! $post->body !!}</p>
				</div>
				<div class="card-action left-align">
					<p class="navy-text">Categoria: <a href="" class="celeste-text">{{ $post->category->name }}</a></p>
					<p class="navy-text">
						Etiquetas: @foreach($post->tags as $tag)
							<a href="" class="chip">{{ $tag->name }}</a>
						@endforeach
					</p>
				</div>
			</div>
		</div>
		<div class="card hide-on-med-and-up">
                <div class="card-image">
                        <img src="{{ $post->file }}" class="responsive-img" alt="">
                </div>
                <div class="card-content">
                	<p class=" navy-text">Autor: <span class="italic">{{ $post->user->name }}</span></p>
					<p class=" navy-text">Fecha: <span class="italic">{{ $post->created_at->format('l d \d\e F Y, g:i a') }}</span></p>
					<div class="divider"></div>
					<br>
                    <p class="azul-text">{{ $post->body }}</p>
                </div>
                <div class="card-action left-align">
                    
					<p class="navy-text">Categoria: <a href="" class="celeste-text">{{ $post->category->name }}</a></p>
					<p class="navy-text">
						Etiquetas: @foreach($post->tags as $tag)
							<a href="" class="chip">{{ $tag->name }}</a>
						@endforeach
					</p>
                </div>
            </div>
	</article>
	<div class="row ">
			@if($related->isEmpty())
				<h4 class="grey-text text-darken-3">No hay articulos relacionados</h4>
			@else
				<div class="section-title">
					<div class="row center">
				    	<h4 class="grey-text text-darken-3">Articulos relacionados</h4>
				    	@foreach($related as $post)
							<div class="col m4 s12">
								<div class="card">
									<div class="card-image waves-effect waves-block waves-light">
										<img src="{{ $post->file }}" alt="">
									</div>
									<div class="card-content negro">
			  							<span class="card-title">{{ $post->name }}</span>
			  							<p class="">{{ $post->excerpt }}</p>
			  							<a href="{{ route('post', $post->slug) }}" class="btn rojo">Ver más</a>
									</div>
								</div>
							</div>
				    	@endforeach
				    </div>
				</div>
			@endif
		</div>
</main>
@endsection