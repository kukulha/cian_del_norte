@extends('layouts.app')

@section('subtitle')
Queremos saber de ti
@endsection


@section('content')
<header>
    <div class="hero4">
        <div class="valign-wrapper">
            <div class="container center">
            	<h2 class="white-text italic title">¡Contáctanos</h2>
				<div class="row">
					<div class="col m8 offset-m2 s12">
						{{ Form::open(['route' => 'messages.store', 'method' => 'POST']) }}
							<div class="input-field">
								{{ Form::label('name', 'Nombre Completo', ['class' => 'white-text']) }}
								{{ Form::text('name', null, ['class' => 'white-text']) }}
								@if ($errors->has('name'))
									<span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('name') }}</span>
    							@endif
							</div>
							<div class="input-field">
								{{ Form::label('email', 'Correo', ['class' => 'white-text']) }}
								{{ Form::email('email', null, ['class' => 'white-text']) }}
								@if ($errors->has('name'))
									<span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('email') }}</span>
    							@endif
							</div>
							<div class="input-field">
								{{ Form::label('phone', 'Teléfono', ['class' => 'white-text']) }}
								{{ Form::text('phone', null, ['class' => 'white-text']) }}
								@if ($errors->has('name'))
									<span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('phone') }}</span>
    							@endif
							</div>
							<div class="input-field">
								<select name="product" id="product">
									<option value="CAMION" id="product">Llantas de Camión</option>
									<option value="AGRICOLA" >Llantas Agrícolas</option>
									<option value="MAQUINARIA" >Maquinaria para Construcción</option>
								</select>
								@if ($errors->has('name'))
									<span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('product') }}</span>
    							@endif
							</div>
							<div class="input-field">
								{{ Form::label('body', 'Mensaje', ['class' => 'white-text']) }}
								{{ Form::textarea('body', null,['class' => 'materialize-textarea white-text']) }}
								@if ($errors->has('name'))
									<span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('body') }}</span>
    							@endif
							</div>

							<div class="input-field">
								{{ Form::submit('Enviar', ['class' => 'btn rojo italic']) }}
							</div>
						{{ Form::close() }}
					</div>
				</div>
            </div>
        </div>
        <svg class="poligono-top hide-on-med-and-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon fill="white" points="0,100 100,0 100,100"/>
        </svg>
    </div>
</header>
@endsection