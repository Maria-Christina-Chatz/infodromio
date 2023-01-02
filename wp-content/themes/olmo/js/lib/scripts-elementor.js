(function($){
	'use strict';	
	$( window ).on( 'elementor/frontend/init', function() {

		var owl_carousel = function(){
			$('.owl-carousel-main').each( function() {
				var $carousel = $(this);
				var $rtl = ($carousel.data('rtl') !== undefined) ? $carousel.data('rtl') : false;
				var $items = ($carousel.data('items') !== undefined) ? $carousel.data('items') : 1;
				var $items_tablet = ($carousel.data('items-tablet') !== undefined) ? $carousel.data('items-tablet') : 1;
				var $items_mobile_landscape = ($carousel.data('items-mobile-landscape') !== undefined) ? $carousel.data('items-mobile-landscape') : 1;
				var $items_mobile_portrait = ($carousel.data('items-mobile-portrait') !== undefined) ? $carousel.data('items-mobile-portrait') : 1;

				$carousel.owlCarousel ({
					rtl: $rtl,
					loop : ($carousel.data('loop') !== undefined) ? $carousel.data('loop') : true,
					items : $carousel.data('items'),
					margin : ($carousel.data('margin') !== undefined) ? $carousel.data('margin') : 30,
					dots : ($carousel.data('dots') !== undefined) ? $carousel.data('dots') : true,
					nav : ($carousel.data('nav') !== undefined) ? $carousel.data('nav') : false,
					navText : ['<i class="fal fa-long-arrow-up"></i>', '<i class="fal fa-long-arrow-down"></i>'],
					autoplay : ($carousel.data('autoplay') !== undefined) ? $carousel.data('autoplay') : true,
					autoplayTimeout : ($carousel.data('autoplay-timeout') !== undefined) ? $carousel.data('autoplay-timeout') : 5000,
					animateIn : ($carousel.data('animatein') !== undefined) ? $carousel.data('animatein') : false,
					animateOut : ($carousel.data('animateout') !== undefined) ? $carousel.data('animateout') : false,
					mouseDrag : ($carousel.data('mouse-drag') !== undefined) ? $carousel.data('mouse-drag') : true,
					autoWidth : ($carousel.data('auto-width') !== undefined) ? $carousel.data('auto-width') : false,
					autoHeight : ($carousel.data('auto-height') !== undefined) ? $carousel.data('auto-height') : false,
					center : ($carousel.data('center') !== undefined) ? $carousel.data('center') : false,
					responsiveClass: true,
					dotsEachNumber: true,
					smartSpeed: 600,
					autoplayHoverPause: true,
					responsive : {
						0 : {
							items : $items_mobile_portrait,
						},
						480 : {
							items : $items_mobile_landscape,
						},
						768 : {
							items : $items_tablet,
						},
						992 : {
							items : $items,
						}
					}
				});

				var totLength = $('.owl-dot', $carousel).length;
				$('.total-no', $carousel).html(totLength);
				$('.current-no', $carousel).html(totLength);
				$carousel.owlCarousel();
				$('.current-no', $carousel).html(1);
				$carousel.on('changed.owl.carousel', function(event) {
					var total_items = event.page.count;
					var currentNum = event.page.index + 1;
					$('.total-no', $carousel ).html(total_items);
					$('.current-no', $carousel).html(currentNum);
				});
			});
		}; // end

		elementorFrontend.hooks.addAction( 'frontend/element_ready/olmo-testmonials.default', function($scope, $){
			owl_carousel();
		} );
		
		elementorFrontend.hooks.addAction( 'frontend/element_ready/olmo-partner.default', function($scope, $){
			owl_carousel();
		} );

		elementorFrontend.hooks.addAction( 'frontend/element_ready/olmo-slider.default', function($scope, $){
			
			$('.slider').slider({
				full_width: false,
				interval:6000,
				transition:1000,
				draggable: false,
				indicators: true,
			});
				
		} );

		elementorFrontend.hooks.addAction( 'frontend/element_ready/olmo-counter.default', function($scope, $){
			// Counter
			$(".count-number").appear(function(){
				$('.count-number').each(function(){
					var datacount = $(this).attr('data-count');
					$(this).find('.counter').delay(8000).countTo({
						from: 10,
						to: datacount,
						speed: 4000,
						refreshInterval: 50,
					});
				});
			});
		} );

		elementorFrontend.hooks.addAction( 'frontend/element_ready/olmo-portfolios.default', function($scope, $){
			
			$('.grid-loaded').imagesLoaded(function () {

				// filter items on button click
				$('.masonry-filter').on('click', 'button', function () {
					var filterValue = $(this).attr('data-filter');
					$grid.isotope({
						filter: filterValue
					});
				});
		
				// change is-checked class on buttons
				$('.masonry-filter button').on('click', function () {
					$('.masonry-filter button').removeClass('is-checked');
					$(this).addClass('is-checked');
					var selector = $(this).attr('data-filter');
					$grid.isotope({
						filter: selector
					});
					return false;
				});
		
				// init Isotope
				var $grid = $('.masonry-wrap').isotope({
					itemSelector: '.masonry-image',
					percentPosition: true,
					transitionDuration: '0.7s',
					masonry: {
						// use outer width of grid-sizer for columnWidth
						columnWidth: '.masonry-image',
					}
				});
				
			});
			
		} );

	});	

})(jQuery);