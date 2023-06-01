(function ($) {

  "use strict";


  /*=========================== preloader ===========================*/
  // Wait for window load
  $(window).on('load', function() {
     $(".se-pre-con").fadeOut("slow");;
  });

  /*=========================== preloader ===========================*/

  /*=========================== meanmenu active ===========================*/
  
  $('.mean-menu').meanmenu({
      meanScreenWidth: "992"
   });
/*=========================== meanmenu close ===========================*/


/*=========================== click to top ===========================*/
  // ===== Scroll to Top ==== 
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 100) {        // If page is scrolled more than 100px
        $('#return-to-top').fadeIn(100);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(100);   // Else fade out the arrow
    }
});
$('#return-to-top').on('click',function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 50);
});

/*=========================== click to top ===========================*/

/*=========================== poup search ===========================*/ 
$('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
/*=========================== poup search ===========================*/



/*=========================== magnificPopup  active ===========================*/
/* magnificPopup img view */
$(".image-popups").magnificPopup({
      type: "image",
      gallery: {
        enabled: true,
      },
    });
/* magnificPopup gallery view */
    $('.popup-gallery').magnificPopup({
      delegate: 'a.gl',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return "<h4 class='text-white'>" + item.el.attr('title') + "</h4>" +  "<h5 class='text-white'>" +item.el.attr('data-sub') + "</h5>";
        }
      }
    });
    
    /* magnificPopup video view */
    $(".video-popup").magnificPopup({
      type: "iframe",
    });
/*=========================== magnificPopup  active ===========================*/


/*=========================== Testimonial slider active ===========================*/
var swiper = new Swiper(".testi-slide-js-active", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 1.1,
  coverflowEffect: {
    rotate: 0,
    stretch: 235,
    depth: 90,
    modifier: 3,
    slideShadows: true,
  },
  spaceBetween: 0,
  loop: true,
  navigation: {
    nextEl: ".testi-button-next",
    prevEl: ".testi-button-prev",
  },
});

/*=========================== Testimonial slider active ===========================*/


/*=========================== Testimonial slider v2 active ===========================*/
var swiper2 = new Swiper(".testimonial-slider-v2", {
  loop: true,
  slidesPerView: 1,
  autoHeight:true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
/*=========================== Testimonial slider v2 active ===========================*/
    

/*=========================== Testimonial slider v2 active ===========================*/
var swiper3 = new Swiper(".e-details-slider-js", {
  loop: true,
  slidesPerView: 1,
  autoHeight:true,
  pagination: {
    el: ".swiper-pagination-dot",
    clickable: true,
  },
});
/*=========================== Testimonial slider v2 active ===========================*/
    

 // ------------------------------- AOS Animation 
        AOS.init({
          duration: 1000,
          mirror: false,
          disable: function() {
            var maxWidth = 1100;
            return window.innerWidth < maxWidth;
          }
        
        });
        
})(jQuery);

