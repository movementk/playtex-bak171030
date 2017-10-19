(function($) {
	// 메뉴 여닫기 관련
	$(document).on("click", "#header #btn-open-nav", function(e) {
		$("body").addClass("nav-opened");
		e.preventDefault();
	});
	$(document).on("click", "#nav #btn-close-nav", function(e) {
		$("body").removeClass("nav-opened");
	});
	// 메뉴 관련
	$(document).on("click", "#nav .menu > ul > li > a", function(e) {		
		if ($(this).parent().hasClass("active")) {
			$(this).parent().removeClass("active");
		} else {
			$(this).parent().siblings(".active").removeClass("active");
			$(this).parent().addClass("active");
		}
		e.preventDefault();
	});
})(jQuery);