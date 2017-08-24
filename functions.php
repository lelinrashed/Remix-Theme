<?php 
	
	include_once 'codestar/cs-framework.php';
	include_once 'inc/custom-post.php';
	include_once 'inc/widget.php';
	include_once 'inc/custom-comments.php';
	include_once 'inc/post-like.php';

	add_theme_support('post-thumbnails');
	add_image_size('small_image',80,55,true);

	function include_css_js(){

		wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'4.3.0','all');
		wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css',array(),'1.0','all');
		wp_enqueue_style('boxer', get_template_directory_uri().'/assets/css/jquery.fs.boxer.min.css',array(),'3.3.0','all');
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'3.3.1','all');
		wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css',array(),'1.0','all');
		wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css',array(),'1.0','all');
		wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0','all');
		wp_enqueue_style('post-like', get_template_directory_uri().'/assets/css/simple-likes-public.css',array(),'1.0','all');


		wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array('jquery'), '2.8.3', true);
		wp_enqueue_script('plugins', get_template_directory_uri().'/assets/js/plugins.js', array('jquery'), '3.3.1', true);
		wp_enqueue_script('OnePagenNav', get_template_directory_uri().'/assets/js/OnePagenNav.js', array('jquery'), '2.2', true);
		wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), '1.0.3', true);
		wp_enqueue_script('functions', get_template_directory_uri().'/assets/js/functions.js', array('jquery'), '1.0', true);
		wp_enqueue_script('viewport', get_template_directory_uri().'/assets/js/jquery.viewport.js', array('jquery'), '1.0', true);
		wp_enqueue_script('easypiechart', get_template_directory_uri().'/assets/js/jquery.easypiechart.min.js', array('jquery'), '2.1.3', true);
		wp_enqueue_script('scripts', get_template_directory_uri().'/assets/js/scripts.js', array('jquery'), '1.0', true);
		wp_enqueue_script('post-like-js', get_template_directory_uri().'/assets/js/simple-likes-public.js', array('jquery'), '1.0', true);
	}
	add_action('wp_enqueue_scripts', 'include_css_js');



	function load_js(){ ?>

		<script type="text/javascript">

		    jQuery('#main-nav').onePageNav({
                 currentClass: 'active',
                 changeHash: false,
                 scrollSpeed: 1200,
                 scrollOffset: 80,
				 filter: ':not(.sub-menu a, .not-home)'
            });

			jQuery('.carousel').carousel({
		        interval: 8000
		    })	

			/*  - wow animation wow.js 
		    ---------------------------------------------------*/
		    var wow = new WOW (
		    {
		          boxClass:     'wow',      // animated element css class (default is wow)
		          animateClass: 'animated', // animation css class (default is animated)
		          offset:       0,          // distance to the element when triggering the animation (default is 0)
		          mobile:       false       // trigger animations on mobile devices (true is default)
		      }
		    );
		    wow.init();

		    /*  - wow animation wow.js End 
		    ---------------------------------------------------*/

		</script>
			<?php
	}
	add_action('wp_footer','load_js',100);

















 ?>