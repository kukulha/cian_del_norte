<div class="row">
	<div class="col m9 s12">

		<input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

		<div class="input-field">
			{{ Form::label('name' , 'Titulo del articulo') }}
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
				<span>Imagen</span>
				{{ Form::file('file', null) }}	
			</div>
			<div class="file-path-wrapper">
				{{ Form::text('file', null ,['class' => 'file-path'])}}
			</div>
			@if ($errors->has('file'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('file') }}</span>
            @endif
		</div>

		<div class="input-field">
			{{ Form::label('excerpt' , 'Extracto') }}
			{{ Form::text('excerpt' , null ) }}
			@if ($errors->has('excerpt'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('excerpt') }}</span>
            @endif
		</div>
		<div class="input-field">
			{{ Form::label('body' , 'Contenido') }}
			{{ Form::textarea('body' , null , ['class' => 'materialize-textarea']) }}
			@if ($errors->has('body'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('body') }}</span>
            @endif
		</div>
		<div class="input-field">
			<input type="submit" value="Guardar" class="btn rojo">
		</div>
	</div>
	<div class="col m3 s12">
		
		<div class="input-field">
			<label for="category_id">Categoria</label>
			<br><br>
			<div>
				@foreach($categories as $category)
					<p>
						<label>
							{{ Form::radio('category_id', $category->id ) }}
							<span>{{ $category->name}}</span>
						</label>
					</p>
				@endforeach
			</div>
			@if ($errors->has('category_id'))
                <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('category_id') }}</span>
            @endif
		</div>
		<div class="input-field">
			{{ Form::label('tags', 'Etiquetas(Palabras separadas por comas)') }}
			{{Form::text('tags', null, ['data-role' => 'materialtags'])}}
		</div>
	</div>
</div>

@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$("#name, #slug").stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			ClassicEditor
        		.create( document.querySelector( '#body' ) )
        		.catch( error => {
            	console.error( error );
        	} );


		});
	</script>
@endsection