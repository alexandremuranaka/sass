$(document).ready(function(){
/* menu height */
function resizeMe()
{
	h = $(window).height();
	header = $("#header").height();
	height = h - header;
	$("#menu").css("height",height);
	$("#menu").css("marginTop",header);
	$("#wrapper").css("marginTop",header);
}
$(window).resize(function(){resizeMe();});
resizeMe();

$("#btn_menu").on("click",function(){
	$(this).toggleClass("active");
	$("#menu").toggleClass("active");
	$("#wrapper").toggleClass("active");
});

$("#menu .father h3").on("click",function(){
	$(this).toggleClass("active");
	$(this).find("i").toggleClass("active");
	$(this).siblings().slideToggle();
	$(this).siblings().toggleClass("active");
});

if( $(".textarea").length > 0){
	$(".textarea").wysihtml5();
}









});
