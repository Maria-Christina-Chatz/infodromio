jQuery(window).load(function() {
	
	"use strict";
	
	var preloader = jQuery('#loading'),
	loader = preloader.find('#loading-center-absolute');
	loader.fadeOut();
	preloader.delay(400).fadeOut('slow');

});

jQuery(window).on('scroll', function() {
		
	"use strict";

							
	/*----------------------------------------------------*/
	/*	Navigtion Menu Scroll
	/*----------------------------------------------------*/	
	
	var b = jQuery(window).scrollTop();
	
	if( b > 80 ){		
		jQuery(".wsmainfull").addClass("scroll");
	} else {
		jQuery(".wsmainfull").removeClass("scroll");
	}
	( jQuery(this).scrollTop() > 80 ) ? jQuery(".wsmobileheader").addClass('scroll') : jQuery(".wsmobileheader").removeClass('scroll');

});

jQuery(document).ready(function( $ ) {
	"use strict";
	
	$(".content").fitVids();

	/*----------------------------------------------------*/
		/*	ScrollUp
		/*----------------------------------------------------*/

		// Scroll top top
		var offset = 200,
		offset_opacity = 1200,
		scroll_top_duration = 700,
		$back_to_top = $('.dmtop');

	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('dmtop dmtop-show') : $back_to_top.removeClass('dmtop-show cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
			}, scroll_top_duration
		);
	});

	new WOW().init();	
	
	/*======================= tooltip==============*/
  
  	var authorContainer = $('body');
    // This will handle stretching the cells.
	
    $('.layout-full .stretch-content').each(function(){
		
        var $$ = $(this);

        var onResize = function(){

            $$.css({
                'margin-left' : 0,
                'margin-right' : 0,
                'padding-left' : 0,
                'padding-right' : 0
            });

            var leftSpace = $$.offset().left - authorContainer.offset().left;
            var rightSpace = authorContainer.outerWidth() - leftSpace - $$.parent().outerWidth();

            $$.css({
                'margin-left' : -leftSpace,
                'margin-right' : -rightSpace,
                'padding-left' : $$.data('stretch-type') === 'full' ? leftSpace : 0,
                'padding-right' : $$.data('stretch-type') === 'full' ? rightSpace : 0
            });
        };

        $(window).resize( onResize );
        onResize();

        $$.css({
            'border-left' : 0,
            'border-right' : 0
        });
    });
	
	$('.gallery-carousel').each(function() {		
		var margin = $(this).data('margin');
		var items = $(this).data('items');
		var nav = $(this).data('nav');
		var dots = $(this).data('dots');
		var autoplay = $(this).data('autoplay');
		var items_tablet = 1;
		$('.gallery-carousel').owlCarousel({
			loop:true,
			margin: margin,
			nav: nav,
			autoplay: autoplay,
			dots: dots,
			navText : ['<i class="cs-icon cs-back"></i>','<i class="cs-icon cs-next"></i>'],
			responsive : {
	        0 : {
	          items : 1,
	        },
	        480 : {
	          items : 1,
	        },
	        768 : {
	          items : items_tablet,
	        },
	        992 : {
	          items : items,
	        }
	      }
		});
	});
	
	/*----------------------------------------------------*/
	/*	Video Link Lightbox
	/*----------------------------------------------------*/		
	$('.video-popup2').each(function(){
		var url = $(this).data('url');
		$(this).magnificPopup({
			type: 'iframe',				  
			iframe: {
				patterns: {
					youtube: {				   
					index: 'youtube.com',
					src: url
					}
				}
			}		  		  
		});
	});
	
	/*----------------------------------------------------*/
	/*	Video Link Lightbox
	/*----------------------------------------------------*/		
	$('.gallery-content').each(function() { // the containers for all your galleries
		$(this).magnificPopup({
		delegate: 'a', // the selector for gallery item
		type: 'image',
		gallery: {
			enabled:true
		}
		});
	});

	$('.image-link').magnificPopup({
		type: 'image'
	});

	/*----------------------------------------------------*/
	/*	Masonry Grid
	/*----------------------------------------------------*/

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
	
});