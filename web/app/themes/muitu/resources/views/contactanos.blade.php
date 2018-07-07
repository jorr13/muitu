{{--
  Template Name: Pagina de contactanos
--}}


@extends('layouts.app')
@section('content')


    <div class="tituloarribacontac">
      <h3 class="titlecontactanos">¿Quieres decir hola?</h3>
    </div>

    <div class="containercontactanos is-marginless columns is-multiline">
        @if(have_rows('tarjeta', 97))
        {{-- loop through the rows of data --}}
        @while (have_rows('tarjeta', 97))@php(the_row())
            <div class="tarjetauna column is-4">
                <div class="fondoimg"></div>
                <div class="containertarjeta">
                    <h3 class="name">{{ get_sub_field('name') }}</h3>
                    <p class="cargo">{{ get_sub_field('cargo') }}</p>
                    <p class="correo">{{ get_sub_field('correo_electronico') }}</p>
                    <p class="dominio">{{ get_sub_field('dominio') }}</p>
                    <h1 class="telefono">{{ get_sub_field('numero_telefonico') }}</h1>
                    <a class="contacto" data-email="{{ get_sub_field('repetircorreo') }}" href="#" >Contactar</a>
                </div>
            </div>       
        @endwhile 
        @else      
        @endif
        <div id="registrar-usuario" class="modal .modalcerrada">
            <div class="modal-background"></div>
            <div class="modal-card">
                <header class="modal-card-head">
                    <div class="imgmodal">
                        <img src="/app/uploads/2018/06/iso-muitu.png" class="logomodal">
                    </div>
                    <p class="modal-card-title">Escribe tu mensaje</p>
                    <button id="cerrar" class="delete" aria-label="close"></button>
                </header>
                <section class="modal-card-body">
                    <input class="nombremodal"  placeholder="Su nombre" id="nombre" type="text">
                    <input class="emailmodal"  placeholder="Su email" id="emailcliente" type="text">
                    <input id="email-receptor" type="hidden" name="" id="" value="email">
                    <input class="tlfmodal" placeholder="Numero de telefono" id="telefono" type="text" >
                    <textarea class="containermensaje" id="mensaje" placeholder="Su mensaje"></textarea>
                </section>
                <footer class="modal-card-foot">
                <a href="#" id="submitemail" class="botonproducto botonmodal">Enviar</a>   
                </footer>
            </div>
        </div>
    </div>
    <div class="tituloarribacontac titlecontacabajo">
        <h3 class="titlecontactanos">CONTACTANOS:</h3>
    </div>
    <div class="tarjetaabajo">
        <p class="nrotlf">+341 667 32 81 19</p>
        <p class="correoabajo">info@muituhandmade.com</p>
        <p class="direccionabajo">calle amado nervo. 5. piso 2 a madrid 28007</p>
    </div>

@endsection