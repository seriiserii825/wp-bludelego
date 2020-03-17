$(function () {
  let closeMenu = function () {
    $('#js-show-menu').on('click', function () {
      $('#js-main-menu__wrap').toggleClass('active');

      $(this).find('.sandwitch-wrap').toggleClass('sandwitch--active');
      $(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
    });
  };
  closeMenu();

  let showRiservataPopup = function () {
    $('#js-show-riservata-popup').on('click', function (e) {
      e.preventDefault();

      if($(window).width > 1260){
        $('#js-riservata-popup').show();

        setTimeout(function () {
          $('#js-riservata-popup').addClass('active');
        }, 400);
      }else{
      	$('#js-main-menu__wrap').removeClass('active');
      	$('#js-sandwitch-wrap').removeClass('sandwitch--active');
        $('#js-riservata-popup').show();

        setTimeout(function () {
          $('#js-riservata-popup').addClass('active');
        }, 400);
      }

    });

    $('#js-riservata-popup__close').on('click', function (e) {
      e.preventDefault();

      $('#js-riservata-popup').hide();
      $('#js-riservata-popup').removeClass('active');
    });
  };
  showRiservataPopup();

});



