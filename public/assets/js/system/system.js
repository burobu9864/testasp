$(document).ready(function () {
	$(".nav-link").on("click", function () {
		$(".tab-pane").removeClass("active show").addClass("fade");
		var target = $(this).attr("href");
		$(target).addClass("active show").removeClass("fade");
		return false;
	});
});
