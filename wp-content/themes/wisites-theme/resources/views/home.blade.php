{{--
  Template Name: Home Template
--}}
@extends('layouts.app')

@section('content')
    <section id="home-header" class="nav-section">
      <h1 class="fade-in">Wisites <span>Strony Internetowe</span></h1>
      <p class="fade-in">Web Developer <br/> Freelancer</p>
      <a class="main-btn btn draw-border fade-in" href="#darmowa-wycena">Zapytaj o darmową wycenę</a>
  </section>
  <section id="o-mnie" class="nav-section">
  <div class="container">
      <h2 class="h-line">O mnie</h2>
      <div class="about-me">
        <div class="description">
        <h3 class="after-line">Kim jestem?</h3>
          <p class="p-big"><strong>Cześć! Jestem Kuba i zajmuję się tworzeniem stron internetowych oraz innych rozwiązań dla internetu.</strong></p>
          <p>Współpracuję z agencją interaktywną <a target="_blank" title="REDO Interactive Group" href="https://redo-interactive.com/">REDO Interactive Group</a> ,która pozwoliła mi na pracę przy wielu ciekawych projektach i na doskonalenie swoich umiejętności.<br>
          Obecnie tworzę własne projekty jako <strong>Wisites Strony Internetowe</strong>, które wykonuję od zera. W zależności od preferencji klienta i budżetu dostosowuję metodę realizacji projektu i funkcjonalności. Każdy projekt może być wykonany na gotowym motywie lub na moim autorskim rozwiązaniu oraz przy użyciu page buildera lub bez.</p>
          <p><strong>Masz pytania?</strong><br>Napisz do mnie, a postaram się wszystko wyjaśnić!</p>
          <a class="main-btn" title="Skontaktuj się ze mną" href="#kontakt">Napisz teraz</a>
        </div>
      </div>
    </div>
    <section class="technologies">
      <div class="container">
        <div class="description">
          <h3>Technologie</h3>
          <p>Tworząc strony internetowe wykorzystuję popularne techonologie oraz programy, a także popularny system zarządzania CMS WordPress.</p>
        </div>
        <ul class="tech-list">
          <li><figure><img src="/wp-content/uploads/2020/11/html.png" /></figure></li>
          <li><figure><img src="/wp-content/uploads/2020/11/css.png" /></figure></li>
          <li><figure><img src="/wp-content/uploads/2020/11/javascript.png" /></figure></li>
          <li><figure><img src="/wp-content/uploads/2020/11/php.png" /></figure></li>  
          <li class="git">git</li>
          <li><figure><img src="/wp-content/uploads/2020/11/wordpress.png" /></figure></li>
          <li class="mysql"><span class="my">My</span><span class="sql">SQL</span></li>
          <li><figure><img src="/wp-content/uploads/2020/11/jquery.png" /></figure></li>
        </ul>
      </div>
    </section>
    <div class="localization">
      <div class="container">
          <div class="loc-description after-line">
          <h3>Lokalizacja</h3>
          <p><strong>Współpraca</strong> ze mną odbywa się w sposób zdalny, więc możemy zacząć pracę nad projektem od razu. Jeśli zależy Ci na kontakcie bezpośrednim w celu ustaleniu szczegółów możemy się spotkać:</p>
          <ul>
            <li id="bart-li" class="loc-click bart"><strong>w Bartoszycach</strong></li>
            <li id="ol-li" class="loc-click ol"><strong>w Olsztynie</strong></li>
          </ul>
          </div>
          <div class="map">
            <img src="/wp-content/uploads/2020/11/wisites-strony-internetowe-bartoszyce-olsztyn.png" />
            <div class="loc-h">
              <h4 id="bart-h" class="bart">Bartoszyce</h4>
              <h4 id="ol-h" class="ol">Olsztyn</h4>
            </div>
            <img id="bart-img" class="map-pin bart" src="/wp-content/uploads/2020/11/lokalizacja-wisites.svg"/>
            <img id="ol-img" class="map-pin ol" src="/wp-content/uploads/2020/11/lokalizacja-wisites.svg"/>
          </div>
        </div>
        </div>
  </section>
  <section id="oferta" class="nav-section">
    <div class="container">
    <h2 class="h-line">Oferta</h2>
    <p>W mojej ofercie znajdą Państwo podstawowe usługi związane z tworzeniem i projektowaniem stron www. Pomagam również w zakresie pozycjonowania SEO i wszelkich napraw istniejących już stron internetowych, tworzeniu grafik i wiele innych.</p>
    <section class="offer">
      <div class="offer-item">
        <figure>
          <img src="/wp-content/uploads/2020/11/tworzenie-stron-internetowych-wisites.png" />
        </figure>
        <h3>Tworzenie stron internetowych</h3>
        <p>W mojej ofercie znajdą Państwo strony internetowe tworzone przy pomocy systemu zarządzania treścią WordPress. W zależności od Państwa preferencji i złożoności projektu odpowiednio dostosowuję system WordPress. Przy tworzeniu stron tworzę własne motywy i rozwiązania szytę na miarę potrzeb klienta. Projektując strony www staram się o jak najlepszą optymalizację stron oraz o to by strona była dobrze wyszukiwana w Google. Jeśli zainteresowała Państwa oferta zapraszam do zapytania o darmową wycenę - <a class="wycena-link" href="#darmowa-wycena">Darmowa Wycena</a></p>
        <a class="offer-more">Więcej</a>
      </div>
      <div class="offer-item">
      <figure>
          <img src="/wp-content/uploads/2020/11/pozycjonowanie-stron-internetowych-wisites.png" />
        </figure>
        <h3>Pozycjonowanie stron www (SEO)</h3>
        <p>Strona internetowa nie tylko musi wyglądać, by przyciągnąć uwagę klienta. Przede wszystkim strona internetowa musi być często wyszukiwana w sieci i zajmować wysoką pozycję w wyszukiwaniach Google. Tworząc stronę zadbam o to, by Państwa marka lub produkt, który chcą Państwo promować w sieci był poprawnie wyświetlany w wyszukiwarkach internetowych. </p>
        <a class="offer-more">Więcej</a>
      </div>
      <div class="offer-item">
      <figure>
          <img src="/wp-content/uploads/2020/11/tworzenie-grafik-logo-wisites.png" />
        </figure>
        <h3>Tworzenie grafik oraz logo</h3>
        <p>Na potrzeby klienta lub projektu strony tworzę własne grafiki, które nie tylko upiększają stronę, ale tworzą wizerunek firmy lub produktu. Pomagam także przy projektowaniu i tworzeniu firmowego logo lub logotypu danego projektu. </p>
        <a class="offer-more">Więcej</a>
      </div>
      <div class="offer-item">
      <figure>
          <img src="/wp-content/uploads/2020/11/naprawy-stron-internetowych-wisites.png" />
        </figure>
        <h3>Naprawy stron internetowych</h3>
        <p>Jeśli posiadają Państwo stronę, z której nie są Państwo zadowoleni - proszę zapytać o <a href="#darmowa-wycena">darmową wycenę</a>. Często przestarzałe strony nie działają poprawnie, są niefunkcjonalne i nieestetyczne. Pomagam w optymalizacji stron i odświeżaniu wyglądu stron, które dawno straciły datę ważności. Jeśli na Państwa stronie występuje błąd lub strona nie wyświetla się prawidłowo - na pewno coś poradzimy, wystarczy zgłosić usterkę na mail: <a href="mailto:kontakt@wisites.pl">kontakt@wisites.pl</a></p>
        <a class="offer-more">Więcej</a>
      </div>
      <div class="offer-item">
      <figure>
          <img src="/wp-content/uploads/2020/11/email-marketing-wisites.png" />
        </figure>
        <h3>Email Marketing</h3>
        <p>Przy tworzeniu strony internetowej możemy zadbać o informowanie Państwa klientów o najnowszych ofertach czy zmianach przy pomocy automatycznego systemu mailingowego. Ponadto wspomagam przy tworzeniu odpowiedniej treści mailingowej - odpowiednia struktura html, przygotowywanie grafik. </p>
        <a class="offer-more">Więcej</a>
      </div>
      <div class="offer-item">
      <figure>
          <img src="/wp-content/uploads/2020/11/przebudowa-strony-internetowej-wisites.png" />
        </figure>
        <h3>Przebudowa strony internetowej</h3>
        <p>Niektóre strony są przestarzałe oraz niefunkcjonalne - wtedy polecam gruntowną przebudowę strony. W zależności od preferencji klientów przebududowuję strukturę i wygląd strony zostawiając lub lekko zmieniając poprzednią treść strony. Przy przebudowie strony dbam aby odpowiednio zoptymalizować stronę i przygotować do poprawnego wyszukiwania w wyszukiwarkach internetowych.</p>
        <a class="offer-more">Więcej</a>
      </div>
      <!--<div class="offer-item">
      <figure>
          <img src="/wp-content/uploads/2020/11/social-media-marketing-wisites.png" />
        </figure>
        <h3>Social Media Marketing</h3>
        <p>Wspomagam w tworzeniu profilów w mediach społecznościowych bez których ciężko dzisiaj budować pozycję marki w sieci. Niektórzy nie mają czasu lub nie umieją tworzyć odpowiednich treści na mediach społecznościowych i dla takich osób jest ta oferta.</p>
        <a class="offer-more">Więcej</a>
      </div>-->
    </section>
    </div>
    <section class="offer-question">
      <div class="container">
        <h3>Jesteś zainteresowany ofertą?</h3>
        <p>Napisz o darmową wycenę!</p>
        <a class="main-btn" href="#darmowa-wycena">Darmowa Wycena</a>
      </div>
    </section>
  </section>
  <section id="projekty" class="nav-section">
    <div class="container">
      <h2 class="h-line">Projekty</h2>
      <div class="projects-container owl-carousel">
      <?php $args = array(
            'post_type' => 'projekt',
            'numberposts' => -1,
            'order' => 'ASC',
            'posts_per_page' => -1,
            'hide_empty'     => 1,
        );
        $query = new WP_Query( $args );
        $projekty = $query->posts;
        foreach($projekty as $projekt) :
        $featuredImage = get_the_post_thumbnail($projekt->ID, 'full');
        if(!empty($featuredImage)) : ?>
            <div class="item"> 
              <a href="<?php echo get_permalink($projekt->ID) ?>">
                  <?php echo $featuredImage;?>
                  <h3><?php echo $projekt->post_title ?></h3>
              </a>
            </div>
        <?php endif;
        endforeach; ?>
      </div>
    </div>
  </section>
  <section id="darmowa-wycena">
    <span id="close-btn"></span>
    <div class="container wycena-form">
      <h2>Darmowa Wycena</h2>
    <?php echo do_shortcode('[fluentform id="2"]'); ?>
    </div>
  </section>
@endsection
