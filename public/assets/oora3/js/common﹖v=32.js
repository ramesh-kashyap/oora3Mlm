// $('body').hide()



var dbTopNav = priorityNavDb.init({
	mainNavWrapper: ".db-topmenu",
	navDropdownLabel: "More",
	navDropdownBreakpointLabel: "",
	throttleDelay: 0,
});

var dbTopNav = priorityNav.init({
	mainNavWrapper: ".topmenu",
	navDropdownLabel: "More",
	navDropdownBreakpointLabel: "",
	throttleDelay: 0,
});

$("body").on("click", ".db-mobile-panel-btn", function (e) {
	e.preventDefault();
});
$("body").on("click", function (e) {
	var dbMobilePanel = $(".db-mobile-panel-block");
	var dbMobilePanelLink = $(".db-mobile-panel-btn");
	if (dbMobilePanelLink.is(e.target)) {
		if ($(".db-mobile-panel-btn").is(".active")) {
			dbMobilePanelLink.removeClass("active");
			dbMobilePanel.removeClass("active");
		} else {
			dbMobilePanelLink.addClass("active");
			dbMobilePanel.addClass("active");
		}
	} else {
		if (
			!dbMobilePanel.is(e.target) &&
			dbMobilePanel.has(e.target).length === 0
		) {
			if ($(".db-mobile-panel-btn").is(".active")) {
				$(".db-mobile-panel-btn").removeClass("active");
				dbMobilePanel.removeClass("active");
			} else {
			}
		}
	}
});

$("body").on("click", ".mobile-panel-btn", function (e) {
	e.preventDefault();
});
$("body").on("click", function (e) {
	var mobilePanel = $(".mobile-panel-block");
	var mobilePanelLink = $(".mobile-panel-btn");
	if (mobilePanelLink.is(e.target)) {
		if ($(".mobile-panel-btn").is(".active")) {
			mobilePanelLink.removeClass("active");
			mobilePanel.removeClass("active");
		} else {
			mobilePanelLink.addClass("active");
			mobilePanel.addClass("active");
		}
	} else {
		if (!mobilePanel.is(e.target) && mobilePanel.has(e.target).length === 0) {
			if ($(".mobile-panel-btn").is(".active")) {
				$(".mobile-panel-btn").removeClass("active");
				mobilePanel.removeClass("active");
			} else {
			}
		}
	}
});



var tapped = false
$(".mobile-topmenu-item--has-menu > .mobile-topmenu-link").on("click", function (e) {

	$link = $(this);

	if ($link.is('.opened')) {
		$link.removeClass('opened').next().slideUp();
	} else {
		$link.addClass('opened').next().slideDown();
	}
	e.preventDefault()

});




$("body").on("click", ".password-type-toggle-btn", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active");
		$(this).parents(".field").find("input").attr("type", "password");
	} else {
		$(this).addClass("active");
		$(this).parents(".field").find("input").attr("type", "text");
	}
});

$(".select").selectpicker({
	liveSearch: true,
	liveSearchPlaceholder: "Search",
});

$(".select-country").selectpicker({
	liveSearch: true,
	liveSearchPlaceholder: "Search country",
	noneSelectedText: "Select country",
});

$(".select-phone-code").selectpicker({
	liveSearch: true,
	liveSearchPlaceholder: "Search country or code",
});

$(".select-currency").selectpicker({
	liveSearch: true,
	liveSearchPlaceholder: "Search currency",
	noneSelectedText: "Select currency",
});

$(".registration-type-tab").on("click", function () {
	index = $(this).parent().index();

	$(this)
		.parents(".registration-type-tabs")
		.find(".registration-type-tab")
		.removeClass("active")
		.eq(index)
		.addClass("active");

	$(".registration-type-tabs-content").each(function () {
		$(this).find(".registration-type-tab-content").hide().eq(index).fadeIn(200);
	});
});

$(".login-type-tab").on("click", function () {
	$(this)
		.parents(".login-type-tabs")
		.find(".login-type-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".login-type-tabs-content")
		.find(".login-type-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$(".recovery-type-tab").on("click", function () {
	$(this)
		.parents(".recovery-type-tabs")
		.find(".recovery-type-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".recovery-type-tabs-content")
		.find(".recovery-type-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

// $(".language-select-item").on('click', function (e) {
// 	e.preventDefault()
// 	$(".language-select-item").removeClass("active")
// 	$(this).addClass("active")
// });

$(".db-setting-tab").on("click", function () {
	$(this)
		.parents(".db-setting-tabs")
		.find(".db-setting-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".db-setting-tabs-content")
		.find(".db-setting-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$("body").on("click", ".acc-info-change-button", function (e) {
	e.preventDefault();
	$(this).parents(".acc-info-item").find(".acc-info-item__state--set").hide();
	$(this)
		.parents(".acc-info-item")
		.find(".acc-info-item__state--change")
		.fadeIn(200);
});

$("body").on("click", ".acc-info-set-button", function (e) {
	e.preventDefault();
	$(this).parents(".acc-info-item").find(".acc-info-item__state--unset").hide();
	$(this)
		.parents(".acc-info-item")
		.find(".acc-info-item__state--change")
		.fadeIn(200);
});

$("body").on("click", ".acc-info-close-button", function (e) {
	e.preventDefault();
	if ($(this).parents(".acc-info-item").is(".acc-info-item--unset")) {
		$(this)
			.parents(".acc-info-item")
			.find(".acc-info-item__state--unset")
			.fadeIn(200);
		$(this)
			.parents(".acc-info-item")
			.find(".acc-info-item__state--change")
			.hide();
	} else {
		$(this)
			.parents(".acc-info-item")
			.find(".acc-info-item__state--set")
			.fadeIn(200);
		$(this)
			.parents(".acc-info-item")
			.find(".acc-info-item__state--change")
			.hide();
	}
});

// $("body").on("click", ".acc-telegram-connect-button", function (e) {
// 	e.preventDefault();
// 	$(".acc-telegram-item__state--disconnected").fadeIn(200);
// 	$(".acc-telegram-item__state--connected").hide();
// 	$(".acc-telegram-item").addClass("acc-telegram-item--connected");
// });

// $("body").on("click", ".acc-telegram-disconnect-button", function (e) {
// 	e.preventDefault();
// 	$(".acc-telegram-item__state--connected").fadeIn(200);
// 	$(".acc-telegram-item__state--disconnected").hide();
// 	$(".acc-telegram-item").removeClass("acc-telegram-item--connected");
// });

// $("body").on("click", ".show-dropdown-menu-item", function (e) {
// 	e.preventDefault();

// 	$(".show-dropdown-menu-button").html($(this).html());
// });

// $("body").on("click", ".act-session-t-i-remove-button", function (e) {
// 	e.preventDefault();
// 	$(this).parents(".act-session-table-item").remove()
// });

$("body").on("click", ".acc-security-change-button", function (e) {
	e.preventDefault();
	$(this)
		.parents(".acc-security-item")
		.find(".acc-security-item__state--set")
		.hide();
	$(this)
		.parents(".acc-security-item")
		.find(".acc-security-item__state--change")
		.fadeIn(200);
});

$("body").on("click", ".acc-security-set-button", function (e) {
	e.preventDefault();
	$(this)
		.parents(".acc-security-item")
		.find(".acc-security-item__state--unset")
		.hide();
	$(this)
		.parents(".acc-security-item")
		.find(".acc-security-item__state--change")
		.fadeIn(200);
});

$("body").on("click", ".acc-security-close-button", function (e) {
	e.preventDefault();
	if ($(this).parents(".acc-security-item").is(".acc-security-item--unset")) {
		$(this)
			.parents(".acc-security-item")
			.find(".acc-security-item__state--unset")
			.fadeIn(200);
		$(this)
			.parents(".acc-security-item")
			.find(".acc-security-item__state--change")
			.hide();
	} else {
		$(this)
			.parents(".acc-security-item")
			.find(".acc-security-item__state--set")
			.fadeIn(200);
		$(this)
			.parents(".acc-security-item")
			.find(".acc-security-item__state--change")
			.hide();
	}
});

// $("body").on("click", ".acc-two-fa-connect-button", function (e) {
// 	e.preventDefault();
// 	$(".acc-two-fa-item__state--disconnected").fadeIn(200)
// 	$(".acc-two-fa-item__state--connected").hide()
// 	$(".acc-two-fa-item").addClass("acc-two-fa-item--connected")
// });

// $("body").on("click", ".acc-two-fa-disconnect-button", function (e) {
// 	e.preventDefault();
// 	$(".acc-two-fa-item__state--connected").fadeIn(200)
// 	$(".acc-two-fa-item__state--disconnected").hide()
// 	$(".acc-two-fa-item").removeClass("acc-two-fa-item--connected")
// });

const dbInfoProductsSlider = new Swiper(".db-info-products-slider .swiper", {
	// direction: 'horizontal',
	slidesPerView: 1,
	spaceBetween: 20,
	// loop: true,

	navigation: {
		nextEl: ".db-info-products-slider .swiper-button-next",
		prevEl: ".db-info-products-slider .swiper-button-prev",
	},

	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		480: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		640: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
	},
});

const dbInfoNewsSlider = new Swiper(".db-info-news-slider .swiper", {
	// direction: 'horizontal',
	slidesPerView: 1,
	spaceBetween: 20,
	// loop: true,

	navigation: {
		nextEl: ".db-info-news-slider .swiper-button-next",
		prevEl: ".db-info-news-slider .swiper-button-prev",
	},

	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		480: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		640: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
	},
});

$("body").on(
	"click",
	".db-transaction-filter-mobile-toogle-button",
	function (e) {
		e.preventDefault();
		if ($(this).is(".active")) {
			$(this).removeClass("active");
			$(".db-transaction-filter-form-reset-button-block").fadeOut(200);
			$(".db-transaction-filter-form-block").slideUp(200);
		} else {
			$(this).addClass("active");
			$(".db-transaction-filter-form-reset-button-block").fadeIn(200);
			$(".db-transaction-filter-form-block").slideDown(200);
		}
	},
);

$(".modal-address-list-item").on("click", function (e) {
	e.preventDefault();
	$(".modal-address-list-item").removeClass("active");
	$(this).addClass("active");
});

$(".ai-staking-form-calc-tab").on("click", function () {
	$(this)
		.parents(".ai-staking-form-calc-tabs")
		.find(".ai-staking-form-calc-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".ai-staking-form-calc-tabs-content")
		.find(".ai-staking-form-calc-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});



$("[name='strategy-radio']").on("change", function () {
	$strategy = $(this).data("strategy");

	if ($strategy == "algorithmic") {
		$(".strategy-radio-feature").hide();
		$(".strategy-radio-feature[data-strategy=" + $strategy + "]").fadeIn(200);
		$(".form-fieldset-block--minimum-term").hide();
		$(".invest-option-checkbox-list-item-wrapper--auto-reinvest").hide();
	} else {
		$(".strategy-radio-feature").hide();
		$(".strategy-radio-feature[data-strategy=" + $strategy + "]").fadeIn(200);
		$(".form-fieldset-block--minimum-term").fadeIn(200);
		$(".invest-option-checkbox-list-item-wrapper--auto-reinvest").fadeIn(200);
	}
});

$(".ai-activity-tab").on("click", function () {
	$(this)
		.parents(".ai-activity-tabs")
		.find(".ai-activity-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".ai-activity-tabs-content")
		.find(".ai-activity-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$(".ai-activity-type-tab").on("click", function () {
	$(this)
		.parents(".ai-activity-type-tabs")
		.find(".ai-activity-type-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(this)
		.parents(".ai-activity-table-block")
		.find(".ai-activity-type-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);

	$type = $(this).data("type");
	if ($type == "my") {
		$(".ai-activity-sort-form-block").fadeIn(200);
	} else {
		$(".ai-activity-sort-form-block").fadeOut(200);
	}
});





$("body").on("click", ".copy-link", function (e) {
	e.preventDefault();
	$this = $(this)
	$this.addClass("copy-link--copy-processing");
	$copiedText = $this.data("clipboard-text")

	navigator.clipboard.writeText($copiedText)
		.then(function () {
			$(".copy-link--copy-processing").addClass("active")
			console.log('Text copied to clipboard');
			setTimeout(function (e) {
				$(".copy-link.active").removeClass(" copy-link--copy-processing").removeClass("active");
			}, 2000);
		},
			function (err) {
				console.error('Error copying text: ', err);
				$(".copy-link--copy-processing").removeClass("copy-link--copy-processing")
			});
});


// $("body").on("click", ".copy-link", function (e) {
// 	e.preventDefault();
// });

// var clipboardLink = new ClipboardJS(".copy-link", {
// 	container: document.body
// });
// clipboardLink.on("success", function (e) {
// 	console.info("Action:", e.action);
// 	console.info("Text:", e.text);
// 	console.info("Trigger:", e.trigger);

// 	e.trigger.classList.add("active");

// 	setTimeout(function (e) {
// 		$(".copy-link.active").removeClass("active");
// 	}, 2000);
// });
// clipboardLink.on("error", function (e) {
// 	console.error("Action:", e.action);
// 	console.error("Trigger:", e.trigger);
// });



$("body").on("click", ".copy-icon-button", function (e) {
	e.preventDefault();
	$this = $(this)
	$this.addClass("copy-icon-button--copy-processing");
	$copiedText = $this.data("clipboard-text")

	navigator.clipboard.writeText($copiedText)
		.then(function () {
			$(".copy-icon-button--copy-processing").addClass("active")
			console.log('Text copied to clipboard');
			setTimeout(function (e) {
				$(".copy-icon-button.active").removeClass(" copy-icon-button--copy-processing").removeClass("active");
			}, 2000);
		},
			function (err) {
				console.error('Error copying text: ', err);
				$(".copy-icon-button--copy-processing").removeClass("copy-icon-button--copy-processing")
			});
});



// var clipboardIconButton = new ClipboardJS(".copy-icon-button", {
// 	container: document.querySelector('.modal')
// });
// clipboardIconButton.on("success", function (e) {
// 	console.info("Action:", e.action);
// 	console.info("Text:", e.text);
// 	console.info("Trigger:", e.trigger);

// 	e.trigger.classList.add("active");

// 	setTimeout(function (e) {
// 		$(".copy-icon-button.active").removeClass("active");
// 	}, 2000);
// });
// clipboardIconButton.on("error", function (e) {
// 	console.error("Action:", e.action);
// 	console.error("Trigger:", e.trigger);
// });




$("body").on("click", ".copy-button", function (e) {
	e.preventDefault();
	$this = $(this)
	$this.addClass("copy-button--copy-processing");
	$copiedText = $this.data("clipboard-text")

	navigator.clipboard.writeText($copiedText)
		.then(function () {
			$(".copy-button--copy-processing").addClass("active")
			console.log('Text copied to clipboard');
			setTimeout(function (e) {
				$(".copy-button.active").removeClass(" copy-button--copy-processing").removeClass("active");
			}, 2000);
		},
			function (err) {
				console.error('Error copying text: ', err);
				$(".copy-button--copy-processing").removeClass("copy-button--copy-processing")
			});
});



// $("body").on("click", ".copy-button", function (e) {
// 	e.preventDefault();
// });

// var clipboardButton = new ClipboardJS(".copy-button", {
// 	container: document.body
// });
// clipboardButton.on("success", function (e) {
// 	console.info("Action:", e.action);
// 	console.info("Text:", e.text);
// 	console.info("Trigger:", e.trigger);

// 	e.trigger.classList.add("active");
// 	setTimeout(function (e) {
// 		$(".copy-button.active").removeClass("active");
// 	}, 2000);
// });
// clipboardButton.on("error", function (e) {
// 	console.error("Action:", e.action);
// 	console.error("Trigger:", e.trigger);
// });





// $("[data-clipboard=true]").each(function (i, el) {
// 	let element = $(el);
// 	new ClipboardJS(el, {
// 		container: element.data("container") ? (element.data("container"))[0] : null
// 	}).on('success', function (e) {
// 		e.clearSelection();
// 		alert("Copied")
// 	});
// });

// $(".modal").on("shown.bs.modal", function () {
// 	console.log('a', Clipboard, $('#copy'), $("#copy-input").val());
// 	var clipboard = new Clipboard('#copy')
// });



$(".loan-type-tab").on("click", function () {
	$(this)
		.parents(".loan-type-tabs")
		.find(".loan-type-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(this)
		.parents(".loan-table-block")
		.find(".loan-type-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$("body").on("click", ".loan-t-g-h-toggle-button", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active");
		$(this)
			.parents(".loan-table-group")
			.find(".loan-table-items-wrapper")
			.slideUp(300);
	} else {
		$(this).addClass("active");
		$(this)
			.parents(".loan-table-group")
			.find(".loan-table-items-wrapper")
			.slideDown(300);
	}
});

$(".db-affiliate-tab").on("click", function () {
	$(this)
		.parents(".db-affiliate-tabs")
		.find(".db-affiliate-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".db-affiliate-tabs-content")
		.find(".db-affiliate-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
	autosize.update($("textarea"));
});

$(".db-partner-type-tab").on("click", function () {
	$(this)
		.parents(".db-partner-type-tabs")
		.find(".db-partner-type-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(this)
		.parents(".db-partner-table-block")
		.find(".db-partner-type-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$("body").on("click", ".db-promo-banner-size-item", function (e) {
	e.preventDefault();

	$(".db-promo-banner-size-item").removeClass("active");
	$(this).addClass("active");
});

autosize($("textarea"));

$(".front-task-tab").on("click", function () {
	$(this)
		.parents(".front-task-tabs")
		.find(".front-task-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".front-task-tabs-content")
		.find(".front-task-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$(".front-blog-tab").on("click", function () {
	$(this)
		.parents(".front-blog-tabs")
		.find(".front-blog-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".front-blog-tabs-content")
		.find(".front-blog-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});

$("body").on("click", ".front-help-menu-dropdown-title", function (e) {
	e.preventDefault();
	if ($(this).is(".active")) {
		$(this).removeClass("active");
		$(this)
			.parents(".front-help-menu-block")
			.find(".front-help-menu-wrapper")
			.slideUp(300);
	} else {
		$(this).addClass("active");
		$(this)
			.parents(".front-help-menu-block")
			.find(".front-help-menu-wrapper")
			.slideDown(300);
	}
});



$("body").on("click", ".table-show-all-button", function (e) {
	e.preventDefault();
	$table = $(this).data("table")

	if ($(this).is(".active")) {
		$(this).removeClass("active");
		$(this)
			.parents("[data-table=" + $table + "]")
			.find("[data-table-elements='hidden']")
			.slideUp(300);
	} else {
		$(this).addClass("active");
		$(this)
			.parents("[data-table=" + $table + "]")
			.find("[data-table-elements='hidden']")
			.slideDown(300);
	}
});




$(".front-earn-calc-form-calc-tab").on("click", function () {
	$(this)
		.parents(".front-earn-calc-form-calc-tabs")
		.find(".front-earn-calc-form-calc-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(this).closest('.front-earn-calc-form-calc-block')
		.find(".front-earn-calc-form-calc-tabs-content")
		.find(".front-earn-calc-form-calc-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});



const frontPartnerSlider = new Swiper(".front-partner-slider .swiper", {
	// direction: 'horizontal',
	slidesPerView: 6,
	spaceBetween: 24,
	loop: true,

	navigation: {
		nextEl: ".front-partner-slider .swiper-button-next",
		prevEl: ".front-partner-slider .swiper-button-prev",
	},

	breakpoints: {
		320: {
			slidesPerView: 2,
			spaceBetween: 8,
		},
		576: {
			slidesPerView: 2,
			spaceBetween: 8,
		},
		767: {
			slidesPerView: 3,
			spaceBetween: 16,
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 16,
		},
		1200: {
			slidesPerView: 5,
			spaceBetween: 16,
		},
		1400: {
			slidesPerView: 6,
			spaceBetween: 24,
		},
	},
});




const frontTeamSlider = new Swiper(".front-team-slider .swiper", {
	// direction: 'horizontal',
	slidesPerView: 6,
	spaceBetween: 24,
	loop: true,

	navigation: {
		nextEl: ".front-team-slider .swiper-button-next",
		prevEl: ".front-team-slider .swiper-button-prev",
	},

	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 8,
		},
		576: {
			slidesPerView: 1,
			spaceBetween: 8,
		},
		767: {
			slidesPerView: 2,
			spaceBetween: 16,
		},
		992: {
			slidesPerView: 3,
			spaceBetween: 16,
		},
		1200: {
			slidesPerView: 3,
			spaceBetween: 16,
		},
		1400: {
			slidesPerView: 3,
			spaceBetween: 24,
		},
	},
});



$(".front-academy-tab").on("click", function () {
	$(this)
		.parents(".front-academy-tabs")
		.find(".front-academy-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".front-academy-tabs-content")
		.find(".front-academy-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});


$(".front-guide-tab").on("click", function () {
	$(this)
		.parents(".front-guide-tabs")
		.find(".front-guide-tab")
		.removeClass("active")
		.eq($(this).parent().index())
		.addClass("active");
	$(".front-guide-tabs-content")
		.find(".front-guide-tab-content")
		.hide()
		.eq($(this).parent().index())
		.fadeIn(200);
});



$("body").on("click", ".front-fees-menu-link", function (e) {
	var fixed_offset = 80;
	$("html,body")
		.stop()
		.animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 0);
	e.preventDefault();
});

$("body").on("click", ".front-policy-menu-link", function (e) {
	var fixed_offset = 80;
	$("html,body")
		.stop()
		.animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 0);
	e.preventDefault();
});



$("body").on("click", ".field-refferal-title", function (e) {
	e.preventDefault();

	if ($(this).is(".active")) {
		$(this).removeClass("active");
		$(this)
			.parents(".field-refferal-block")
			.find(".field-refferal-field")
			.slideUp(300);
	} else {
		$(this).addClass("active");
		$(this)
			.parents(".field-refferal-block")
			.find(".field-refferal-field")
			.slideDown(300);
	}
});





toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": false,
	"progressBar": false,
	"positionClass": "toast-bottom-right",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "500000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
};

const customToastInfo = `
 <div class="notification">
  <div class="notification__inner">
   <div class="notification__icon">
				<div class="notification__icon-image"></div>
			</div>
   <div class="notification__content">
    <div class="notification__title">[title]</div>
    <div class="notification__descr">[html]</div>
   </div>
  </div>
 </div>
`;
const customToastSuccess = `
 <div class="notification">
  <div class="notification__inner">
   <div class="notification__icon">
				<div class="notification__icon-image"></div>
			</div>
   <div class="notification__content">
    <div class="notification__title">[title]</div>
    <div class="notification__descr">[html]</div>
   </div>
  </div>
 </div>
`;
const customToastWarning = `
 <div class="notification">
  <div class="notification__inner">
   <div class="notification__icon">
				<div class="notification__icon-image"></div>
			</div>
   <div class="notification__content">
    <div class="notification__title">[title]</div>
    <div class="notification__descr">[html]</div>
   </div>
  </div>
 </div>
`;
const customToastError = `
 <div class="notification">
  <div class="notification__inner">
   <div class="notification__icon">
				<div class="notification__icon-image"></div>
			</div>
   <div class="notification__content">
    <div class="notification__title">[title]</div>
    <div class="notification__descr">[html]</div>
   </div>
  </div>
 </div>
`;

var $frontFeeAnchor = $(".front-fee-anchor");
var $frontPolicyAnchor = $(".front-policy-anchor");

$(window).scroll(function () {


	$frontFeeAnchor.each(function (i, el) {
		var top = $(el).offset().top - 100;
		var bottom = top + $(el).height();
		var scroll = $(window).scrollTop();
		var id = $(el).attr("id");
		if (scroll > top && scroll < bottom) {
			$(".front-fees-menu-link.active").removeClass("active");
			$('.front-fees-menu-link[href="#' + id + '"]').addClass("active");
		}
	});

	$frontPolicyAnchor.each(function (i, el) {
		var top = $(el).offset().top - 100;
		var bottom = top + $(el).height();
		var scroll = $(window).scrollTop();
		var id = $(el).attr("id");
		if (scroll > top && scroll < bottom) {
			$(".front-policy-menu-link.active").removeClass("active");
			$('.front-policy-menu-link[href="#' + id + '"]').addClass("active");
		}
	});

});