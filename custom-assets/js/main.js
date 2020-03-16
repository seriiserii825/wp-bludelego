$(function () {
  let closeMenu = function () {
    $('#js-show-menu').on('click', function () {
      $('#js-main-menu__wrap').toggleClass('active');

      $(this).find('.sandwitch-wrap').toggleClass('sandwitch--active');
      $(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
    });
  };
  closeMenu();

});



