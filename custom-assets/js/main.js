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

  let mail = function () {

    if ($('#js-form').length > 0) {

      $('#js-form').validate({
        rules: {
          email: {
            required: true,
            email: true
          },
          name: {
            required: true,
          },
          phone: {
            required: true,
          },
          messaggio: {
            required: true,
          },
          check: {
            required: true
          }
        },
        messages: {
          email: {
            required: "Il campo è obbligatorio",
            email: "Inserisci il campo email"
          },
          name: {
            required: "Il campo è obbligatorio",
          },
          phone: {
            required: "Il campo è obbligatorio",
          },
          messaggio: {
            required: "Il campo è obbligatorio",
          },
          check: {
            required: "Il campo è obbligatorio"
          }
        },
        submitHandler: function (form) {
          return false;
        }
      });
    }
  };
  mail();

  $('.form-submit-btn').click(function () {
    if ($("#js-form").valid()) {
      let nome = $('input[name="name"]').val();
      let email = $('input[name="email"]').val();
      let oggetto = $('input[name="oggetto"]').val();
      let messaggio = $('textarea[name="messaggio"]').val();

      $.post("https://bludelego.it/mail.php", {
        name: nome,
        email: email,
        oggetto: oggetto,
        messaggio: messaggio,
      })

      .done(function (data) {
        $('#submit-ajax').empty().html('Message was sent');
      });
    }
  });

  $('body.page-template-custom-front-page').ihavecookies({
  message: "Questo sito utilizza cookie, anche di terze parti, per garantirti una migliore esperienza di navigazione.\nChiudendo questo banner, scorrendo questa pagina o cliccando qualunque suo elemento acconsenti all'uso\ndel cookie. <",
    link:"/privacy/",
    moreInfoLabel: 'Maggiori informazioni',
    acceptBtnLabel: 'Ok',
    delay: 2000,
    expires: 30// 30 days
  });


  setTimeout(function () {
    let privacyLink = $('#gdpr-cookie-message').find('a');
    privacyLink.attr('target', '_blank')
  },3000);

  setTimeout(function () {
    $('#gdpr-cookie-advanced').remove();
  },2000);

});



