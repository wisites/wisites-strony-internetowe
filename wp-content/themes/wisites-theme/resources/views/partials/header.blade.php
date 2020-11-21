<header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
      <figure class="white-logo">
        <img class="img-responsive" alt="Wisites Strony Internetowe" src="/wp-content/uploads/2020/11/wisites-strony-internetowe-logo-min-white.svg" />
      </figure>
      <figure class="dark-logo">
        <img class="img-responsive" alt="Wisites Strony Internetowe" src="/wp-content/uploads/2020/11/logo-wisites-min-svg-1.svg" />
      </figure>
    </a>
    <div class="menu-btn">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="nav-primary">
      <div class="before-nav">
        <ul>
          <li><a href="tel:+48502172553"><i class="fas fa-mobile-alt"></i><span>+48 502 172 553</span></a></li>
          <li><a href="mailto:kontakt@wisites.pl"><i class="far fa-envelope"></i><span>kontakt@wisites.pl</span></a></li>
        </ul>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
