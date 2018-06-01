<!-- JavaScript dependencies --> 
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
      <!-- Script: Smooth scrolling between anchors in a same page --> 
      <script src="<?php bloginfo('template_directory'); ?>/js/smooth-scroll.js"></script> 
      <script src="<?php bloginfo('template_directory'); ?>/js/animate.js"></script> 
      <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
      <script>
        $('.slick-slider').slick({
          dots: false,
          arrows: false,
          infinite: true,
          autoplay: true,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 1,
          responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          ]
        });
      </script>