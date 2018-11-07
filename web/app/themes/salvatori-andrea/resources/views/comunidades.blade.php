{{--
  Template Name: Pagina de Comunidades
--}}

@extends('layouts.app')


@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    <div class="posts columns ">     
      <div class="containerposts columns is-multiline">
        <h1 class="titlearriba an">Nuestros Artesanos</h1><br>
        @foreach($comunidades_loop as $comunidades)
          <div class="containerpost column is-9 an">
            <div class="img-container">
            <!--Esto es el thumb-->
            {!! $comunidades['thumbnail'] !!}
            </div>
            
            <a href=" {!! $comunidades['link'] !!}" class="link posts-link">
              <div class="contenido">
                <h4 class="titleposts posts-title">
                <!--Esto es el titulo-->
                {!! $comunidades['title'] !!}</h4>
                <p class="excerpt posts-excerpt">
                <!--esto es el excerpt-->
                {!! $comunidades['excerpt'] !!}</p>
              </div>
            </a>
          </div>   
        @endforeach
      </div>
    </div>
  @endwhile
@endsection