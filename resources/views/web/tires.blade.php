@extends('layouts.app')

@section('content')
<header>
    <div class="hero2">
        <div class="valign-wrapper">
            <div class="container">
                <div class="center">
                	<h2 class="white-text title">¿Qué tipo de llanta <br><span class="italic">estas buscando?</span></h2>
                
		            <div class="row">
			            <div class="col m6 s12">
			                <img src="/img/agricola.png" class="responsive-img" alt="">
			                <br>
			                <a href="" class="btn rojo title">Agrícola</a>
			            </div>
			            <div class="col m6 s12">
			                <img src="/img/camion.png" class="responsive-img" alt="">
			                <br>
			                <a href="" class="btn rojo title">Camión</a>
			            </div>
		        	</div>
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
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolorum consequuntur ut minima nam voluptate corporis voluptatem, laborum, rem, error earum similique repudiandae impedit consequatur qui debitis rerum maxime quis porro omnis commodi iure architecto amet facere aut! Soluta explicabo consectetur ipsum, voluptates culpa sit. Quidem excepturi id a, accusantium autem vitae doloremque, pariatur suscipit sapiente totam, magni laborum. Soluta voluptate praesentium quo voluptatem commodi nostrum neque impedit hic! Illo aliquam veniam, quam, sunt rem modi aspernatur vero eum accusantium nam explicabo, maiores consectetur expedita est. Earum expedita, necessitatibus quod magnam asperiores incidunt. Dolores iusto, perferendis libero suscipit quam amet nihil voluptatum reprehenderit excepturi beatae ratione omnis molestias odit error quia odio hic numquam inventore illo eveniet eos maiores ea? Velit animi hic assumenda neque commodi tempore cupiditate nemo aliquam, iure eligendi nobis facere. Quam expedita, possimus accusantium ut dolores fuga aliquam quis laboriosam.</p>
	</section>
	<section class="section">
		<h2 class="navy-text italic center">Llantas de Camión</h2>
		<div class="divider rojo container"></div>
		<br>
		<div class="fondo-2">
			<div class="container">
				<div class="row">
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
									<a href="{{ Storage::url($agricola->data) }}" data-fancybox="camion" data-title="{{ $agricola->name }}" data-alt="{{ $agricola->name }}"><img src="{{ Storage::url($agricola->file) }}" alt=""></a>
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