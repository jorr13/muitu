@extends('layouts.app')
@section('content')
  <!--slider-->
  <div class="slideshow">
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

  <div class="posts newproduct an" id="app"> 
    <div class="containerposts containerselec columns is-multiline" v-for="(item, index) in lists">
      <a href="#" v-on:click="obtenerProducto(item.id)" v-bind:data-id="item.id" ref="el" class="column is-3">
        {{ item.name }}
      </a>
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
    

    <div class='carousel carousel-animated carousel-animate-slide is-5'>
      <div class='carousel-container'>
        <div class='carousel-item is-active'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
        <div class='carousel-item'>
          <figure class="image is-2by1"><img src="https://bulma.io/images/placeholders/640x320.png"></figure>
        </div>
      </div>
      <div class="carousel-navigation is-centered">
        <div class="carousel-nav-left">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
          <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
      </div>
    </div>

@endsection

