

  <div id="page-loader" class="preloader-muitu"></div>
  <header class="banner">
    <a href="#" class="botonmenu logomenuprimario otraclase" style="z-index: 999999999 !important;"><img src="/app/uploads/2018/06/hamburguesa1.png" alt="" class="botoninterno"></a>   
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
        <a href="https://www.instagram.com/muituhandmade/" target="_blank"><img src="{{ home_url('/app/uploads/2018/06/instagram-logo.png') }}" class="logosheader" alt=""></a> 
        <br><a href="https://www.facebook.com/Muit%C3%BA-238590030225809/" target="_blank"><img src="{{ home_url('/app/uploads/2018/06/facebook-logo.png') }}" class="logosheader" alt=""></a>
      </div>
      </div>
  
    <div class="column is-10 is-pulled-right menusecundario has-text-right">
    <a href="http://www.muituhandmade.com/"><img class="logo-menusecundario" src="{{ home_url('/app/uploads/2018/06/Logo-02.png') }}" alt=""></a>
      <a href="<?php echo wc_get_cart_url(); ?>" class="link">Carrito        
        <span class="contador-carrito">        
          <?php echo sprintf ( WC()->cart->get_cart_contents_count() ); ?>
        </span>
      </a>

      
      @php
      global $current_user;
      get_currentuserinfo();
      @endphp
      @if ('' == $current_user->ID) 
      <a href="{{ home_url('/') }}my-account/" class="link">Iniciar Sesi&oacute;n</a>
      @else 
    <a href="{{ home_url('/') }}my-account/" class="link">{{ $current_user->display_name }}</a> <a href="{{ home_url('/') }}my-account/customer-logout" class="link-cerrar">Cerrar Sesi&oacute;n</a>
      @endif
      <div class="line"></div>
    </div>
    

  </header>
  