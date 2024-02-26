$(document).ready(function () {
	$(".nav-link").on("click", function (e) {
		e.preventDefault(); // デフォルトのイベントをキャンセル
		// クリックされたタブをアクティブにする
		$(".nav-link").removeClass("active");
		$(this).addClass("active");

		// 対応するコンテンツを表示する
		var target = $(this).attr("href");
		$(".tab-pane").removeClass("active show").addClass("fade");
		$(target).addClass("active show").removeClass("fade");
	});
});
