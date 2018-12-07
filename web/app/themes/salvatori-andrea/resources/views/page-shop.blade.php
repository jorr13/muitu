{{--
  Template Name: Shop Template
--}}

@extends('layouts.app')

@section('content')
 
    @include('partials.page-header')
    
    <div class="posts columns">  
        <div class="containerposts format-standard columns is-multiline">  
        <h1 class='titletienda'>Nuestros Productos</h1>
        <div class="contenedor-mi-filtro column is-12 is-multiline">
            <div class="contenedor-papa-mi-filtro columns is-multiline">
                    @foreach($category_loop as $category)
                    <div class="contenedor-padre-filtro column is-4-desktop is-6-tablet is-12-mobile" id="item-{{$category['id']}}">
                      <div class="contenedor-titulos-tarjeta-nuestros-servicios">
                        <h4>{{$category['title']}}</h4><br>
                      </div>
                      <div class="contenedor-select-categori">
                        <ul class="contenedorsubcategori">
                            @php 
                            $cats = get_terms(array( 'taxonomy' => 'product_cat', 'parent' =>  $category['id']))
                            @endphp
                            @foreach($cats as $cat)
                            <li class="item"><a href="{{ get_term_link($cat) }}">{!! $cat->name !!}</a></li>
                            @endforeach
                            {{wp_reset_query()}}
                        </ul>
                      </div>
                   </div>
                  @endforeach

            </div>
            @while(have_posts()) @php the_post() @endphp
        </div>
          @include('partials.content-page')
        </div>
    </div>
    
  @endwhile
@endsection
