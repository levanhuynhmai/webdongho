$(document).ready(function ($) {
	awe_backtotop();
	awe_category();
	awe_tab();
	awe_lazyloadImage();
	awe_owl();
	$('#trigger-mobile').click(function(){
		$(".nav-evo-watch").addClass('active');
		$(".backdrop__body-backdrop___1rvky").addClass('active');
	});
	$('.site-header-search').click(function(){
		$("body").addClass('show-search');
		$(".backdrop__body-backdrop___1rvky").addClass('active');
	});
	$('.site-header__search').click(function(){
		$("body").removeClass('show-search');
		$(".backdrop__body-backdrop___1rvky").removeClass('active');
	});
	$('.backdrop__body-backdrop___1rvky').click(function(){
		$("body").removeClass('show-search');
		$(".nav-evo-watch").removeClass('active');
		$(".backdrop__body-backdrop___1rvky").removeClass('active');
	});
	$(window).resize( function(){
		if ($(window).width() > 1023){
			$(".nav-evo-watch").removeClass('active');
			$(".backdrop__body-backdrop___1rvky").removeClass('active');
		}
	});
	$('.had-click h3').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$(this).parent().toggleClass('active');
		return false;
	});
	$('.has-childs .fa-angle-down').click(function(e){
		$(this).parent().parent().toggleClass('active');
		return false;
	});
	$('.has-childs2 .fa-angle-right').click(function(e){
		$(this).parent().parent().toggleClass('active');
		return false;
	});
	$('.fix-navs .hmega .fa-angle-down').click(function(e){
		$(this).parent().toggleClass('active');
		return false;
	});
	$('.open-filters').click(function(e){
		$(this).toggleClass('open');
		$('.evo-sidebar').toggleClass('open');
	});
	if ($(window).width() < 767) {
		$('.evo-tab-product-mobile .tab-content .evo-product-tabs-header').on('click', function(e){
			e.preventDefault();
			var $this = $(this);
			$this.parents('.evo-tab-product-mobile .tab-content').find('.rte').stop().slideToggle();
			$(this).parent().toggleClass('active')
			return false;
		});
	}
});
function awe_lazyloadImage() {
	setTimeout(function(){
		var i = $("[data-lazyload]");
		i.length > 0 && i.each(function() {
			var i = $(this), e = i.attr("data-lazyload");
			i.appear(function() {
				i.removeAttr("height").attr("src", e);
				i.parent().removeClass("lazyload");
			}, {
				accX: 0,
				accY: 120
			}, "easeInCubic");
		});
		var e = $("[data-lazyload2]");
		e.length > 0 && e.each(function() {
			var i = $(this), e = i.attr("data-lazyload2");
			i.appear(function() {
				i.css("background-image", "url(" + e + ")");
			}, {
				accX: 0,
				accY: 120
			}, "easeInCubic");
		});
	},100);
} window.awe_lazyloadImage=awe_lazyloadImage;
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	hidePopup('.awe-popup'); 	
	setTimeout(function(){$('.loading').removeClass('loaded-content');},500);
	return false;
})
function awe_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function(){$(selector).animate({right: '-300px'}, 500);}, 3500);
}  window.awe_showNoitice=awe_showNoitice;
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");str= str.replace(/đ/g,"d"); str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");str= str.replace(/-+-/g,"-");str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .Collapsible__Plus').click(function(e){
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;
function awe_owl() { 
	$('.owl-carousel:not(.not-dqowl)').each( function(){
		var xss_item = $(this).attr('data-xss-items');
		var xs_item = $(this).attr('data-xs-items');
		var md_item = $(this).attr('data-md-items');
		var sm_item = $(this).attr('data-sm-items');
		var lg_item = $(this).attr('data-lg-items');
		var margin=$(this).attr('data-margin');
		var dot=$(this).attr('data-dot');
		var nav=$(this).attr('data-nav');
		var loop=$(this).attr('data-loop');
		var autoplay=$(this).attr('data-autoplay');
		var time=$(this).attr('data-time');
		if (typeof margin !== typeof undefined && margin !== false){}else{margin = 30;}
		if (typeof margin !== typeof undefined && margin !== false){}else{margin = 30;}
		if (typeof xss_item !== typeof undefined && xss_item !== false){}else{xss_item = 1;}
		if (typeof xs_item !== typeof undefined && xs_item !== false){}else{xs_item = 1;}
		if (typeof sm_item !== typeof undefined && sm_item !== false){}else{sm_item = 3;}
		if (typeof md_item !== typeof undefined && md_item !== false){}else{md_item = 3;}
		if (typeof lg_item !== typeof undefined && lg_item !== false){}else{lg_item = 4;}
		if (typeof dot !== typeof undefined && dot !== true){dot= true;}else{dot = false;}
		if (typeof loop !== typeof undefined && loop !== true){loop= true;}else{loop = false;}
		$(this).owlCarousel({
			loop:loop,
			margin:Number(margin),
			responsiveClass:true,
			dots:dot,
			nav:nav,
			navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
			slideSpeed : 600,
			paginationSpeed : 400,
			autoplay:autoplay,
			autoplayTimeout:Number(time),
			autoplayHoverPause:false,
			lazyLoad: true,
			responsive:{
				0:{
					items:Number(xss_item),
					margin:7
				},
				543:{
					items:Number(xs_item)
				},
				768:{
					items:Number(sm_item)
				},
				992:{
					items:Number(md_item)
				},
				1200:{
					items:Number(lg_item)
				}
			}
		})
	})
} window.awe_owl=awe_owl;
if ($(window).width() > 767) {
	$(".evo-owl-product").owlCarousel({
		nav:true,
		navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
		margin: 10,
		slideSpeed : 600,
		paginationSpeed : 400,
		singleItem:false,
		pagination: false,
		dots: false,
		autoplay:false,
		autoHeight: false,
		loop: false,
		responsive: {
			0:{items:2, margin:7},
			543:{items:2},
			768:{items:3},
			991:{items:3},
			992:{items:4},
			1300:{items:4},
			1590:{items:4}
		}
	});
};
function awe_backtotop() { 
	if ($('.back-to-top').length) {
		var scrollTrigger = 100,
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('.back-to-top').addClass('show');
				} else {
					$('.back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('.back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
} window.awe_backtotop=awe_backtotop;
function awe_tab() {
	$(".e-tabs:not(.not-dqtab)").each( function(){
		$(this).find('.tabs-title li:first-child').addClass('current');
		$(this).find('.tab-content').first().addClass('current');
		$(this).find('.tabs-title li').click(function(){
			var tab_id = $(this).attr('data-tab');
			var url = $(this).attr('data-url');
			$(this).closest('.e-tabs').find('.tab-viewall').attr('href',url);
			$(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
			$(this).closest('.e-tabs').find('.tab-content').removeClass('current');
			$(this).addClass('current');
			$(this).closest('.e-tabs').find("#"+tab_id).addClass('current');
		});    
	});
} window.awe_tab=awe_tab;
$('.dropdown-toggle').click(function() {
	$(this).parent().toggleClass('open'); 	
}); 
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$('body').click(function(event) {
	if (!$(event.target).closest('.dropdown').length) {
		$('.dropdown').removeClass('open');
	};
});
$(document).on('keydown','#qty, #quantity-detail, .number-sidebar',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
jQuery(document).ready(function(){
	if ($('.addThis_listSharing').length > 0){
		$(window).scroll(function(){
			if(jQuery(window).scrollTop() > 100 ) {
				jQuery('.addThis_listSharing').addClass('is-show');
			} else {
				jQuery('.addThis_listSharing').removeClass('is-show');
			}
		});
		$('.content_popupform form.contact-form').submit(function(e){
			e.preventDefault();		
			$.ajax({
				type: 'POST',
				url:'/contact',
				data: $('.content_popupform form.contact-form').serialize(),
				success:function(data){		
					$('.modal-contactform.fade.in').modal('hide');
					setTimeout(function(){ 		
						$('.modal-succesform').modal('show');					
						setTimeout(function(){							
							$('.modal-succesform.fade.in').modal('hide');	
						}, 5000);
					},300);
				},

			})
		});
		$(".modal-succesform").on('hidden.bs.modal', function() {
			location.reload();
		});
	}
	if ($('.layoutProduct_scroll').length > 0 && jQuery(window).width() < 768) {
		var curScrollTop = 0;
		$(window).scroll(function(){	
			var scrollTop = $(window).scrollTop();
			if(scrollTop > curScrollTop  && scrollTop > 200 ) {
				$('.layoutProduct_scroll').removeClass('scroll-down').addClass('scroll-up');
			}
			else {
				if (scrollTop > 200 && scrollTop + $(window).height() + 150 < $(document).height()) {
					$('.layoutProduct_scroll').removeClass('scroll-up').addClass('scroll-down');	
				}
			}
			if(scrollTop < curScrollTop  && scrollTop < 200 ) {
				$('.layoutProduct_scroll').removeClass('scroll-up').removeClass('scroll-down');
			}
			curScrollTop = scrollTop;
		});
	}
});