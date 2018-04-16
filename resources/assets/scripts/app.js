import Swiper from 'swiper';

  const slideShows = [...document.querySelectorAll('.swiper-container')];

  slideShows.forEach(slideShow => {

    var mySwiper = new Swiper (slideShow, {
      // Optional parameters
      direction: 'horizontal',
      loop: true,
      slidesPerView: parseInt(slideShow.dataset.perView),
      spaceBetween: 10,
      effect: 'slide',

      autoplay: {
          delay: parseInt(slideShow.dataset.delay),
          disableOnInteraction: true,
        },

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },

      fadeEffect: {
        crossFade: true,
      },

      mousewheel: true,

      mousewheel: {
        forceToAxis: true,
        sensitivity: 1,
        invert: true,
      }
    });
  });

  $('#roles_modal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal

    var name = button.data('name')
    var image = button.data('image')
    var icon1 = button.data('icon1')
    var icon2 = button.data('icon2')
    var icon3 = button.data('icon3')
    var statement1 = button.data('statement1')
    var statement2 = button.data('statement2')
    var statement3 = button.data('statement3')

    var modal = $(this)

    modal.find('.pop_up_image').attr('src', image)
    modal.find('.pop_up_icon_1').attr('src', icon1)
    modal.find('.pop_up_icon_2').attr('src', icon2)
    modal.find('.pop_up_icon_3').attr('src', icon3)
    modal.find('.pop_up_name').text(name)
    modal.find('.pop_up_statement_1').text(statement1);
    modal.find('.pop_up_statement_2').text(statement2)
    modal.find('.pop_up_statement_3').text(statement3)
  });

  function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    // Windows Phone must come first because its UA also contains "Android"
    if (/windows phone/i.test(userAgent)) {
      return "Windows Phone";
    }

    if (/android/i.test(userAgent)) {
      return "Android";
    }

    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
      return "iOS";
    }

    return "unknown";
  }

  function DetectAndServe(){

    const get_app = document.querySelectorAll('.get_app');

    if (getMobileOperatingSystem() == "Android") {
      get_app.href = "https://play.google.com/store/apps/details?id=com.iplay";
    }
    if (getMobileOperatingSystem() == "iOS") {
      get_app.href = "http://www.IOSexample.com";
    }
    if (getMobileOperatingSystem() == "Windows Phone") {
      get_app.href = "http://www.WindowsPhoneexample.com";
    }
    if (getMobileOperatingSystem() == "unknown") {
      get_app.href = "http://www.NowherLandexample.com";}
    };
