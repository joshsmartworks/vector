$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:true,
                autoplay:true,
                autoplayTimeout:5000,
                autoWidth:true,
            }
        }
    })
});

wow = new WOW(
    {
        boxClass:     'wow',      // default
        animateClass: 'animated',
        offset:       0,
        mobile:       true,       // default
        live:         true        // default
    }
);
wow.init();

(function($){

    $('a.page-scroll').bind('click',function(){
        var $anchor = $(this), scrollTop = 0;

        if($anchor[0].hash != '#home'){
            scrollTop = $($anchor.attr('href')).offset().top - 150;
        }

        $('html, body').stop().animate({
            scrollTop: scrollTop
        }, 800, 'easeInOutExpo');  
        event.preventDefault();
    });

})(jQuery);


$(function() {
    $(".expand").on( "click", function() {
        // $(this).next().slideToggle(200);
        $expand = $(this).find(">:first-child");

        if($expand.text() == "+") {
            $expand.text("-");
        } else {
            $expand.text("+");
        }
    });
});



function initMap() {
    var uluru = {lat: 33.863011, lng: -118.351746};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 14,
        center: uluru
    });
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}
