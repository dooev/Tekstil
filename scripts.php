
<!-- myJs START -->
<script src="js/scripts.min.js"></script>
<!-- Bootstrap.js START -->
<script src="libs/js/bootstrap.min.js"></script>
<!-- fotorama.js START -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<!-- slick.js START -->
<script src="slick/slick.min.js"></script>
<script>
$('.sl').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
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
<!-- maskedinput.js animate START -->
<script src="libs/js/jquery.maskedinput.min.js"></script>
<script>
  jQuery(function($) {

  $.mask.definitions['~']='[+-]';

  $('.phone').mask('+9 (999) 999-9999');

  });
</script>
<!-- WOW.js animate START -->
<script src="libs/js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<script src="libs/js/popup_img.js"></script>
