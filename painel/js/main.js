$(function(){
   var open = true;
   var windowSize = $(window)[0].innerWidth;
   if(windowSize <= 768){
      open = false;    
   }

   $('.menu-btn').click(function(){
        if(open){
            $('.menu').animate({'width': '0','padding':'0' });
            $('header').animate({'left': '0' });
            $('header').css({'width':'100%' });
            $('.content').animate({'left': '0' });
            $('.content').css({'width':'100%' });
        }
   })
})