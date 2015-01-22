var screenHeight = screen.height;
var screenWidth = screen.width;

var main = function() {
	
	$("#nav .web_nav ").click(function() {
		$(".work .grafics").addClass("hidden");
		$(".work .drawings").addClass("hidden");
		$(".work .web").removeClass("hidden");

		
	//	$(".work .web").slideToggle("slow");
	});

	$("#nav .grafics_nav").click(function() {
		$(".work .web").addClass("hidden");
		$(".work .drawings").addClass("hidden");
		$(".work .grafics").removeClass("hidden");
	
		//$(".work .grafics").slideDown("slow");
	});

	$("#nav .drawings_nav").click(function() {
		$(".work .grafics").addClass("hidden");
		$(".work .web").addClass("hidden");
		$(".work .drawings").removeClass("hidden");
		
		//$(".work .drawings").slideToggle("slow");
	});



	/*$(".work img").hover(function(){
		$(this).css("box-shadow", "10px 10px 20px #aaa");
	},	function() {
		$(this).css("box-shadow", "10px 10px 20px #ccc");
	}); 



	if(screenHeight > 800) {
		$("#header").css("height", "380px");
	}

	if(screenWidth < 1400) {
		$(".container").css("width", "1200px");
	} */
	


};

$(document).ready(main);
