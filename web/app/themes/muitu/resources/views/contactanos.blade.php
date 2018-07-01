{{--
  Template Name: Pagina de contactanos
--}}


@extends('layouts.app')
@section('content')


    <div class="tituloarribacontac">
      <h1 class="titlecontactanos">¿Quieres decir hola?</h1>
    </div>

    <div class="containercontactanos is-marginless columns is-multiline">
        @if(have_rows('tarjeta', 97))
        {{-- loop through the rows of data --}}
        @while (have_rows('tarjeta', 97))@php(the_row())
            <div class="tarjetauna column is-4">
                <div class="fondoimg"></div>
                <div class="containertarjeta">
                    <h1 class="name">{{ get_sub_field('name') }}</h1>
                    <p class="cargo">{{ get_sub_field('cargo') }}</p>
                    <p class="correo">{{ get_sub_field('correo_electronico') }}</p>
                    <p class="dominio">{{ get_sub_field('dominio') }}</p>
                    <h1 class="telefono">{{ get_sub_field('numero_telefonico') }}</h1>
                </div>
            </div>      
        @endwhile 
        @else      
        @endif
    </div>

@endsection