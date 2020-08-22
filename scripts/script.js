

//$(window).scroll(function () {
//    if ($(window).scrollTop() > 0) {
//        $('.fav_col').css({'opacity':'0','position':'relative','top':'400px'}).animate({opacity:'1','top':'0'},1000);
//        
//        
// 
//
//    } else {
//        console.log('else statement')
//    }
//});
//
//$('catering_section').scroll(function(){
//    if(this.scrollTop() > 0){
//        $(this).css('opacity','0').animate({opacity:'1'},3000);
//        console.log('hey you ')
//
//    }
//})
//
//var scrolled = window.innerHeight
//
//console.log(scrolled)

$(window).on("load",function() {
  $(window).scroll(function() {
    var windowBottom = $(this).scrollTop() + $(this).innerHeight();
    $(".fade").each(function() {
      /* Check the location of each desired element */
      var objectBottom = $(this).offset().top + $(this).outerHeight();
      
      /* If the element is completely within bounds of the window, fade it in */
      if (objectBottom < windowBottom) { //object comes into view (scrolling down)
        if ($(this).css("opacity")==0) {$(this).fadeTo(500,1);}
      } else { //object goes out of view (scrolling up)
        if ($(this).css("opacity")==1) {$(this).fadeTo(500,0);}
      }
    });
  }).scroll(); //invoke scroll-handler on page-load
});