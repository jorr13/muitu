@extends('layouts.app')

@section('content') 
<div class="contenedor404"><img class="img404" src="{{the_field('img_404', 'option')}} " alt=""></div>
  @if (!have_posts())
  <div class="posts">     
    <div class="containerposts columns is-multiline">
      <h3 class="error">ERROR 404</h3>
    <p class="nrotlf">No se encontraron resultados, por favor revise su busqueda y intentelo nuevamente.</p>
<div class="contenedorbotones">
    <a href="{{ home_url('/') }}" class="botonproducto">Volver a Inicio</a>
    <a href="/shop" class="botonproducto irtienda">Ir a tienda</a></div>
    </div>
</div>


  @endif
@endsection
