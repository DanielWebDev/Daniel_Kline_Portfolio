
$(function() {
    
    var $nav_anim = $('.anim');
    
    // SCROLLING NAVIGATION
    $nav_anim.click(function(e){
            var gotohere = $(this).attr('href');// location to scroll
            $('body,html').animate({scrollTop: $(gotohere).offset().top},"slow");
            return false;// adding this prevents screen from flickering when nav button is pressed 
    });

}); //END function()
