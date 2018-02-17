/*
* ----------------------------------------------------------------------------------------
    Template Name: Selfy HTML5 Photography Responsive Template.
    Template URI: https://spellbit.com/
    Description: Fabric is an e-Commerce PSD Template that is designed to build modern, responsive and user friendly e-Commerce site easily.
    Author: bootscore
    Author URI: https://spellbit.com/
    Version: 1.0

* ----------------------------------------------------------------------------------------
*/

(function ($) {
	'use strict';

	jQuery(document).on("ready", function () {


        
		/*
		 *---------------------------------------------------------------------------
		 *                            STICKY MENU JS
		 *---------------------------------------------------------------------------
		 */

		$(window).on('scroll', function () {
			var scroll = $(window).scrollTop();
			if (scroll < 200) {
				$(".bottom-header").removeClass("sticky fadeInDown animated");
			} else {
				$(".bottom-header").addClass("sticky fadeInDown animated");
			}
		});


        
        
         
        $('.single-slide').parallax("50%", 0.2);
	if ($(window).width() < 991) {
        $('.single-slide').parallax("50%", 0);
    };


         $('.video-pop').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
        
        
        
         $(".slider-active").on("translate.owl.carousel", function () {
            $(".slide-content h2").removeClass("animated bounceIn").css("opacity", "0");
            $(".slide-content p").removeClass("animated flipInX").css("opacity", "0");
            $(".slide-content a.btn-mr-b").removeClass("animated slideInLeft").css("opacity", "0");
            $(".slide-content a.btn-mr").removeClass("animated slideInRight").css("opacity", "0");
        });

        $(".slider-active").on("translated.owl.carousel", function () {
            $(".slide-content h2").addClass("animated bounceIn").css("opacity", "1");
            $(".slide-content p").addClass("animated flipInX").css("opacity", "1");
            $(".slide-content a.btn-mr-b").addClass("animated slideInLeft").css("opacity", "1");
            $(".slide-content a.btn-mr").addClass("animated slideInRight").css("opacity", "1");
        });
 
        $('.services-active').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            center: true,
            mouseDrag: true,
            autoplay: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: false,
            responsive: {
                210: {
                    items: 1,
                    //center: false,
                },
                320: {
                    items: 1,
                    //center: false,
                },
                479: {
                    items: 1,
                    //center: false,
                },
                768: {
                    items: 2,
                    center: false,
                },
                980: {
                    items: 3
                },
                1199: {
                    items: 3
                }
            }
        });
        //testimonials active
        $('.testimonial-active').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            mouseDrag: true,
            autoplay: true,
            dots: false,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2,
                },
                768: {
                    items: 2,
                    
                },
                980: {
                    items: 3
                },
                1199: {
                    items: 3
                }
            }
        });
 
        $('.gallery-active').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            center: true,
            mouseDrag: true,
            autoplay: true,
            dots: false,
            autoplaySpeed: 1000,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 2,
                    center: false,
                },
                768: {
                    items: 3,
                    center: false,
                },
                980: {
                    items: 4,
                    center: false,
                },
                1199: {
                    items: 5
                }
            }
        });
        
        
     
        // slider activatin
        $('.slider-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 6000,
            nav: true,
            navText: ['<i class="fa fa-angle-double-left"></i>', '<i class="fa fa-angle-double-right"></i>'],
            mouseDrag: false,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
        
        
        
        /*
        ==========================================
        SEARCH OPTION 
        ==========================================
        */
        $(".click-serach-step").on('click', function () {
            $(".search-rapper-step").toggleClass("active");
            return false;
        });
        $("a.serc-clse").on('click', function () {
            $(".search-rapper-step").removeClass("active");
            return false;
        });
        
        
        
        // ofcanvas menu kahini
           
        // change span icon toogle class
        $(".menu-click").on('click', function () {
            $(".menu-click").toggleClass("cg");
            return false;
                
        });
        $(".close-offcanvasmenu,.offcanvas-overlay").on("click", function(){
            $(".menu-click").removeClass("cg");
        });
        
        $(".menu-click").on("click", function(){
            
           $(".offcanvas-menu-rapper,.offcanvas-overlay").toggleClass("active"); 
            return false;
        });
        
        
        $(".close-offcanvasmenu,.offcanvas-overlay").on("click", function(){
            $(".offcanvas-menu-rapper,.offcanvas-overlay").removeClass("active"); 
            return false;
        });
        

        
        if ($(window).width() < 767) {
           $(".offcanvas-menu ul li a").on("click", function(){
             $(".offcanvas-menu-rapper,.offcanvas-overlay").removeClass("active"); 
           }); 

 $(".offcanvas-menu ul li a").on("click", function(){
            $(".menu-click").removeClass("cg");
        });




        };
        
       
        
        
        // experiment carosle
        
        
        
        // counter
        
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
        
        $('.img-poppu').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        
        
        
        $('a.smooth-scroll').on("click", function (e) {
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top - 70
			}, 1000);
			e.preventDefault();
		});
		$('body').scrollspy({
			target: '.navbar-collapse',
			offset: 195
		});
        
        $('[data-toggle="tooltip"]').tooltip()
        
        
        // contact option
        
        $(".contact-open").on("click", function(){
            $(".contact-area").addClass("active");
        });
        
        $(".contact-close").on("click", function(){
            $(".contact-area").removeClass("active");
        });
        
        
        
        
           $.scrollUp({
            scrollText: '<i class="fa fa-angle-double-up"></i>'

        });
        
        
        
        
        
        
        

    });

})(jQuery);