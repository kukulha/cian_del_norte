@extends('layouts.app')

@section('content')
<header>
    <div class="hero3">
        <div class="valign-wrapper">
            <div class="container">
                <div class="center">
                	<img src="/img/logo.png" alt="" width="200px" class="responsive-img">
                	<h2 class="white-text italic title">maquinaria</h2>
                	<img src="/img/maquinaria2.png" class="responsive-img" alt="">
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
		<p class="section">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod dolorum consequuntur ut minima nam voluptate corporis voluptatem, laborum, rem, error earum similique repudiandae impedit consequatur qui debitis rerum maxime quis porro omnis commodi iure architecto amet facere aut! Soluta explicabo consectetur ipsum, voluptates culpa sit. Quidem excepturi id a, accusantium autem vitae doloremque, pariatur suscipit sapiente totam, magni laborum. Soluta voluptate praesentium quo voluptatem commodi nostrum neque impedit hic! Illo aliquam veniam, quam, sunt rem modi aspernatur vero eum accusantium nam explicabo, maiores consectetur expedita est. Earum expedita, necessitatibus quod magnam asperiores incidunt. Dolores iusto, perferendis libero suscipit quam amet nihil voluptatum reprehenderit excepturi beatae ratione omnis molestias odit error quia odio hic numquam inventore illo eveniet eos maiores ea? Velit animi hic assumenda neque commodi tempore cupiditate nemo aliquam, iure eligendi nobis facere. Quam expedita, possimus accusantium ut dolores fuga aliquam quis laboriosam.</p>
		<br>
		<div class="row">
			<div class="col m4 s12 center">
				<img src="/img/transporte.png" class="responsive-img" alt="">
				<h5 class="italic rojo-text title">Transporte</h5>
				<p class="navy-text">Con eficiencia y rapidez, transportamos maquinaria hasta el lugar de su obra.</p>
			</div>
			<div class="col m4 s12 center">
				<img src="/img/importacion.png" class="responsive-img" alt="">
				<h5 class="italic rojo-text title">Importación</h5>
				<p class="navy-text">Traemos la maquinaria que necesites desde Estados Unidos a México.</p>
			</div>
			<div class="col m4 s12 center">
				<img src="/img/exportacion.png" class="responsive-img" alt="">
				<h5 class="italic rojo-text title">Exportación</h5>
				<p class="navy-text">Llevamos su maquinaria a cualquier parte del mundo donde usted la requiera.</p>
			</div>
		</div>
	</section>
	<section class="section container">
				<div class="row">
					@foreach($machineries as $machinery)
						<div class="col m4 s12">
							<div class="card">
								<div class="card-image">
									<a href="{{ Storage::url($machinery->data) }}" data-fancybox="machinery" data-title="{{ $machinery->name }}" data-alt="{{ $machinery->name }}"><img src="{{ Storage::url($machinery->file) }}" alt=""></a>
								</div>
								<div class="card-content">
									<div class="center">
										<p class="rojo-text bold">{{ $machinery->name }}</p>
										<p class="navy-text">{{ $machinery->excerpt }}</p>
										<img src="{{ Storage::url($machinery->brand) }}" alt="">
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