var main = function() {
	 $("#header").fadeTo("slow", 1);

	$("#nav .web").click(function() {
		$("#work").addClass("hidden");
		$(".web").removeClass("hidden");
	});

	$("#nav .grafics").click(function() {
		$("#work").addClass("hidden");
		$(".grafics").removeClass("hidden");
	});

	$("#nav .drawings").click(function() {
		$("#work").addClass("hidden");
		$(".drawings").removeClass("hidden");
	});

};

$(document).ready(main);
