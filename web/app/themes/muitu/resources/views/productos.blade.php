{{--
  Template Name: Pagina de productos
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

    <!--Esta pagina es de productos-->
    <div class="productos columns">

        @foreach($productos_loop as $productos)
        <div class="column is-3">
          <div class="img-container">
          <!--Esto es el thumb-->
          {!! $productos['thumbnail'] !!}
          </div>
          <div class="contenido">
            <h4 class="title productos-title">
            <!--Esto es el titulo-->
            {!! $productos['title'] !!}</h4>
            <p class="excerpt productos-excerpt">
            <!--esto es el excerpt-->
            {!! $productos['excerpt'] !!}</p>
            <a href=" {!! $productos['link'] !!}" class="link productos-link">Ver mas</a>
          </div>    
        </div>
        @endforeach
      </div>
  @endwhile
@endsection
