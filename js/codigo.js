$("div h5:eq(0)").animate({
	"opacity":"1",
	"margin-left" : "0"

}, 2000)


var pos1= $("#seccion1").offset().top;





$("#menu button:eq(1)").click(function () {
	$("html").animate({
		scrollTop : pos1
	});
})




var pos2= $("#seccion2").offset().top;





$("#menu button:eq(2)").click(function () {
	$("html").animate({
		scrollTop : pos2
	});
})



var pos3= $("#seccion3").offset().top;





$("#menu button:eq(3)").click(function () {
	$("html").animate({
		scrollTop : pos3
	});
})


$(".arriba").click(function () {
	$("html").animate({
		scrollTop:"0px"
	})
});