<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    <div class="wrap container is-paddingless column is-10 is-pulled-right" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
      @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    </div>
  
  </body>
</html>
