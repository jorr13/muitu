@extends('layouts.app')
@section('content')
  <!--slider-->
  <div class="slideshow animated zoomIn">
		<div class="tituloslider">
			<h1> Productos recientes</h1>
    </div>
		<ul class="slider">
         @foreach($products_loop as $products)
            <li >
                <div class="sliderimagen ">
                    <!--Esto es el thumb-->
                    {!! $products['thumbnail'] !!}
                </div>
                <section class="caption ">
                    <h1>{!! $products['title'] !!}</h1>
                    <p>{!! $products['excerpt'] !!}</p>
                    <a href=" {!! $products['link'] !!}" class="botonfooter">Ver Producto</a>
                </section>
            </li>
        @endforeach
    </ul>
		<div class="right">
			<span class="fa fa-chevron-right"><img src="/app/uploads/2018/06/rigth.png" alt=""></span>
        </div>
    
		<div class="left">
			<span class="fa fa-chevron-left"><img src="/app/uploads/2018/06/left.png" alt=""></span>
		</div>
	</div>
  <!--quienes somos-->
  @if(have_rows('seccionuno', 2))
    {{-- loop through the rows of data --}}
    @while (have_rows('seccionuno', 2))@php(the_row())
    <div class="seccionuno">
      <div class="contenedorseccionuno contenedorseccionuno is-marginless columns is-multiline">
      	<div class="imgseccion column is-5 an" style="background:url('{{ get_sub_field('img') }}'); background-size: cover; height: 100%; "></div>	
	      	<div class="conten column is-5 an">
	      	  <h1 class="titleseccionuno">{{ get_sub_field('titulo') }}</h1>
            <p class="contenidouno">{{ get_sub_field('descripcion') }}</p>
            @php ( $link = get_sub_field('boton'))
             @if($link) 
             <a class="botonseccion2" href="/quienes-somos" target="{{$link['target']}}">{{$link['title']}}</a>
            @endif
	    	  </div>	
      </div>
    </div>
    @endwhile
  @else      
  @endif
  <!--nuestros productos-->
  <!--HAMACAS-->
  
      <h1 class="titlenuevo">Lo nuevo de la tienda</h1>

  <div class="posts newproduct an"> 
      <div class="containerposts containerselec columns is-multiline">
          <a href="#" id="clickbolsos" class="column is-3">BOLSOS</a>
          <a href="#" id="clickpulceras" class="column is-3">PULCERAS</a>
          <a href="#" id="clickhamacas" class="column is-3">HAMACAS</a>
          <a href="#" id="clickcinturnes" class="column is-3">CINTURONES</a>

        </div> 
    <div class="containerposts containerproduct hamacas columns is-multiline" id="hamacas" style="display:none">
      @foreach(array_slice($category_loop,0,4) as $category)

      <div class="column productitem is-3">
      <a href=" {!! $category['link'] !!}">
        <div class="imgprod">
          <!--Esto es el thumb-->
          {!! $category['thumbnail'] !!}
        </div>
          <div class="contenidoproduct">
            <h1>{!! $category['title'] !!}</h1>
          </div>
          <a href=" {!! $category['link'] !!}" class="botonproducto">Ver Producto</a>
        </a>
        </div>
      @endforeach
    </div>

  <!--FIN HAMACAS-->
   <!--BOLSOS-->
   
      <div class="containerposts containerproduct bolsos columns is-multiline" id="bolsos">
        @foreach(array_slice($bolsos_loop,0,4) as $bolsos)
        <div class="column productitem is-3">
          <a href=" {!! $bolsos['link'] !!}">
            <div class="imgprod">
              <!--Esto es el thumb-->
              {!! $bolsos['thumbnail'] !!}
            </div>
              <div class="contenidoproduct">
                <h1>{!! $bolsos['title'] !!}</h1>
            </div>
            <a href=" {!! $bolsos['link'] !!}" class="botonproducto">Ver Producto</a>
          </a>
          </div>
        @endforeach
      </div>

   <!--FIN BOLSOS-->
      <!--CINTURONES-->
    
      <div class="containerposts containerproduct cinturones columns is-multiline" id="cinturones"  style="display:none">
        @foreach(array_slice($cinturones_loop,0,4) as $cinturones)
        <div class="column productitem is-3">
            <a href=" {!! $cinturones['link'] !!}">
          <div class="imgprod">
            <!--Esto es el thumb-->
            {!! $cinturones['thumbnail'] !!}
          </div>
            <div class="contenidoproduct">
              <h1>{!! $cinturones['title'] !!}</h1>
            </div>
            <a href=" {!! $cinturones['link'] !!}" class="botonproducto">Ver Producto</a>
            </a>
          </div>
        @endforeach
      </div>

   <!--FIN CINTURON-->
    <!--PULCERAS-->  
      <div class="containerposts containerproduct pulceras columns is-multiline" id="pulceras"  style="display:none">
        @foreach(array_slice($pulceras_loop,0,4) as $pulceras)
        <div class="column productitem is-3">
            <a href=" {!! $pulceras['link'] !!}">
          <div class="imgprod">
            <!--Esto es el thumb-->
            {!! $pulceras['thumbnail'] !!}
          </div>
            <div class="contenidoproduct">
              <h1>{!! $pulceras['title'] !!}</h1>
            </div>
            <a href=" {!! $pulceras['link'] !!}" class="botonproducto">Ver Producto</a>
            </a>
          </div>
        @endforeach
      </div>
     <div class="containerposts column botoncontainer ir-a-tienda">
      <a class="botonposts botonfooter" href="/shop">Ir a la tienda</a>
     </div>
     
     
  </div>
  <!--FIN PULCERAS-->
  <!--piezas unicas-->
  @if(have_rows('secciondos', 2))
    {{-- loop through the rows of data --}}
    @while (have_rows('secciondos', 2))@php(the_row())
      <div class="secciondos ">
        <div class="contenedorsecciondos is-marginless columns is-multiline">
            <div class="column is-1" style="
            height: 100%;"></div>
            <div class="contendos column is-5 an">
                <h1 class="titlesecciondos an">{{ get_sub_field('titulo') }}</h1>
              <p class="contenidodos an">{{ get_sub_field('descripcion') }}</p>
              @php ( $link = get_sub_field('boton'))
              @if($link)
              <a class="botonseccion" href="{{$link['url']}}" target="{{$link['target']}}">{{$link['title']}}</a>
              @endif
          </div>
        <div class="imgseccion column is-5 an" style="position: absolute;right: 0;
        background-size: cover !important; background-size: cover !important; height: 100%; background:url('{{ get_sub_field('img') }}')"></div>
        </div>
      </div>
    @endwhile
  @else      
  @endif

  <!--articulos recientes-->

  <div class="posts columns">     
    <div class="containerposts columns is-multiline">
        <h1 class="titlearriba an">Articulos recientes</h1><br>
        <p class="conteposts an">Conoce sobre las comunidades que le han dado vida a cada producto que distribuimos, su cultura, su lenguaje y su amor</p><br>
      @foreach(array_slice($posts_loop,0,4) as $posts)
      <div class="containerpost column is-9 an">
        <div class="img-container">
        <!--Esto es el thumb-->
        {!! $posts['thumbnail'] !!}
        </div>
        <a href=" {!! $posts['link'] !!}" class="link posts-link">
        <div class="contenido">
          <h4 class="titleposts posts-title">
          <!--Esto es el titulo-->
          {!! $posts['title'] !!}</h4>
          <p class="excerpt posts-excerpt">
          <!--esto es el excerpt-->
          {!! $posts['excerpt'] !!}</p>
        </div>
        </a>
      </div>   
      @endforeach
      <div class="column is-12 botoncontainer">
        <a class="botonposts botonfooter" href="/blog/">Ir a Blog</a>
      </div>
    </div>
    </div>

@endsection
