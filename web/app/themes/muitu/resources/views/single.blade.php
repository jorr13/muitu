@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  
  <div class="posts columns">     
      <div class="containerposts columns is-multiline">
    @include('partials.content-single-'.get_post_type())
      </div>
  </div>
  @endwhile
@endsection
