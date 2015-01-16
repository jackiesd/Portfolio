var main = function() {
	 $("#header").fadeTo("slow", 1);

	$(".nav .web ").click(function() {
		$(".work .grafics").addClass("hidden");
		$(".work .drawings").addClass("hidden");

		$(".work .web").removeClass("hidden");
	});

	$(".nav .grafics").click(function() {
		$(".work .web").addClass("hidden");
		$(".work .drawings").addClass("hidden");

		$(".work .grafics").removeClass("hidden");
	});

	$(".nav .drawings").click(function() {
		$(".work .grafics").addClass("hidden");
		$(".work .web").addClass("hidden");

		$(".work .drawings").removeClass("hidden");
	});

	/* $("img").click(function() {
		$(this).fadeOut(300);
		$(".home").addClass("newbg");
	}); */
};

$(document).ready(main);
