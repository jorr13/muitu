{{--
  Template Name: Pagina de quienes-somos
--}}


@extends('layouts.app')

@section('content')

<div class="secciondos animated fadeInUp">
    <div class="contenedorsecciondos is-marginless columns is-multiline">
        <div class="imgparteuno">
            <img class="logoparteuno" src="/app/uploads/2018/06/iso-white.png" alt="" />
        </div>
        <div class="contenidopartedos">
            <h1>Quiénes somos</h1>
        </div>
    </div>
</div>
<div class="partedos animated fadeInUp">
    <p>{{ the_field('partedos', 44)}}</p>
</div>


@if(have_rows('partetres', 44))
{{-- loop through the rows of data --}}
@while (have_rows('partetres', 44))@php(the_row())
    <div class="parteuno partetres an">
        <div class="contenedorsecciondos is-marginless columns is-multiline">
            <div class="contendos column is-5">
              <p class="contenidodos contenidotres">{{ get_sub_field('partetext') }}</p>
            </div>
            <div class="imgseccion column is-5" style="position: absolute;right: 0;
            background-size: cover !important; height: 100%; background:url('{{ get_sub_field('imgcontenedor') }}')"></div>
        </div>
    </div>
@endwhile
@else      
@endif

<div class="partedos an">
    <p>{{ the_field('seccion_medio', 44)}}</p>
</div>
@if(have_rows('partecuatro', 44))
{{-- loop through the rows of data --}}
@while (have_rows('partecuatro', 44))@php(the_row())
    <div class="parteuno partecuatro an">
        <div class="contenedorseccionuno contenedorseccionuno is-marginless columns is-multiline">
            <div class="imgseccion column is-5" style="position: relative;left: 0;
            background-size: cover !important; height: 100%; background:url('{{ get_sub_field('imgcontenedordos') }}')"></div>
                <div class="conten column is-5">
              <p class="contenidocuatro">{{ get_sub_field('contenidocuatro') }}</p>
            </div>
        </div>
    </div>
@endwhile
@else      
@endif
<div class="partedos an">
    <div class="titleseccionseis">
        <h1>Nuestra Determinación</h1>
        <h2>Propósito</h2>
    </div>
@if(have_rows('seccion_seis', 44))
{{-- loop through the rows of data --}}
@while (have_rows('seccion_seis', 44))@php(the_row())
    <div class="parteseis seccionseis">
        <p class="contenidoseis">{{ get_sub_field('containerArriba') }}</p>
        <div class="is-marginless columns is-multiline">
            <div class="primeraimagen column is-4">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('primeraImagen') }}');background-size: cover;
                height: 100%;"></div>
            </div>
            <div class="containercolor column is-4">  
                <div class="containerverde">
                    <img src="/app/uploads/2018/06/iso-white.png" class="imglogocolor">
                </div>
            </div>	
            <div class="primeraimagen column is-4">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('segundaImagen') }}');background-size: cover;
                height: 100%; background-size: cover; background-position: center;"></div>
            </div>
        </div>
        <div class="is-marginless columns is-multiline">
            <div class="containercolor column is-4">  
                <div class="containermarron containerverde">
                    <img src="/app/uploads/2018/06/iso-white.png" class="imglogocolor">
                </div>
            </div>	
            <div class="primeraimagen column is-4">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('terceraImagen') }}');background-size: cover;
                height: 100%; background-size: cover; background-position: center;"></div>
            </div>
            <div class="containercolor column is-4">  
                <div class="containerrosa containerverde">
                    <img src="/app/uploads/2018/06/iso-white.png" class="imglogocolor">
                </div>
            </div>	
        </div>
        <div class="is-marginless columns is-multiline">
            <div class="primeraimagen column is-4">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('cuartaImagen') }}');background-size: cover;
                height: 100%; background-size: cover; background-position: center;"></div>
            </div>
            <div class="containercolor column is-4">  
                <div class="containerbarro containerverde">
                    <img src="/app/uploads/2018/06/iso-white.png" class="imglogocolor">
                </div>
            </div>
            <div class="primeraimagen column is-4">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('quintaImagen') }}');background-size: cover;
                height: 100%; background-size: cover; background-position: center;"></div>
            </div>	
        </div>
        <p class="contenidoseis contenidoabajo">{{ get_sub_field('contenidoAbajo') }}</p>	
    </div>    
</div>
<div class="tresimg is-marginless columns is-multiline an">
    <div class="column is-4 is-paddingless">
    <div class="imagenprimera " style="background:url('{{ get_sub_field('primeraImagenAbajo') }}');background-size: cover;
    height: 300px;"></div></div>

    <div class="column is-4 is-paddingless">
    <div class="imagenprimera" style="background:url('{{ get_sub_field('segundaImagenAbajo') }}');background-size: cover;
    height: 300px;"></div></div>

    <div class="column is-4 is-paddingless">
    <div class="imagenprimera" style="background:url('{{ get_sub_field('terceraImagenAbajo') }}');background-size: cover;
    height: 300px; "></div></div>
</div>
@endwhile
@else      
@endif

<div class="partedos an">
    <div class="titleseccionseis">
        <h1>Nuestro Cometido</h1>
        <h2>Misión</h2>
    </div>
    @if(have_rows('seccion_siete', 44))
    {{-- loop through the rows of data --}}
    @while (have_rows('seccion_siete', 44))@php(the_row())
    <div class="parteseis seccionseis ">
        <p class="contenidoseis">{{ get_sub_field('contenidoArriba') }}</p>
        <div class="contenedorimg is-marginless columns is-multiline">
            <div class="imgcentral has-text-centered columns">
                <div class="secundariaimg column is-4 is-paddingless">
                    <div class="imagenprimera" style="background:url('{{ get_sub_field('primeraImagen') }}');background-size: cover;
                    height: 100%;"></div>
                </div>
                <div class="primeraimagen column is-4 is-paddingless">
                    <div class="imagenprimera imagenmedio" style="background:url('{{ get_sub_field('segundaImagen') }}');background-size: cover;
                    height: 100%;"></div>
                </div>
                <div class="secundariaimg column is-4 is-paddingless">
                    <div class="imagenprimera" style="background:url('{{ get_sub_field('terceraImagen') }}');background-size: cover;
                    height: 100%;"></div>
                </div>
            </div>
        </div>
        <p class="contenidoseis contenidoabajo">{{ get_sub_field('contenido_abajo') }}</p>
    </div>
</div>
    <div class="tresimg is-marginless columns is-multiline an">
        <div class="column is-4 is-paddingless">
            <div class="imagenprimera " style="background:url('{{ get_sub_field('primeraImagenAbajo') }}');background-size: cover;
            height: 300px;"></div>
        </div>
        <div class="column is-4 is-paddingless">
            <div class="imagenprimera" style="background:url('{{ get_sub_field('segundaImagenAbajo') }}');background-size: cover;
            height: 300px;"></div>
        </div>
        <div class="column is-4 is-paddingless">
            <div class="imagenprimera" style="background:url('{{ get_sub_field('terceraImagenAbajo') }}');background-size: cover;
            height: 300px; "></div>
        </div>
    </div>
    @endwhile
    @else      
    @endif  

    <div class="partedos an">
        <div class="titleseccionseis">
            <h1>Nuestro Perspectiva</h1>
            <h2>Visión</h2>
        </div>
        @if(have_rows('seccion_ocho', 44))
        {{-- loop through the rows of data --}}
        @while (have_rows('seccion_ocho', 44))@php(the_row())
            <div class="parteseis seccionseis">
                <p class="contenidoseis">{{ get_sub_field('contenidoArriba') }}</p>
                <div class="contenedorimg is-marginless columns is-multiline">
                    <div class="central column ">
                        <div class="imagenprimera" style="background:url('{{ get_sub_field('imagenCentral') }}');background-size: cover;
                        height: 100%;"></div>
                    </div>
                </div>
                <p class="contenidoseis">{{ get_sub_field('contenidoAbajo') }}</p>
            </div>        
        </div>
        <div class="tresimg is-marginless columns is-multiline an">
            <div class="column is-4 is-paddingless">
                <div class="imagenprimera " style="background:url('{{ get_sub_field('primeraImagenAbajo') }}');background-size: cover;
                height: 300px;"></div>
            </div>
            <div class="column is-4 is-paddingless">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('segundaImagenAbajo') }}');background-size: cover;
                height: 300px;"></div>
            </div>
            <div class="column is-4 is-paddingless">
                <div class="imagenprimera" style="background:url('{{ get_sub_field('terceraImagenAbajo') }}');background-size: cover;
                height: 300px; "></div>
            </div>
        </div>       
        @endwhile
        @else      
        @endif          
 
@endsection
