@component('mail::message')
# Nuevo mensaje de la página web

Nombre :{{ $data->name }}

Correo Electrónico: {{ $data->email }}

Teléfono: {{ $data->phone }}

Tipo de Producto por el cual esta interesado: {{ $data->product }}

Mensaje: {{ $data->body }}

##Gracias,<br>
{{ config('app.name') }}
@endcomponent
