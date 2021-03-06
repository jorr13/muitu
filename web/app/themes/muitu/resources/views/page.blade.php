@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')

  <div class="posts columns">  
      <div class="containerposts format-standard columns is-multiline">   
        @include('partials.content-page')
      </div>
  </div>
  
  @endwhile
@endsection

