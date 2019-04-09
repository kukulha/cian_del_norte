@extends('layouts.app')

@section('content')
<main>
    <div class="valign-wrapper">
        <div class="container">
            <div class="row">
                <div class="col m10 s12 offset-m1">
                    <div class="card-panel">
                        <div class="card-content">
                            <h4 class="card-title navy-text">Iniciar Sesión</h4>
                            {{ Form::open(['route' => 'login', 'method' => 'POST']) }}

                                <div class="input-field">
                                    {{ Form::label('email', 'Correo Electrónico') }}
                                    {{ Form::email('email', null) }}
                                    @if ($errors->has('email'))
                                        <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="input-field">
                                    {{ Form::label('password', 'Contraseña') }}
                                    {{ Form::password('password', null) }}
                                    @if ($errors->has('password'))
                                        <span class="helper-text rojo-text" data-error="wrong" data-success="right">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="input-field">
                                    <p>
                                        <label>
                                            {{ Form::checkbox('remember', null) }}
                                            <span>Recordar</span>
                                        </label>
                                    </p>
                                </div>

                                <div class="input-field">
                                    {{ Form::submit('Iniciar Sesión', ['class' => 'btn rojo']) }}
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
