(function ($) {
	"use strict";
	
		$(document).ready(function(){
			$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
				$(this).toggleClass('open');
			});
			
			$('.carousel-inner a').click(function(){
				//return false;
			});
			
			$('.owl-carousel').owlCarousel({
				loop:true,
				autoplay:true,
				margin:50,
				stagePadding: 200,
				nav:false,
				responsive:{
					0:{
						items:1,
						stagePadding: 10
					},
					480:{
						items:2,
						stagePadding: 50
					},
					768:{
						items:3,
						stagePadding: 50
					},
					1000:{
						items:3
					}
				}
			})
			
			
			var owl = $('.owl-carousel');
			owl.owlCarousel();
			// Go to the next item
			$('.customNextBtn').click(function() {
				owl.trigger('next.owl.carousel');
			})
			// Go to the previous item
			$('.customPrevBtn').click(function() {
				// With optional speed parameter
				// Parameters has to be in square bracket '[]'
				owl.trigger('prev.owl.carousel', [300]);
			})
			
			
			$('.carousel-inner .carousel-item:first-child').addClass('active');
			
		});

}(jQuery));