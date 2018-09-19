// // slick.js START 
// $(document).ready(function() {
// $('.sl').slick();
// });
var navItem = document.querySelectorAll('.nav-item'),
    head = document.querySelector('head');
  // navItem.addEventListener('click', () => {
  //   if (head) {}
  // });
    console.log("head", head);

//  <!-- fotorama.js START -->

$(document).ready(function() {
  var $fotoramaDiv = jQuery('.fotorama').fotorama();

  // 2. Get the API object.
  var fotorama = $fotoramaDiv.data('fotorama');


  if (jQuery('.fotorama__arr').length > 0) {
    jQuery('.fotorama__arr').remove();
  }
  jQuery("<div class='fotorama__arr fotorama__arr--prev'></div>").insertBefore(".fotorama__nav-wrap");
  jQuery("<div class='fotorama__arr fotorama__arr--next'></div>").insertAfter(".fotorama__nav-wrap");



  jQuery('.fotorama__arr--prev').click(function() {
    fotorama.show('<');
  });
  jQuery('.fotorama__arr--next').click(function() {
    fotorama.show('>');
  });
});


//  <!-- fotorama.js END -->


//  <!-- overlay START -->
$(document).ready(function() {

    /*Навигация - плавный скроллинг к якорю.*/
    $(".slowly").on("click", function(event) {
      /*Отменяем стандартную обработку нажатия по ссылке.*/
      event.preventDefault();
      /*Забираем идентификатор блока с атрибута href.*/
      var id = $(this).attr('href'),
        /*Узнаём высоту от начала страницы до блока, на который ссылается якорь.*/
        top = $(id).offset().top;
      /*Анимируем переход на расстояние - top за 1000ms.*/
      $('body,html').animate({ scrollTop: top }, 600);
    });

});

$(document).ready(function () {
    $(function(){
    $("#phone_header").mask("+7 (999) 999-99-99");
    $("#phone_modal").mask("+7 (999) 999-99-99");
    $("#phone_more1").mask("+7 (999) 999-99-99");
    $("#phone_more2").mask("+7 (999) 999-99-99");
    $("#phone_more3").mask("+7 (999) 999-99-99");
    $("#phone_more4").mask("+7 (999) 999-99-99");
  });
      });