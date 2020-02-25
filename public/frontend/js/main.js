
(function($){
	
	"use strict";
	
	$(document).on('ready',function(){
		//home slider
		 $(".home-top-slider").owlCarousel({	 
			autoplay: true,
			autoplayTimeout: 3500,
			dots : false,
			nav : true,
			responsiveClass:true,
			loop : true,
			margin : 15,
			navText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			responsive:{
				0:{
					items:1
				},
				550:{
					items:1
				},
				900:{
					items:1
				},
				1100:{
					items:1
				}
			}	 
		});
    
		//counter-up js
        $('.counter').counterUp({
            delay: 5,
            time: 3000
        });
    
		//Progress bar
		jQuery('.skillbar').each(function(){
			jQuery(this).find('.skillbar-bar').animate({
				width:jQuery(this).attr('data-percent')
			},6000);
		});
    
		//logo-carousel
        $('.logo-carousel').owlCarousel({
			autoplay: true,
			loop:true,
			margin:30,
			dots : false,
			nav:false,
			responsive:{
				0:{
					items:4
				},
				600:{
					items:4
				},
				1000:{
					items:6
				}
			}
		});
    
		//client-carousel
        $('.client-carousel').owlCarousel({
			autoplay: true,
			loop:true,
			margin:30,
			dots : false,
			nav:false,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:2
				},
				1000:{
					items:3
				}
			}
		});
    
    
    
		//top to bottom
        $(window).on('scroll', function(){
            if ($(this).scrollTop() >= 150)
                {
                    $('.btn-set').fadeIn(200);
                }
            else{
                $('.btn-set').fadeOut(200);
            }
        });
		

        $('.btn-set').on('click',function(){

            $('body,html').animate({scrollTop:0}, 3000);
        });
		
    
		//wow.js
		new WOW().init();
    
    
		//search box
		$('.header-search').on('click',function(){
			$('.search-area').toggleClass('toggled');
		});
		
    
		
	});

})(jQuery);