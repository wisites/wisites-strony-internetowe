export default {
  init() {
    // JavaScript to be fired on all pages
    var scroll;
    var header = $('.banner');
    if($( window ).width() > 200) { 
        $(window).scroll(function() {    
            scroll = $(window).scrollTop();
            if (scroll >= 10) {
              header.addClass('sticky-banner');
              /*$('section').each(function(i) {
                if ($(this).position().top <= scroll + 150) {
                    $('nav .menu-item.hover-active').removeClass('hover-active');
                    $('nav .menu-item').eq(i).addClass('hover-active');
                }
              });*/
            } else {
                setTimeout(function(){
                  header.removeClass('sticky-banner');
                }, 100);
               // $('nav .menu-item.hover-active').removeClass('hover-active');
            }
        });
    } else;
    

    $('.offer-item').click(function() {
      $(this).toggleClass('active');
    });

    (function($){
      $(document).ready(function() {
          $('.projects-container').owlCarousel({
            slideSpeed :1000,
            items: 1,
            dots: false,
            nav: true,
            singleItem:true,
            navText : ['<img src="/wp-content/uploads/2020/11/prev-btn.svg"/>', '<img src="/wp-content/uploads/2020/11/next-btn.svg"/>'],
        });
        
      });
      })(jQuery);

      $(document).on('click', '.bart', function() {
        $('.ol').each( function(){
          $(this).removeClass('loc-active');
        });
        $('.bart').each( function(){
          $(this).toggleClass('loc-active');
        });
      });
      $(document).on('click', '.ol', function() {
        $('.bart').each( function(){
          $(this).removeClass('loc-active');
        });
        $('.ol').each( function(){
          $(this).toggleClass('loc-active');
        });
      });

      $('.menu-btn').click(function() {
        $('.banner').toggleClass('active');
      });

      $('a[href="#darmowa-wycena"]').click(function(){
        $('#darmowa-wycena').addClass('active');
      }); 
      $('#close-btn').click(function(){
        $('#darmowa-wycena').removeClass('active');
      });

      (function($){
        if($(window).width() > 768){
            $(window).scroll(function() {
                var windscroll = $(window).scrollTop();
                if (windscroll >= 100) {
                      $('.nav-section').each(function(i) {
                          if ($(this).position().top <= windscroll + 150) {
                              $('.menu-item.current_page_item').removeClass('current_page_item');
                              $('.menu-item').eq(i).addClass('current_page_item');
                          }
                          else if (windscroll + $(window).height() > $(document).height() - 100) {
                            $('.menu-item.current_page_item').removeClass('current_page_item');
                            $('.menu-item:last-child').addClass('current_page_item');
                          }
                      });
                    } else {
                        $('.menu-item.current_page_item').removeClass('current_page_item');
                        $('.menu-item:first').addClass('current_page_item');
                    }
            }).scroll();
          }
      })( jQuery );

      ( function( $ ) {
        $('.g-recaptcha').attr('data-theme', 'dark');
    })(jQuery);
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
