<div class="row">
	<div class="col m9 s12">

		<div class="input-field">
			{{ Form::label('name' , 'Modelo') }}
			{{ Form::text('name' , null , ['id' => 'name']) }}
			@if ($errors->has('name'))
			<span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('name') }}</span>
            @endif
		</div>

		<div class="input-field">
			{{ Form::label('slug' , 'URL') }}
			{{ Form::text('slug' , null , ['id' => 'slug']) }}
			@if ($errors->has('slug'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('slug') }}</span>
            @endif
		</div>



		<div class="file-field field-input">
			<div class="btn rojo">
				<span>Llanta</span>
				{{ Form::file('file', null) }}	
			</div>
			<div class="file-path-wrapper">
				{{ Form::text('file', null ,['class' => 'file-path'])}}
			</div>
			@if ($errors->has('file'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('file') }}</span>
            @endif
		</div>

		<div class="file-field field-input">
			<div class="btn rojo">
				<span>Ficha Técnica</span>
				{{ Form::file('data', null) }}	
			</div>
			<div class="file-path-wrapper">
				{{ Form::text('data', null ,['class' => 'file-path'])}}
			</div>
			@if ($errors->has('data'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('file') }}</span>
            @endif
		</div>

		<div class="file-field field-input">
			<div class="btn rojo">
				<span>Marca</span>
				{{ Form::file('brand', null) }}	
			</div>
			<div class="file-path-wrapper">
				{{ Form::text('brand', null ,['class' => 'file-path'])}}
			</div>
			@if ($errors->has('brand'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('file') }}</span>
            @endif
		</div>

		<div class="input-field">
			{{ Form::label('excerpt' , 'Descripcion') }}
			{{ Form::text('excerpt' , null ) }}
			@if ($errors->has('excerpt'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('excerpt') }}</span>
            @endif
		</div>

		<div class="row">
			<div class="col s12">
				{{Form::label('category', 'Categoría')  }}
				<br>
				<p style="display: inline">
					<label>
						{{ Form::radio('category', 'CAMION') }}
						<span>Camión</span>
					</label>
				</p>
				<p style="display: inline">
					<label>
						{{ Form::radio('category', 'AGRICOLA') }}
						<span>Agrícola</span>
					</label>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				{{Form::label('type_id', 'Tipo de Llanta')  }}
				<br>
				@foreach($types as $type)
				<p style="display: inline">
					<label>
						{{ Form::radio('type_id', $type->id) }}
						<span>{{ $type->name }}</span>
					</label>
				</p>
				@endforeach
			</div>
		</div>

		<div class="input-field">
			<input type="submit" value="Guardar" class="btn rojo">
		</div>
	</div>
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});
		});
	</script>
@endsection