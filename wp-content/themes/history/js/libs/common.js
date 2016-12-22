$(document).ready(function() {
    
    function HeightDetected(){
        var height = $(window).height();
        $('.main_header').css('height',height)
    }
	
    HeightDetected();
	
    $(window).resize(function(){
        HeightDetected();
    });
    
    $('.menu').click(function(){
        $('.top-line,.middle-line,.bottom-line').toggleClass('active');
        $('.menu-list').toggleClass('out');
    });

    $('.up-button').click(function(){

        $('body,html').animate({scrollTop:0},1000);
        return false;

    });

    $('.up-button').hover(function(){

        $('.up-button').toggleClass('pulse animated');

    });

    $('.fa-twitter').hover(function(){

        $('.fa-twitter').toggleClass('pulse animated');

    });

    $('.fa-facebook').hover(function(){

        $('.fa-facebook').toggleClass('pulse animated');

    });

    $('.fa-vk').hover(function(){

        $('.fa-vk').toggleClass('pulse animated');

    });

    $('.fa-youtube').hover(function(){

        $('.fa-youtube').toggleClass('pulse animated');

    });

    $(window).scroll(function(){
        if(window.pageYOffset>=300){

            $('.news').addClass('flipInX animated');

            $('.blog-page').addClass('zoomIn animated');

            $('.aboutAnim').addClass('zoomIn animated');

            $('.contactAnim').addClass('zoomIn animated');

            $('.folio-block').addClass('zoomIn animated');


        }

        if(window.pageYOffset>=600){

            $('.s-images').addClass('flipInX animated');
        }

    });
    
});

$(window).load(function(){
    $('.preload').fadeOut();
    $('.preload-obj').delay(400).fadeOut('slow');
})

