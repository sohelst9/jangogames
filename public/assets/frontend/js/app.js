
// ======================================
// topscroll
// ======================================

var myBtn = document.getElementById("scrollTop");
window.onscroll = function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    myBtn.style.opacity = "1";
    myBtn.style.transition = "0.3s";
    myBtn.style.transform = "scale(1)";

  } else {
    myBtn.style.opacity = "0";
    myBtn.style.transform = "scale(0)";
  }
}

function topScroll() {
  window.scrollTo({
    top: 0,
    right: 0,
    behavior: "smooth",
  })
}

// ====================
// GENRE BOX ACTIVATION
// ====================

$(document).ready(function () {
  $("#genreBx").click(function () {
    $("#genreItem").toggleClass("active");
    $("#genreIcon").toggleClass("fa-chevron-up");
  });
});


// ======================================
// GENREBOX ACCORDION ACTIVATION CODE
// ======================================

// ======================================
// SWIPER SLIDER ACTIVATION CODE
// ======================================
// ======================================
// TOOLTIP ACTIVATION CODE
// ======================================
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});


var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
});

// ================================
// SWIPER 4
// ================================

var swiper = new Swiper(".mySwiper4", {
  slidesPerGroup: 2,
  loop: true,
  loopFillGroupWithBlank: false,
  slidesPerView: 4,
  spaceBetween: 10,
  centeredSlides: true,
  freeMode: true,
  speed: 800,
  watchSlidesVisibility: true,
  grabCursor:true,
  mousewheel: {
    invert: true,
  },
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 1,
      spaceBetween: 0,
    },
    "@0.75": {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    "@1.00": {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    "@1.20": {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    "@1.50": {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    "@1.75": {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    "@2.00": {
      slidesPerView: 4,
      spaceBetween: 10,
    },
  },
});

// ================================
// SWIPER 3
// ================================

var myswiper3 = new Swiper(".mySwiper3", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  centeredSlides: true,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  loop: true,
  initialSlide: 1,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 30,
    modifier: 5,
    initialSlide: 5,
    slideShadows: true,
  },

});


// ====================================
// SWIPER SLIDER FOR RECOMMENTED GAMES
// ===================================

var swiper = new Swiper(".mySwiper", {

  spaceBetween: 10,
  slidesPerGroup: 7,
  loopFillGroupWithBlank: false,
  autoplay: true,
  speed: 1000,
  autoplayDisableOnInteraction: true,
  grabCursor: true,
  freeMode: true,
  loop: true,
  autoplay: true,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  // mousewheel: 
  // {
  // 	invert: true,
  // },
  autoplay: {
    delay: 10000,
  },

  // breakpoints: {
  //   "@0.00": {
  //     slidesPerView: 2,
  //     spaceBetween: 10,
  //   },
  //   "@0.75": {
  //     slidesPerView: 4,
  //     spaceBetween: 10,
  //   },
  //   "@1.00": {
  //     slidesPerView: 4,
  //     spaceBetween: 10,
  //   },
  //   "@1.20": {
  //     slidesPerView: 4,
  //     spaceBetween: 10,
  //   },
  //   "@1.50": {
  //     slidesPerView: 4,
  //     spaceBetween: 10,
  //   },
  //   "@1.75": {
  //     slidesPerView: 4,
  //     spaceBetween: 10,
  //   },
  //   "@2.00": {
  //     slidesPerView: 6,
  //     spaceBetween: 10,
  //   },
  //   "@2.10": {
  //     slidesPerView: 4,
  //     spaceBetween: 10,
  //   },
  // },
  breakpoints: {
    400: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    440: {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    540: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    1381: {
      slidesPerView: 5,
      spaceBetween: 10,
    },
    1900: {
      slidesPerView: 7,
      spaceBetween: 10,
    },
  },

});


var swiper = new Swiper(".mySwiper1", {

  slidesPerView: 5,
  spaceBetween: 30,
  slidesPerGroup: 2,
  loopFillGroupWithBlank: false,
  autoplay: true,
  speed: 800,
  autoplayDisableOnInteraction: true,
  grabCursor: true,
  freeMode: true,
  effect: 'slide',
  longSwipes: true,
  autoplay: 2000,
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  mousewheel: {
    invert: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    "@0.00": {
      slidesPerView: 2,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    "@1.00": {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    "@1.20": {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    "@1.50": {
      slidesPerView: 4,
      spaceBetween: 10,
    },
    "@1.75": {
      slidesPerView: 5,
      spaceBetween: 10,
    },
    "@2.00": {
      slidesPerView: 5,
      spaceBetween: 10,
    },
  },
});


var swiper = new Swiper(".mySwiper2", {
  autoplay: true,
  effect: "flip",
  grabCursor: true,
  pagination: {
    el: ".swiper-pagination",
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// ======================================
// GLIGHTBOX
// ======================================
const lightbox = GLightbox({
  touchNavigation: true,
  loop: true,
  autoplayVideos: true,
});
// ======================================
// OWL-CAROUSEL
// ======================================
// one
$('.best-gameVdo').owlCarousel({
  loop: true,
  autoplay: true,
  animateOut: "fadeOut",
  animateIn: "flipInX",
  items: 1,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
// two
$('.best-gameImg').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3000,
  animateOut: 'fadeOut',
  animateIn: 'fadeIn',
  smartSpeed: 800,
  autoplayHoverPause: true,
  // animateOut: "fadeOut",
  // animateIn: "flipInX",
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});
// three FEATURED GAME
$('.featured_game-wrapper').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  autoplay: true,
  autoplayTimeout: 2000,
  slideSpeed: 200,
  stagePadding: 10,
  rewindSpeed: 100,
  autoplayHoverPause: true,
  smartSpeed:1000,
  items: 8,
  margin: 10,
  dots: false,
  navText: [
    "<i class='fas fa-chevron-left'></i>",
    "<i class='fas fa-chevron-right'></i>"
  ],
  responsive: {
    0: {
      items: 3,
    },
    600: {
      items: 4,
    },
    1000: {
      items: 6,
    },
    1200: {
      items: 6,
    },
    1300: {
      items: 7,
    },
    1400: {
      items: 8,
    },
    1600: {
      items: 8,
    },
    1700: {
      items: 8,
    },
    1900: {
      items: 10,
    }
  }
});
// four
$('.recommended_game-wrapper').owlCarousel({
  loop: true,
  margin: 0,
  nav: true,
  autoplay: true,
  autoplayTimeout: 3000,
  slideSpeed: 100,
  stagePadding: 10,
  rewindSpeed: 100,
  // animateOut: 'backOutLeft',
  //   animateIn: 'backInRight',
  margin: 10,
  smartSpeed: 600,
  autoplayHoverPause: true,
  dots: false,
  navText: [
    "<i class='fas fa-chevron-left'></i>",
    "<i class='fas fa-chevron-right'></i>"
  ],
  responsive: {
    0: {
      items: 3,
    },
    600: {
      items: 3,
    },
    1000: {
      items: 3,
    },
    1200: {
      items: 6,
    },
    1400: {
      items: 7,
    },
    1600: {
      items: 7,
    },
    1700: {
      items: 8,
    }
  }
});


// ======================================
// DROPDOWN ACTIVE 
// ======================================
$(document).ready(function () {
  $("#menu").click(function () {
    $("ul").toggleClass("active");
    $("#icon_chevron").toggleClass("fa-chevron-up");
  });
});
// ======================================
// SEEMORE ACTIVE 
// ======================================


$(document).ready(function () {
  $('.see_more').click(function () {
    if ($('.Content_wrapper').hasClass("active")) {
      // $('.see_more-btn').html('See more');
      $('.see_more-btn').html($('<i/>', {
        class: 'fas fa-chevron-down'
      })).append('&nbsp;&nbsp;').append('Show More');
      $('.Content_wrapper').removeClass("active");

    } else {
      // $('.see_more-btn').html('See less');
      $('.Content_wrapper').addClass("active");

      $('.see_more-btn').html($('<i/>', {
        class: 'fas fa-chevron-up'
      })).append('&nbsp;&nbsp;').append('Show Less');

    }
  });
});

// ======================================
// PRELOADER 
// ======================================
$(window).on('load', function () {

  $('#preloader').fadeOut(2000);

});
// ======================================
// HUBBURGER ACTIVE
// ======================================
const menuBtn = document.querySelector('.menu-btn');
var mobileMenu = document.querySelector('.mobile_menu');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if(!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
        mobileMenu.classList.toggle("active");
    } else{
        menuBtn.classList.remove('open');
        menuOpen = false;
        mobileMenu.classList.toggle("active");
    }
});


// ======================================
// FULLSCREEN MODE 
// ======================================

const fullScreenBtn = document.getElementById('openScreen');
const elem = document.getElementById('fullScreen');

fullScreenBtn.addEventListener("click", () => {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) {
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) {
    elem.msRequestFullscreen();
  }
});
const openBtn = document.getElementById('openScreen_md');
const element = document.getElementById('fullScreen_md');

openBtn.addEventListener("click", () => {
  if (element.requestFullscreen) {
    element.requestFullscreen();
  } else if (element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if (element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
});



// ======================================
// READ MORE BUTTON
// ======================================

$(document).ready(function () {
  $(".read_more_btn").click(function () {
    var elem = $(".read_more_btn").text();
    if (elem == "Read More") {
      //Stuff to do when btn is in the read more state
      $(".read_more_btn").text("Read Less");
      $("#load_more_text").slideDown(500);
    } else {
      //Stuff to do when btn is in the read less state
      $(".read_more_btn").text("Read More");
      $("#load_more_text").slideUp(500);
    }
  });
});



