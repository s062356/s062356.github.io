$(function(e) {
	$(".status_box.w_12 div").click(function(e) {
		e.stopPropagation();
		let _this = $(this);
		let item = _this.children("ul");
		// item.addClass("show_list");
		if (!item.hasClass("show_list")) {
			item.addClass("show_list");
		}else {
			item.removeClass("show_list");
		}
	});

	$(".title_font_size.w_19.topsize p").click(function(e) {
		e.stopPropagation();
		let _this = $(this);
		let item = _this.next(".check_list");
		if (!item.hasClass("show_list")) {
			item.addClass("show_list");
		} else {
			item.removeClass("show_list");
		}
	});

	$(".edit p").click(function(e) {
		e.stopPropagation();
		let _this = $(this);
		let item = _this.next("ul");
		if (!item.hasClass("show_list")) {
			item.addClass("show_list");
		} else {
			item.removeClass("show_list");
		}
	});

	$(".edit ul").click(function(e) {
		e.stopPropagation();
		let _this = $(this);
		_this.addClass("show_list");
	})

	$(document).click(function(e) {
		e.stopPropagation();
		$(".status_box.w_12").children("div").children("ul").removeClass("show_list");
		$(".title_font_size.w_19.topsize .check_list").removeClass("show_list");
		$(".edit ul").removeClass("show_list");
	});

})