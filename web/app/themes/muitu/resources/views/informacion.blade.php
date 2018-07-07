{{--
  Template Name: Pagina de informacion
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <div class="posts postscomu columns">     
      <div class="containerposts condiciones columns is-multiline">
    @include('partials.content-single-'.get_post_type())
      </div>
  </div>
  @endwhile
@endsection