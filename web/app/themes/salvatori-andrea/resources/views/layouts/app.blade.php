<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container is-paddingless column is-10 is-pulled-right" id="app" role="document" style="float:right">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
      </div>
      @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    </div>
  
  </body>
</html>
