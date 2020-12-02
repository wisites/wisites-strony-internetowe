<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
        <main class="main">
          @yield('content')
          <div class="contact-container">
            <div class="abs-container">
            <ul>
              <li><a href="https://facebook.com/wisites.strony.internetowe/"><i class="fab fa-facebook-messenger"></i><span>Messenger</span></a></li>
              <li><a href="tel:+48502172553"><i class="fas fa-mobile-alt"></i><span>+48 502 172 553</span></a></li>
              <li><a href="mailto:kontakt@wisites.pl"><i class="far fa-envelope"></i><span>kontakt@wisites.pl</span></a></li>
            </ul>
            </div>
          </div>
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <script async src="https://kit.fontawesome.com/ee00b15e31.js" crossorigin="anonymous"></script>
    <script src="/wp-content/uploads/owl-carousel/owl.carousel.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-168354860-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-168354860-1');
    </script>
  </body>
</html>
