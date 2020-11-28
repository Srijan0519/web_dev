


$(document).ready(function(){
    //Owl Banner Slider 
    $("#banner-slider .owl-carousel").owlCarousel(
        {
            items:1,
            loop:true,
            autoplay:true,
            nav:true
        }
    );
    
});


// Handle flip card animation on mobile
$(".hover").on("touchstart", function(flipper) {
	flipper.preventDefault();
	$(".flip").removeClass("flip");
	$(this).toggleClass("flip");
});
