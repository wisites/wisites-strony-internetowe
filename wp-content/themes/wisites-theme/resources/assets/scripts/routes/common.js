export default {
  init() {
    // JavaScript to be fired on all pages
    var scroll;
    var header = $('.banner');
    var contact = $('.contact-container');
    if($( window ).width() > 200) { 
        $(window).scroll(function() {    
            scroll = $(window).scrollTop();
            if (scroll >= 10) {
              header.addClass('sticky-banner');
              contact.addClass('sticky-contact');
            } else {
              contact.removeClass('sticky-contact');
                setTimeout(function(){
                  header.removeClass('sticky-banner');
                }, 100);
            }
        });
    } else;
    $('.offer-item').click(function() {
      $(this).toggleClass('active');
    });
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

      $('.g-recaptcha').attr('data-theme', 'dark');
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
