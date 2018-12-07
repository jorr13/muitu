@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  @include('partials.page-header')

  <div class="posts columns">  
      <div class="containerposts format-standard columns is-multiline">   
        @if( is_woocommerce())
        <h1 class='titletienda'>Nuestros Productos</h1>
        <div class="contenedor-mi-filtro column is-12 is-multiline">
            <div class="contenedor-papa-mi-filtro columns is-multiline">
                    @foreach($category_loop as $category)
                    <div class="contenedor-padre-filtro column is-4-desktop is-6-tablet is-12-mobile" id="item-{{$category['id']}}">
                      <div class="contenedor-titulos-tarjeta-nuestros-servicios">
                        <h4>{{$category['title']}}</h4><br>
                      </div>
                      <div class="contenedor-select-categori" id="{{$category['title']}}">
                        <ul class="contenedorsubcategori" id="{{$category['title']}}">
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
            <div class="categoriafiltrada">
              <p style="padding-bottom: 13px;">Categoria filtrada: <strong>{{App::title()}}</strong> </p>
              <a href="/shop/" class='verproductoshop factura' style="position: relative !important; width: 50% !important; z-index:1; !important">Volver a la tienda</a>
            </div>
            
        </div>
        @endif
        @include('partials.content-page')
      </div>
  </div>
  
  @endwhile
@endsection

