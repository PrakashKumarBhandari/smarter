


// full page scroll

var myFullpage = new fullpage('#fullpage', {
	scrollBar: true,
	navigation: true,
	navigationPosition: 'right',
	responsiveWidth: 768,
	paralax: true,
	onLeave: function (origin, destination, direction) {
		var loadedSection = this;

		switch (destination.index) {
			case 0:
				$(".navbar-area").removeClass('heading-nav');
				break;
			default:
				$(".navbar-area").addClass('heading-nav');
		}

		switch (destination.index) {
			case 0:
				$(".znt-index").removeClass('zindex');
				break;
			default:
				$(".znt-index").addClass('zindex');
		}

	},
	// afterResponsive: function(isResponsive){
	// }
});




// header
// Header Sticky
$(window).on('scroll', function () {
	if ($(this).scrollTop() > 120) {
		$('.full-page').addClass("zindex");
	}
	else {
		$('.full-page').removeClass("zindex");
	}
});



// slider
document.documentElement.classList.add('js');

/// ----------------------------

const $rootSingle = $('.cSlider--single');
const $rootNav = $('.cSlider--nav');

$rootSingle.slick({
	slide: '.cSlider__item',
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: true,
	fade: true,
	adaptiveHeight: true,
	infinite: true,
	useTransform: true,
	speed: 1000,
	autoplay: true,
	lazyLoad: 'progressive',
	autoplaySpeed: 5000,
	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});

$rootNav.on('init', function (event, slick) {
	$(this).find('.slick-slide.slick-current').addClass('is-active');
})
	.slick({
		slide: '.cSlider__item',
		slidesToShow: 7,
		slidesToScroll: 7,
		dots: false,
		focusOnSelect: false,
		infinite: false,
		responsive: [{
			breakpoint: 1024,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 5,
			}
		}, {
			breakpoint: 640,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 4,
			}
		}, {
			breakpoint: 420,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			}
		}]
	});

$rootSingle.on('afterChange', function (event, slick, currentSlide) {
	$rootNav.slick('slickGoTo', currentSlide);
	$rootNav.find('.slick-slide.is-active').removeClass('is-active');
	$rootNav.find('.slick-slide[data-slick-index="' + currentSlide + '"]').addClass('is-active');
});

$rootNav.on('click', '.slick-slide', function (event) {
	event.preventDefault();
	var goToSingleSlide = $(this).data('slick-index');

	$rootSingle.slick('slickGoTo', goToSingleSlide);
});



// WOW JS
$(window).on('load', function () {
	wow = new WOW(
		{
			boxClass: 'wow',      // default
			animateClass: 'animated', // default
			offset: 0,          // default
			mobile: true,       // default
			live: true        // default
		}
	)
	wow.init();
});


AOS.init();  // AOS initiation


(function ($) {
	$('.accordion').addClass('active').next().slideDown();

	$('.accordion a').click(function (j) {
		var dropDown = $(this).closest('li').find('p');

		$(this).closest('.accordion').find('p').not(dropDown).slideUp();

		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).closest('.accordion').find('a.active').removeClass('active');
			$(this).addClass('active');
		}

		dropDown.stop(false, true).slideToggle();

		j.preventDefault();
	});
})(jQuery);


/** All Toggle effect only show hide basedon on click 
jQuery(".opentooltip").click(function(){	
	if(jQuery(this).hasClass('open')){
		jQuery(this).removeClass('open');
	}else{
		jQuery(this).addClass('open');
	}

	if(jQuery(this).siblings(".tooltipbox").hasClass('showTip')){		
		jQuery(this).siblings(".tooltipbox").removeClass('showTip');
	}else{		
		jQuery(this).siblings(".tooltipbox").addClass('showTip');
	}
});
*/

jQuery(".opentooltip").click(function () {


	jQuery(".opentooltip").removeClass('open');
	jQuery(".tooltipbox").removeClass('showTip');

	if (jQuery(this).hasClass('open')) {
		jQuery(this).removeClass('open');
	} else {
		jQuery(this).addClass('open');
	}

	if (jQuery(this).siblings(".tooltipbox").hasClass('showTip')) {
		jQuery(this).siblings(".tooltipbox").removeClass('showTip');
	} else {
		jQuery(this).siblings(".tooltipbox").addClass('showTip');
	}
});


// sider services
$('.services-slider').owlCarousel({
	items: 4,
	loop: false,
	center: true,
	stagePadding: 15,
	infinite: false,
	margin: 30,
	URLhashListener: true,
	startPosition: 'URLHash'
});




$('.wht-theysay').owlCarousel({
	loop: false,
	margin: 30,
	nav: false,
	dots: true,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 3
		}
	}
})
// end

var swiper = new Swiper(".mySwiper", {
	slidesPerView: "auto",
	// slidesPerView: 4,
	centeredSlides: true,
	spaceBetween: 30,
	pagination: {
		// el: ".swiper-pagination",
		clickable: true,
	},
});
