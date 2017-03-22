var num= 30;

$(function(){
    $(window).bind('scroll', function(){
        if($(window).scrollTop() > num){
            $('.navbar-default').addClass('top-fixed');
        }else{
            $('.navbar-default').removeClass('top-fixed');
        }
    });
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


$(function(){
    $('div li').removeClass('active');
});
    
