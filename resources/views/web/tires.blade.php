@extends('layouts.app')

@section('subtitle')
Llantas
@endsection


@section('content')
<header>
    <div class="hero2">
        <div class="valign-wrapper">
            <div class="container">
                <div class="center">
                	<h2 class="white-text title">¿Qué tipo de llanta <br><span class="italic">estas buscando?</span></h2>
		        </div>
            </div>
        </div>
        <svg class="poligono-top hide-on-med-and-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="white" points="0,100 100,0 100,100"/>
        </svg>
    </div>
</header>

<main>
	<section class="section container center">
		<h2 class="rojo-text bold">Mensaje</h2>
		<p>En CIAN del Norte tenemos la llanta perfecta. Seguras, con mayor rendimiento y durabilidad y además bajo costo por kilometro. </p>
	</section>
	<section class="section">
		<h2 class="navy-text italic center">Llantas de Camión</h2>
		<div class="divider rojo container"></div>
		<br>
		<div class="fondo-2">
			<div class="container section">
				<div class="row">
					<div class="row center">
						@foreach($types as $type)
							@if($type->name == 'N/A')

							@else
								<div class="col m3 s12">
									<a href="{{ route('types', $type->slug) }}">
										<img src="/img/tipo.png" class="responsive-img" alt="">
										<p class="navy-text">{{ $type->name }}</p>
									</a>
								</div>
							@endif
						@endforeach
						<div class="col m3 s12">
							<a href="{{ route('tires') }}">
								<img src="/img/tipo.png" class="responsive-img" alt="">
								<p class="navy-text">Todas</p>
							</a>
						</div>
					</div>
					
					@foreach($camiones as $camion)
						<div class="col m4 s12">
							<div class="card">
								<div class="card-image">
									<a href="{{ Storage::url($camion->data) }}" data-fancybox="camion" data-title="{{ $camion->name }}" data-alt="{{ $camion->name }}"><img src="{{ Storage::url($camion->file) }}" alt=""></a>
								</div>
								<div class="card-content">
									<div class="center">
										<p class="rojo-text bold">{{ $camion->name }}</p>
										<p class="navy-text">{{ $camion->excerpt }}</p>
										<img src="{{ Storage::url($camion->brand) }}" alt="">
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<h2 class="navy-text italic center">Llantas Agrícolas</h2>
		<div class="divider rojo container"></div>
		<br>
		<div class="fondo-2">
			<div class="container">
				<div class="row">
					@foreach($agricolas as $agricola)
						<div class="col m4 s12">
							<div class="card">
								<div class="card-image">
									<a href="{{ Storage::url($agricola->data) }}" data-fancybox="agricola" data-title="{{ $agricola->name }}" data-alt="{{ $agricola->name }}"><img src="{{ Storage::url($agricola->file) }}" alt=""></a>
								</div>
								<div class="card-content">
									<div class="center">
										<p class="rojo-text bold">{{ $agricola->name }}</p>
										<p class="navy-text">{{ $agricola->excerpt }}</p>
										<img src="{{ Storage::url($agricola->brand) }}" alt="">
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
</main>
@endsection