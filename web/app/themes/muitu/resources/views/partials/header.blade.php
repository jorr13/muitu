<header class="banner">
    <a href="#" class="botonmenu logomenuprimario otraclase" style="z-index: 999999999 !important;"><img src="/app/uploads/2018/06/hamburguesa.png" alt="" class="botoninterno"></a>   
    <div class="column is-2 is-paddingless  menuprimario">
       <div class="imagen"><a class="brand" href="{{ home_url('/') }}"><img src="{{ home_url('/app/uploads/2018/06/Logo-02.png') }}" style" height: auto; max-width: 100%; opacity: 0.7;" alt=""></a></div>
       <div class="icomenu columns">
         <div class="column is-5  is-paddingless"> <a href="{{ home_url('/') }}"><img src="{{ home_url('/app/uploads/2018/06/home.png') }}" class="logomenuprimario"></a></div>
         <div class="column is-5  is-paddingless"><a href="/shop/"><img src="{{ home_url('/app/uploads/2018/06/tienda1.png') }}" class="logomenuprimario"></a></div>
       </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation']) !!}
      @endif
      <div class="imgheader">
        <a href="https://www.instagram.com/muituhandmade/"><img src="{{ home_url('/app/uploads/2018/06/instagram-logo.png') }}" class="logosheader" alt=""></a> 
        <br><a href="https://www.facebook.com/Muit%C3%BA-238590030225809/"><img src="{{ home_url('/app/uploads/2018/06/facebook-logo.png') }}" class="logosheader" alt=""></a>
      
      </div>
      </div>

    <div class="column is-10 is-pulled-right menusecundario has-text-right">
    <a href="http://www.muituhandmade.com/"><img class="logo-menusecundario" src="http://www.muituhandmade.com/app/uploads/2018/06/Muitu-logo-horizontal.png" alt=""></a>
      <a href="/cart/" class="link">Carrito</a>
      <a href="#" class="link">Iniciar Sesion</a>

    </div>
</header>
