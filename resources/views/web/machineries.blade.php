@extends('layouts.app')

@section('subtitle')
Maquinaria
@endsection


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
		<p class="section">La maquinaria pesada más eficiente la encontrarás en <span class="bold">CIAN del Norte</span>. <br>Contamos con una amplia experiencia en el sector de venta de este tipo de equipos. Manejamos los precios más competitivos, una atención personalizada, personal más capacitado y una cartera de clientes que nos respaldan.</p>
		<ul >
			<li>Retroexcavadoras</li>
			<li>Tractores Agrícolas</li>
			<li>Combinadas</li>
			<li>Plantas de Luz</li>
			<li>Montacargas</li>
		</ul>
		<br>
		<p class="section">¡En <span class="bold">CIAN del Norte</span> estás en buenas manos! <br> Los mejores Equipos, Servicio de calidad y personalizado y precios competitivos</p>
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