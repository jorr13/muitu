{{--
  Template Name: Pagina de blog
--}}

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')


    <div class="posts columns">     
    <div class="containerposts columns is-multiline">
        <h1 class="titlearriba animated fadeInUp">Articulos recientes</h1><br>
        <p class="conteposts animated fadeInUp">Conoce sobre las comunidades que le han dado vida a cada producto que distribuimos, su cultura, su lenguaje y su amor</p><br>
         
    <!--Esta pagina es de productos-->
    @foreach($posts_loop as $posts)
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
  </div>
</div>
  @endwhile
@endsection
