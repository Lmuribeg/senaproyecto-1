var posMenu = $("#menu").offset().top


$(window).scroll(function() {
	
var posScroll = $(window).scrollTop()




var numPos = posScroll * 0.5;
$("#menu").css({
	"background-position-y": numPos + "px"

})

var numPos = posScroll * 0.5;
$(".sec1").css({
	"background-position-y": numPos + "px"

})

if (posScroll>posMenu){
	$("#menu").addClass("menuEstatico");
	$(".arriba").slideDown()
}

if (posScroll <posMenu){
	$("#menu").removeClass("menuEstatico");
	$(".arriba").slideUp()

}

	


	})

