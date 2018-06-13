{{--
  Template Name: Pagina de quienes-somos
--}}


@extends('layouts.app')

@section('content')

<div class="secciondos">
    <div class="contenedorsecciondos is-marginless columns is-multiline">
        <div class="imgparteuno">
            <img class="logoparteuno" src="/app/uploads/2018/06/iso-white.png" alt="" />
        </div>
        <div class="contenidopartedos">
            <h1>Quienes somos</h1>
        </div>
    </div>
</div>
<div class="partedos">
    <p>{{ the_field('partedos', 44)}}</p>
</div>

@if(have_rows('partetres', 44))
{{-- loop through the rows of data --}}
@while (have_rows('partetres', 44))@php(the_row())
    <div class="parteuno partetres">
        <div class="contenedorsecciondos is-marginless columns is-multiline">
            <div class="contendos column is-5">
              <p class="contenidodos contenidotres">{{ get_sub_field('partetext') }}</p>
            </div>
            <div class="imgseccion column is-5" style="position: absolute;right: 0;
            background-size: cover !important; background-size: cover !important; height: 100%; background:url('{{ get_sub_field('imgcontenedor') }}')"></div>
        </div>
    </div>
@endwhile
@else      
@endif

<div class="partedos">
    <p>{{ the_field('seccion_medio', 44)}}</p>
</div>
@if(have_rows('partecuatro', 44))
{{-- loop through the rows of data --}}
@while (have_rows('partecuatro', 44))@php(the_row())
    <div class="parteuno partecuatro">
        <div class="contenedorseccionuno contenedorseccionuno is-marginless columns is-multiline">
            <div class="imgseccion column is-5">
                <img src="{{ get_sub_field('imgcontenedordos') }}" alt="">
            </div>	
                <div class="conten column is-5">
              <p class="contenidocuatro">{{ get_sub_field('contenidocuatro') }}</p>
            </div>
        </div>
    </div>
@endwhile
@else      
@endif
<div class="partedos">
    <div class="titleseccionseis">
        <h1>Nuestra Determinacion</h1>
        <h2>Proposito</h2>
    </div>

@if(have_rows('seccion_seis', 44))
{{-- loop through the rows of data --}}
@while (have_rows('seccion_seis', 44))@php(the_row())
    <div class="parteseis seccionseis">
        <p class="contenidoseis">{{ get_sub_field('containerArriba') }}</p>
        <div class="is-marginless columns is-multiline">
        
            <div class="primeraimagen column is-4">
                <img src="{{ get_sub_field('primeraImagen') }}" class="primeraimagen"> 
            </div>

            <div class="containerverde column is-4"></div>	
        </div>
    </div>
@endwhile
@else      
@endif
</div>
@endsection
