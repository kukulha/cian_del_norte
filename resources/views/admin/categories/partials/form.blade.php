<div class="input-field">
	{{ Form::label('name' , 'Categoría') }}
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

<div class="input-field center">
	<input type="submit" value="Guardar" class="btn rojo">
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