<header class="banner">
   
    <div class="column is-2 is-paddingless  menuprimario">
       <div class="imagen"><a class="brand" href="{{ home_url('/') }}"><img src="{{ home_url('/app/uploads/2018/06/Logo-02.png') }}" style" height: auto; max-width: 100%; opacity: 0.7;" alt=""></a></div>
       <div class="icomenu columns">
         <div class="column is-4"> <a href="{{ home_url('/') }}"><img src="{{ home_url('/app/uploads/2018/06/home.png') }}" alt=""></a></div>
         <div class="column is-4"> <a href="#"><img src="{{ home_url('/app/uploads/2018/06/hamburguesa.png') }}" alt=""></a></div>
         <div class="column is-4"><a href="/shop/"><img src="{{ home_url('/app/uploads/2018/06/tienda.png') }}" alt=""></a></div>
       </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
      @endif
      <div class="imgheader">
        <img src="{{ home_url('/app/uploads/2018/06/instagram-logo.png') }}" class="logosheader" alt="">
        <br><img src="{{ home_url('/app/uploads/2018/06/facebook-logo.png') }}" class="logosheader" alt="">
      </div>
      </div>

    <div class="column is-10 is-pulled-right menusecundario has-text-right">
      <a href="/cart/" class="link">Carrito</a>
      <a href="#" class="link">Iniciar Sesion</a>

    </div>

 
</header>
