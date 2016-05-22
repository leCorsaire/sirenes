$(function(){
  $('#slide_nav').hide();
  $('#clickers').hide();
  $('#footer_upper').hide();
       

    function header(){
        
        if ($(window).width() > 1023){
            
            if ($(document).scrollTop() <= 0){

            $('header').animate({backgroundColor: jQuery.Color("rgba(255,255,255,0.6)")}, 300, header);

            }

            else {

            $('header').animate({backgroundColor: jQuery.Color("rgba(255,255,255,1)")}, 300, header);

            }

            
        }
        
        else {
            
        }

            
    }

    header();
    
    

        
    
    
    
});