<?php 

/**
*
* @Theme All css, js and conditional js files
*
*
*/

add_action('wp_enqueue_scripts', 'comet_theme_all_files');

function comet_theme_all_files(){

	/**
	*
	* all css files
	*
	*/

	// fonts css
	wp_enqueue_style('comet-bootstrap', 'https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:100,300,400,500,700|Quattrocento+Sans:400,700|Roboto:100,300,400,500,700', array(), '1.0.0', 'all');

	// bootstrap css
	wp_enqueue_style('comet-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.1', 'all');

	// font-awesome css
	wp_enqueue_style('comet-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '1.0.2', 'all');

	// animate css
	wp_enqueue_style('comet-animate', get_template_directory_uri().'/assets/css/animate.css', array(), '1.0.3', 'all');

	// owl-carousel css
	wp_enqueue_style('comet-owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), '1.0.4', 'all');

	// owl-theme-default css
	wp_enqueue_style('comet-owl-theme-default', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), '1.0.5', 'all');

	// magnific-popup css
	wp_enqueue_style('comet-magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.6', 'all');


	// magnific-popup css
	wp_enqueue_style('comet-magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), '1.0.7', 'all');


	// main css
	wp_enqueue_style('comet-main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0.8', 'all');


	// responsive css
	wp_enqueue_style('comet-responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.9', 'all');


	


	/**
	* all js files
	*
	*/


	// bootstrap
	wp_enqueue_script('comet-bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '3.0.1', true);

	// waves
	wp_enqueue_script('comet-waves', get_template_directory_uri().'/assets/js/waves.js', array('jquery'), '3.0.2', true);

	// imagesloaded
	wp_enqueue_script('comet-imagesloaded', get_template_directory_uri().'/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '3.0.3', true);

	// isotope
	wp_enqueue_script('comet-isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.4', true);

	// owl-carousel
	wp_enqueue_script('comet-owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '3.0.5', true);

	// counterup
	wp_enqueue_script('comet-counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '3.0.6', true);
	
	// scrollUp
	wp_enqueue_script('comet-scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'), '3.0.7', true);

	// waypoints
	wp_enqueue_script('comet-waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), '3.0.8', true);

	// jarallax
	wp_enqueue_script('comet-jarallax', get_template_directory_uri().'/assets/js/jarallax.min.js', array('jquery'), '3.0.9', true);

	// jquery-parallax
	wp_enqueue_script('comet-jquery-parallax', get_template_directory_uri().'/assets/js/jquery.parallax-1.1.3.js', array('jquery'), '4.0.0', true);

	// magnific-popup
	wp_enqueue_script('comet-magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '4.0.1', true);

	// maps-api
	wp_enqueue_script('comet-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA', array('jquery'), '4.0.2', true);
	
	// map
	wp_enqueue_script('comet-map', get_template_directory_uri().'/assets/js/map.js', array('jquery'), '4.0.3', true);
	
	// main
	wp_enqueue_script('comet-main', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '4.0.4', true);
	
	


	/**
	*
	* conditional js files
	*
	*/
	wp_enqueue_script('comet-html5shim', 'http://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', array(), '5.0.1', false);
	wp_script_add_data('comet-html5shim', 'conditional', 'lt IE 9');


	wp_enqueue_script('comet-respond', 'http://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '5.0.2', false);
	wp_script_add_data('comet-respond', 'conditional', 'lt IE 9');


}




/**
*
* admin inline js
* for post format	
*
*/
add_action('admin_print_scripts', 'comet_inline_js', 1000);

function comet_inline_js(){

	if( get_post_type() === 'post'): ?>
		<script type="text/javascript">
			jQuery(document).ready(function(){


				$id = jQuery('input[name="post_format"]:checked').attr('id');

				// video
				if( $id == 'post-format-video'){
					jQuery('.cmb2-id-video-link').show();
				}else{
					jQuery('.cmb2-id-video-link').hide();
				}

				// audio
				if( $id == 'post-format-audio'){
					jQuery('.cmb2-id-audio-link').show();
					
				}else{
					jQuery('.cmb2-id-audio-link').hide();
				}

				// gallery
				if( $id == 'post-format-gallery'){
					jQuery('.cmb2-id-gallery-images').show();
					
				}else{
					jQuery('.cmb2-id-gallery-images').hide();
				}


				// quote
				if( $id == 'post-format-quote'){
					jQuery('.cmb2-id-quote-text').show();
					
				}else{
					jQuery('.cmb2-id-quote-text').hide();
				}


				/**
				*
				* 2nd step
				*
				*/
				jQuery('input[name="post_format"]').change(function(){

					

					$id = jQuery('input[name="post_format"]:checked').attr('id');

					// video
					if( $id == 'post-format-video'){
						jQuery('.cmb2-id-video-link').show();
					}else{
						jQuery('.cmb2-id-video-link').hide();
					}

					// audio
					if( $id == 'post-format-audio'){
						jQuery('.cmb2-id-audio-link').show();
						
					}else{
						jQuery('.cmb2-id-audio-link').hide();
					}

					// gallery
					if( $id == 'post-format-gallery'){
						jQuery('.cmb2-id-gallery-images').show();
						
					}else{
						jQuery('.cmb2-id-gallery-images').hide();
					}

					// quote
					if( $id == 'post-format-quote'){
						jQuery('.cmb2-id-quote-text').show();
						
					}else{
						jQuery('.cmb2-id-quote-text').hide();
					}


				});


			});	
		</script>

	<?php endif; 
 
}
