// -------------------- Navigation Scroll
  $(window).on('scroll', function (){   
    var sticky = $('.theme-menu-wrapper'),
    scroll = $(window).scrollTop();
    if (scroll >= 190) sticky.addClass('fixed');
    else sticky.removeClass('fixed');

  });

 // ------------------------------ Theme Menu 
 var menu= $("#mega-menu-holder");
 if(menu.length) {
   menu.slimmenu({
     resizeWidth: '991',
     animSpeed:'medium',
     indentChildren: true,
   });
 }



  //  ------------------------------- heme Main Banner Slider One
  //  var banner = $(".slider");
  //  console.log(banner);
  //  if(banner.length) {
  //      banner.owlCarousel({
  //        loop:true,
  //        nav:false,
  //        dots:true,
  //        autoplay:true,
  //        autoplayTimeout:4000,
  //        smartSpeed:1000,
  //        autoplayHoverPause:true,
  //        lazyLoad:true,
  //        items:1
  //    })
  //  }


