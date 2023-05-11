
    var screenSize= $(window).innerWidth();
/*
  ==========================================
   Document ready
  ==========================================
*/
jQuery(document).ready(function ($) {
  //----------=======>>> Slide Menu <<<=======----------
  $(function () {
    $("#hamburger-menu").click(function (event) {
      event.stopPropagation();
      $("#hamburger-menu").toggleClass("open");
      $("#navigation-menu").toggleClass("active");
      $("body").toggleClass("overflow-hidden");
    });
  }); 
  
  //----------=======>>> Slide Search <<<=======----------
  $(function () {
    $(".search-container .search-icon").click(function (event) {
      event.stopPropagation();
      $(this).toggleClass("active");
      $(".search-form-wrapper").toggleClass("active");
      $("body").toggleClass("overflow-hidden");
    });
  });

   //---===>>> on screen effect
    $(window).on('load scroll resize', function() {
      $(".on-screen").each(function() {
          var docViewTop = $(window).scrollTop() + $(window).height();
          var elemTop = $(this).offset().top;
          if (docViewTop >= elemTop) {
              $(this).addClass("is-screened");
          }
          else{
              $(this).removeClass('is-screened');
          }
      });
    });

  /*--------------------------------------------------
    # set to the same height-> element inside a container
  ---------------------------------------------------*/
  same_height_element_in_container('.reviews_by_category', '.tag-image-title__content');

  if(screenSize > 576) {
    same_height_element_in_container('.sample_products', '.aawp-product__title');
  }

  /*--------------------------------------------------
    # Gallery slider
  ---------------------------------------------------*/
  $(".slider_exercises").each(function () {
    $(this).find(".slider_exercises__slider").slick({
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 2000,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev"></button>',
      nextArrow: '<button type="button" class="slick-next"></button>',
      centerMode: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false,
      variableWidth: false,
    });
  });


  
  /*--------------------------------------------------
    # Team slider
  ---------------------------------------------------*/
  $('.team').each(function () {
    $(this).find('.team__slider').slick({
      autoplay:true,
      autoplaySpeed:2000,
      speed:2000,
      arrows:false,
      prevArrow:'<button type="button" class="slick-prev"></button>',
      nextArrow:'<button type="button" class="slick-next"></button>',
      centerMode:false,
      slidesToShow:5,
      slidesToScroll:1,
      pauseOnFocus: true,
      pauseOnHover: true,
      pauseOnDotsHover: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        }
      ]
    });
  });


  
  /*--------------------------------------------------
    # Three Columns Posts slider
  ---------------------------------------------------*/
  $('.three_columns_posts').each(function () {
    $(this).find('.three_columns_posts__wrapper').slick({
      autoplay:true,
      autoplaySpeed:2000,
      speed:2000,
      arrows:false,
      prevArrow:'<button type="button" class="slick-prev"></button>',
      nextArrow:'<button type="button" class="slick-next"></button>',
      centerMode:false,
      slidesToShow:3,
      slidesToScroll:1,
      pauseOnFocus: true,
      pauseOnHover: true,
      pauseOnDotsHover: false,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
          }
        }
      ]
    });
  });

  
  
  /*--------------------------------------------------
    # Three Columns Posts slider
  ---------------------------------------------------*/
  $('.simple_post_and_slider__postS').each(function () {
    $(this).find('.carousel').slick({
      autoplay:true,
      autoplaySpeed:2000,
      speed:2000,
      arrows:true,
      prevArrow:'<button type="button" class="slick-prev"></button>',
      nextArrow:'<button type="button" class="slick-next"></button>',
      centerMode:false,
      slidesToShow:1,
      slidesToScroll:1,
      pauseOnFocus: true,
      pauseOnHover: true,
      pauseOnDotsHover: false,
    });
  });


}); //** end document ready



    //---==>>> set all element inside a coontainer to the same height
    function same_height_element_in_container($container_class, $item_class){
      $($container_class).each(function(){
        var $generalHeight= 0;
        $allSlide= $(this).find($item_class);
        for(var i=0; i< $allSlide.length; i++){
          $thisHeight= $($allSlide[i]).height();
          if($thisHeight >= $generalHeight){
            $generalHeight= $thisHeight;
          }
        }
        for(var y=0; y < $allSlide.length; y++){
          if( $generalHeight > 0 ){
            $($allSlide[y]).css('height', $generalHeight+'px');
          } else {
            $($allSlide[y]).css('height', unset);
          }
        }
      });
    }