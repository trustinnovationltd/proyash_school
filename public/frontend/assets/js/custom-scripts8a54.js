(function ($) {
  "use strict";

  //===== Menu Active =====//
  var pgurl = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $("nav ul li a").each(function () {
    if ($(this).attr("href") == pgurl || $(this).attr("href") == "")
      $(this)
        .parent("li")
        .addClass("active")
        .parent()
        .parent()
        .addClass("active")
        .parent()
        .parent()
        .addClass("active");
  });

  //===== Menu Active =====//
  var pgurl = window.location.href.substr(
    window.location.href.lastIndexOf("/") + 1
  );
  $(".rsnp-mnu ul li a").each(function () {
    if ($(this).attr("href") == pgurl || $(this).attr("href") == "")
      $(this)
        .parent("li")
        .addClass("active")
        .parent()
        .parent()
        .addClass("active-parent")
        .parent()
        .parent()
        .addClass("active-parent");
  });

  var isRTL = $("html").attr("dir") === "rtl";
  //Main Slider Carousel
  if ($(".team-caro").length) {
    jQuery(".team-caro.owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      dots: false,
      arrows: false,
      stagePadding: 0,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false,
        },
        600: {
          items: 3,
          nav: false,
        },
        1000: {
          items: 4,
          nav: false,
          loop: false,
        },
      },
    });
  }

  /* jQuery(window).on("load", function ($) {
    if (jQuery(".sn-main-slider-carousel").length) {
      jQuery(".sn-main-slider-carousel").owlCarousel({
        animateOut: "fadeOut",
        animateIn: "fadeIn",
        loop: true,
        margin: 0,
        nav: true,
        autoHeight: true,
        smartSpeed: 1000,
        autoplay: false,
        navText: [
          '<span class="fa fa-angle-left"></span>',
          '<span class="fa fa-angle-right"></span>',
        ],
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 1,
          },
          800: {
            items: 1,
          },
          1024: {
            items: 1,
          },
          1200: {
            items: 1,
          },
        },
      });
    }
  });*/

  //===== Width =====//
  var width = window.innerWidth;

  //===== Wow Animation Setting =====//
  if ($(".wow").length > 0) {
    var wow = new WOW({
      boxClass: "wow", // default
      animateClass: "animated", // default
      offset: 0, // default
      mobile: true, // default
      live: true, // default
    });

    wow.init();
  }

  //===== Header Search =====//
  $(".search-btn").on("click", function () {
    $(".header-search").addClass("active");
    return false;
  });
  $(".search-close-btn").on("click", function () {
    $(".header-search").removeClass("active");
    return false;
  });

  //===== Side Menu =====//
  $(".rspn-mnu-btn").on("click", function () {
    $(".rsnp-mnu").addClass("slidein");
    return false;
  });
  $(".rspn-mnu-cls").on("click", function () {
    $(".rsnp-mnu").removeClass("slidein");
  });
  $(".rsnp-mnu li.menu-item-has-children > a").on("click", function () {
    $(this).parent().siblings("li").children("ul").slideUp();
    $(this).parent().siblings("li").removeClass("active");
    $(this).parent().children("ul").slideToggle();
    $(this).parent().toggleClass("active");
    return false;
  });

  //===== Select =====//
  if ($(".slc-wrp > select").length > 0) {
    jQuery(".slc-wrp > select").selectpicker();
  }

  //===== Sticky Sidebar =====//
  if (width > 991) {
    if ($(".post-detail-wrap > div.row > div").length > 0) {
      $(".post-detail-wrap > div.row > div").theiaStickySidebar({
        additionalMarginTop: 40,
        additionalMarginBottom: 40,
      });
    }
  }

  //===== Counter Up =====//
  if ($.isFunction($.fn.counterUp)) {
    $(".counter").counterUp({
      delay: 10,
      time: 2000,
    });
  }

  //===== LightBox =====//
  if ($.isFunction($.fn.fancybox)) {
    $('[data-fancybox],[data-fancybox="gallery"]').fancybox({});
  }

  //===== Scrollbar =====//
  if ($(".rsnp-mnu").length > 0) {
    var ps = new PerfectScrollbar(".rsnp-mnu");
  }

  //===== Calendar =====//
  if ($("#calendar").length > 0) {
    $("#calendar").fullCalendar({
      defaultDate: "2026-02-12",
      editable: true,
      eventLimit: true, // allow "more" link when too many events
    });
  }

  //===== Slick Carousel =====//
  if ($.isFunction($.fn.slick)) {
    //=== Featured Area Carousel ===//
    /*$(".feat-caro").slick({
      initialSlide: 0,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      autoplay: false,
      autoplaySpeed: 6000,
      cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
      speed: 1500,
      draggable: true,
      dots: false,
      arrows: true,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='flaticon-arrow-pointing-to-right'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='flaticon-arrow-pointing-to-left'></i></button>",
      responsive: [
        {
          breakpoint: 1076,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
        {
          breakpoint: 851,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
      ],
    });*/

    //=== Featured Area Carousel 2 ===//
    $(".feat-caro2").slick({
      initialSlide: 0,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      autoplay: false,
      autoplaySpeed: 6000,
      cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
      speed: 1500,
      draggable: true,
      dots: false,
      arrows: true,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='flaticon-arrow-pointing-to-right'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='flaticon-arrow-pointing-to-left'></i></button>",
      responsive: [
        {
          breakpoint: 995,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
        {
          breakpoint: 851,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          },
        },
      ],
    });

    //=== Featured Area Image Carousel ===//
    /* $(".feat-img-caro").slick({
      initialSlide: 0,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      autoplay: true,
      autoplaySpeed: 6000,
      cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
      speed: 1500,
      draggable: true,
      dots: false,
      arrows: false,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='flaticon-arrow-pointing-to-right'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='flaticon-arrow-pointing-to-left'></i></button>",
      responsive: [
        {
          breakpoint: 981,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 851,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 490,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    }); */

    //=== News Carousel ===//

    $(".news-caro").slick({
      arrows: true,
      rtl: isRTL,
      initialSlide: 0,
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      fade: false,
      autoplay: false,
      autoplaySpeed: 5000,
      speed: 1000,
      draggable: true,
      dots: false,
      pauseOnDotsHover: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='flaticon-angle-pointing-to-left'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='flaticon-angle-arrow-pointing-to-right'></i></button>",
      responsive: [
        {
          breakpoint: 1210,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
          },
        },
        {
          breakpoint: 995,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true,
          },
        },
      ],
    });

    //===== Testimonials Carousel =====//
    $(".testi-list-caro").slick({
      slidesToShow: 1,
      rtl: isRTL,
      slidesToScroll: 1,
      arrows: true,
      autoplay: true,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='flaticon-angle-pointing-to-left'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='flaticon-angle-arrow-pointing-to-right'></i></button>",
      // slide: 'li',
      fade: true,
      asNavFor: ".testi-nav-caro",
      responsive: [
        {
          breakpoint: 1290,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          },
        },
        {
          breakpoint: 850,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          },
        },
      ],
    });

    $(".testi-nav-caro").slick({
      rtl: isRTL,
      slidesToShow: 3,
      slidesToScroll: 1,
      asNavFor: ".testi-list-caro",
      dots: false,
      arrows: false,
      // slide: 'li',
      centerMode: true,
      vertical: true,
      centerPadding: "0px",
      focusOnSelect: true,
      prevArrow:
        "<button type='button' class='slick-prev'><i class='flaticon-angle-pointing-to-left'></i></button>",
      nextArrow:
        "<button type='button' class='slick-next'><i class='flaticon-angle-arrow-pointing-to-right'></i></button>",
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
          },
        },
        {
          breakpoint: 995,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            vertical: false,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
            vertical: false,
          },
        },
      ],
    });
  }
})(jQuery); //===== Document Ready Ends =====//

//===== Window onLoad =====//
jQuery(window).on("load", function ($) {
  "use strict";

  //===== Page Loader =====//
  jQuery("#preloader").fadeOut(300);

  //===== Isotope =====//
  if (jQuery(".fltr-itm").length > 0) {
    if (jQuery().isotope) {
      var jQuerycontainer = jQuery(".masonry"); // cache container
      jQuerycontainer.isotope({
        itemSelector: ".fltr-itm",
        columnWidth: 0.1,
      });
      jQuery(".filter-links a").on("click", function () {
        var selector = jQuery(this).attr("data-filter");
        jQuery(".filter-links li").removeClass("active");
        jQuery(this).parent().addClass("active");
        jQuerycontainer.isotope({ filter: selector });
        return false;
      });
      jQuerycontainer.isotope("layout"); // layout/layout
    }

    jQuery(window).resize(function () {
      if (jQuery().isotope) {
        jQuery(".masonry").isotope("layout"); // layout/relayout on window resize
      }
    });
  }
}); //===== Window onLoad Ends =====//

//===== Sticky Header =====//
jQuery(window).on("scroll", function ($) {
  "use strict";

  var menu_height = jQuery("header").innerHeight();
  var scroll = jQuery(window).scrollTop();
  if (scroll >= menu_height) {
    jQuery("body").addClass("sticky");
  } else {
    jQuery("body").removeClass("sticky");
  }
}); //===== Window onScroll Ends =====//

jQuery(window).on("load", function () {
  jQuery("body").addClass("page-loaded");
  ("loaded");
});

(function ($) {
  "use strict";

  if ($.isFunction($.fn.owlCarousel)) {
    /* jQuery(window).on("load", function ($) {
      jQuery(".slider-hero").owlCarousel({
        loop: true,
        arrows: false,
        autoplay: false,
        autoplayTimeout: 4000,
        items: 1,
      });
    }); */
    /***--------  slider-reviews   ------- ***/
    jQuery(window).on("load", function ($) {
      jQuery(".slider-reviews").owlCarousel({
        loop: true,
        arrows: false,
        autoplay: true,
        autoplayTimeout: 4000,
        items: 1,
        navText: [
          "<i class='fa-solid fa-chevron-left'></i>",
          "<i class='fa-solid fa-chevron-right'></i>",
        ],
        nav: true,
      });
    });
    /***--------  therapy-slider   ------- ***/
    // jQuery(window).on("load", function ($) {
    //   jQuery(".therapy-slider").owlCarousel({
    //     rtl: true,
    //     loop: true,
    //     dot: true,
    //     nav: false,
    //     margin: 26,
    //     autoplay: true,
    //     autoplayTimeout: 3000,
    //     responsive: {
    //       0: {
    //         items: 1,
    //       },
    //       766: {
    //         items: 2,
    //       },
    //       992: {
    //         items: 3,
    //       },
    //       1200: {
    //         items: 4,
    //       },
    //     },
    //   });
    // });
  }

  /***--------  05. mobile-nav   ------- ***/
  $(".mobile-nav .menu-item-has-children").on("click", function (event) {
    $(this).toggleClass("active");
    event.stopPropagation();
  });

  $("#mobile-menu").on("click", function () {
    $(this).toggleClass("open");
    $("#mobile-nav").toggleClass("open");
  });

  $("#desktop-menu").on("click", function () {
    $(this).toggleClass("open");
    $(".desktop-menu").toggleClass("open");
  });

  $("#res-cross").on("click", function () {
    $("#mobile-nav").removeClass("open");
    $("#mobile-menu").removeClass("open");
  });
})(jQuery);
/***--------  search-box   ------- ***/
if (jQuery(".search-box-outer").length) {
  jQuery(".search-box-outer a.pink-style").on("click", function () {
    jQuery("body").addClass("search-active");
  });
  jQuery(".close-search").on("click", function () {
    jQuery("body").removeClass("search-active");
  });
}

//
function inVisible(element) {
  //Checking if the element is
  //visible in the viewport
  var WindowTop = $(window).scrollTop();
  var WindowBottom = WindowTop + $(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();
  //animating the element if it is
  //visible in the viewport
  if (ElementBottom <= WindowBottom && ElementTop >= WindowTop)
    animate(element);
}

function animate(element) {
  //Animating the element if not animated before
  if (!element.hasClass("ms-animated")) {
    var maxval = element.data("max");
    var html = element.html();
    element.addClass("ms-animated");
    $({
      countNum: element.html(),
    }).animate(
      {
        countNum: maxval,
      },
      {
        //duration 5 seconds
        duration: 5000,
        easing: "linear",
        step: function () {
          element.html(Math.floor(this.countNum) + html);
        },
        complete: function () {
          element.html(this.countNum + html);
        },
      }
    );
  }
}

//When the document is ready
jQuery(function ($) {
  jQuery(window).on("scroll", function () {
    $("h2[data-max]").each(function () {
      inVisible($(this));
    });
  });
});

function inVisible(element) {
  var WindowTop = jQuery(window).scrollTop();
  var WindowBottom = WindowTop + jQuery(window).height();
  var ElementTop = element.offset().top;
  var ElementBottom = ElementTop + element.height();
  if (ElementBottom <= WindowBottom && ElementTop >= WindowTop)
    animate(element);
}

function animate(element) {
  if (!element.hasClass("ms-animated")) {
    var maxval = element.data("max");
    var html = element.html();
    element.addClass("ms-animated");
    jQuery({
      countNum: element.html(),
    }).animate(
      {
        countNum: maxval,
      },
      {
        duration: 5000,
        easing: "linear",
        step: function () {
          element.html(Math.floor(this.countNum) + html);
        },
        complete: function () {
          element.html(this.countNum + html);
        },
      }
    );
  }
}
jQuery(function ($) {
  jQuery(window).on("scroll", function () {
    $("h2[data-max]").each(function () {
      inVisible($(this));
    });
  });
});

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);
  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `conic-gradient(#e91e63 ${scrollValue}%, #fff ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

// end

/* 14. accordion-item */

jQuery(".accordion-item .heading").on("click", function (e) {
  e.preventDefault();

  if (jQuery(this).closest(".accordion-item").hasClass("active")) {
    jQuery(".accordion-item").removeClass("active");
  } else {
    jQuery(".accordion-item").removeClass("active");

    jQuery(this).closest(".accordion-item").addClass("active");
  }
  var $content = jQuery(this).next();
  $content.slideToggle(100);
  jQuery(".accordion-item .content").not($content).slideUp("fast");
});

// end

//  progress_bar

(function ($) {
  "use strict";
  progress_bar();
})(jQuery);

function progress_bar() {
  var speed = 30;
  var items = jQuery(".progress_bar").find(".progress_bar_item");

  items.each(function () {
    var item = jQuery(this).find(".progress");
    var itemValue = item.data("progress");
    var i = 0;
    var value = jQuery(this);

    var count = setInterval(function () {
      if (i <= itemValue) {
        var iStr = i.toString();
        item.css({
          width: iStr + "%",
        });
        value.find(".item_value").html(iStr + "%");
      } else {
        clearInterval(count);
      }
      i++;
    }, speed);
  });
}

// Initialize Fancybox
// Fancybox.bind("[data-fancybox]", {
//   // Configure Fancybox to support multiple video providers
//   Youtube: {
//     controls: 1,
//     showinfo: 0,
//     rel: 0,
//   },
//   Vimeo: {
//     byline: 0,
//     portrait: 0,
//     color: "00adef",
//   },
//   Dailymotion: {
//     ui_highlight: "00adef",
//     ui_theme: "dark",
//   },
//   // For self-hosted videos
//   HTML5: {
//     tpl: '<div class="fancybox-video-wrapper"><video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" /></video></div>',
//   },
// });

// jQuery(document).ready(function ($) {
//   const tagSelector = ".video-tag.tag-3.new-tag";
//   const fadeSpeed = 1000; // 1 second fade
//   const threeDays = 3 * 24 * 60 * 60 * 1000; // 3 days in ms

//   // Function to handle the fade effect (looping)
//   function startFading($tag) {
//     $tag.fadeOut(fadeSpeed).fadeIn(fadeSpeed, function() {
//       startFading($tag);
//     });
//   }

//   // Loop through each tag element
//   $(tagSelector).each(function() {
//     const $tag = $(this);
//     const tagId = $tag.attr("data-id") || $tag.text().trim(); // Use data-id or text as unique key

//     const storageKey = "newTagTimestamp_" + tagId;
//     const now = Date.now();
//     const savedTimestamp = localStorage.getItem(storageKey);

//     if (!savedTimestamp) {
//       // New tag, store timestamp
//       localStorage.setItem(storageKey, now);
//       startFading($tag);
//     } else {
//       const elapsed = now - parseInt(savedTimestamp);
//       if (elapsed > threeDays) {
//         // Remove tag if older than 3 days
//         $tag.remove();
//         localStorage.removeItem(storageKey);
//       } else {
//         // Tag is still fresh, continue fade effect
//         startFading($tag);
//       }
//     }
//   });
// });

