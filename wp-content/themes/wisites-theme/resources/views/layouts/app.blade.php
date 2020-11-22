<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script src="https://kit.fontawesome.com/ee00b15e31.js" crossorigin="anonymous"></script>
    <script src="/wp-content/uploads/owl-carousel/owl.carousel.min.js"></script>
  </body>
</html>
