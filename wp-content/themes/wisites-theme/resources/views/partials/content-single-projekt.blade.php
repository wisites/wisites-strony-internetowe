<section class="project-header" style="background-image: url(<?php echo get_the_post_thumbnail_url($post) ?>);">
  <div class="overlay"></div>
  <h1>{!! get_the_title() !!}</h1>
  <p>Projekt</p>
</section>
<article @php post_class() @endphp>
  <div class="entry-content container">
    <div class="first-row">
    <section class="gallery">
        <div class="owl-carousel gallery-project">
				<?php if( have_rows('galeria') ):
					while ( have_rows('galeria') ) : the_row();
						$image = get_sub_field('obraz');
					?>
					<div class="item"><a class="ari-fancybox" rel='gallery' href="<?php echo $image['url'];?>"><figure><img alt="<?php echo $image['alt'] ?>" src="<?php echo $image['url'];?>" data-no-lazy="1"/></figure></a></div>
					<?php
					endwhile;
					else:
					endif;
				?>
				</div>
        <ul id="gallery-thumbnails">
        <?php if( have_rows('galeria') ):
					while ( have_rows('galeria') ) : the_row();
						$image = get_sub_field('obraz');
					?>
					  <li class="owl-dot"><img src="<?php echo $image['url'];?>" data-no-lazy="1"/></li>
					<?php
					endwhile;
					else:
					endif;
				?>
        </ul>
    </section>
    <section class="what-we-do">
      <h2>Co zostało wykonane?</h2>
        <?php
$colors = get_field('wykonanie');
if( $colors ): ?>
<ul>
    <?php foreach( $colors as $color ): ?>
        <li><?php echo $color; ?></li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>
    </section>
    </div>
    <section class="content">
    <h2>Opis projektu</h2>
    @php the_content() @endphp
    <a class="main-btn" href="<?php the_field('klient');?>" target="_blank">Zobacz stronę</a>
    </section>
  </div>
</article>
<script>
(function($){
      $(document).ready(function() {
        var owl;  
        owl = $('.gallery-project').owlCarousel({
            slideSpeed :1000,
            items: 1,
            dots: true,
            dotsContainer: '#gallery-thumbnails',
            nav: false
        });
        $('#gallery-thumbnails').on('click', 'li', function(e) {
          owl.trigger('to.owl.carousel', [$(this).index(), 300]);
        });
      });
})(jQuery);
</script>