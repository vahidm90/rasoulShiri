<?php
//TODO: use CDNs.


/**
 * Load front-end CSS and JS files.
 *
 */
function vm_css_js_front_end() {

	wp_deregister_script( 'jquery' );

	if ( VM_IS_DEV ) :
		vm_load_dev_css_js();
	else :
		vm_load_production_css_js();
	endif;

}

add_action( 'wp_enqueue_scripts', 'vm_css_js_front_end' );


/**
 * Load CSS and JS files for development environment.
 *
 */
function vm_load_dev_css_js() {

	$path    = get_template_directory_uri() . '/assets';
	$dep_css = $dep_js = array();

	wp_deregister_script( 'wp-embed' );

	wp_enqueue_script( 'jquery-js', "$path/js/jquery-3.4.1.min.js", array(), '3.4.1', true );
	$dep_js [] = 'jquery-js';

	wp_enqueue_script( 'popper-js', "$path/js/popper-2.0.0.min.js", $dep_js, '2.0.0', true );
	$dep_js [] = 'popper-js';

	wp_enqueue_script( 'tippy-js', "$path/js/tippy-5.1.4-bundle.iife.min.js", $dep_js, '5.1.4', true );
	$dep_js [] = 'tippy-js';

	wp_enqueue_style( 'bootstrap', "$path/bootstrap-4.4.1-dist/bootstrap.min.css", array(), '4.4.1' );
	$dep_css [] = 'bootstrap';

	wp_enqueue_script( 'bootstrap-js', "$path/bootstrap-4.4.1-dist/bootstrap.min.js", $dep_js, '4.4.1', true );
	$dep_js [] = 'bootstrap-js';


	wp_enqueue_style( 'basic', "$path/css/basic.css", $dep_css, '1.0' );

	if ( is_front_page() ) :

		wp_enqueue_style( 'aos', "$path/aos-2.3.4/aos.min.css", $dep_css, '2.3.4' );
	    $dep_css = 'aos';

	    wp_enqueue_script( 'aos-js', "$path/aos-2.3.4/aos.min.js", $dep_js, '2.3.4', true );
	    $dep_js = 'aos-js';

		wp_enqueue_style( 'vmp-front-page', "$path/css/home.css", array( 'vmp-basic' ) );
		wp_enqueue_script( 'vmp-home-js', "$path/js/home.js", array(), '1.0.0', true );

    elseif ( is_page() ) :

		wp_enqueue_style( 'vmp-custom-template', "$path/css/custom-template.css", array( 'vmp-basic' ) );
		wp_enqueue_script( 'vmp-custom-template-js', "$path/js/custom-template.js", array(), '1.0.0', true );

	endif;
	wp_enqueue_script( 'jquery-js', "$path/js/jquery-3.4.1.min.js", array(), '3.4.1', true );

	wp_enqueue_style( 'bootstrap', "$path/bootstrap-4.2.1-rtl/bootstrap.min.css", array(), '4.2.1' );
	$dep_css [] = 'bootstrap';
	wp_enqueue_script( 'bootstrap-js', "$path/bootstrap-4.2.1-rtl/bootstrap.min.js", $dep_js, '4.2.1', true );
	$dep_js [] = 'bootstrap-js';

	wp_enqueue_style( 'basic', "$path/css/basic.css", $dep_css, '1.0' );
	$dep_css [] = 'basic';

	if ( is_front_page() ) :
		wp_enqueue_style( 'front-page', "$path/css/front-page.css", $dep_css, '1.0' );
		wp_enqueue_script( 'front-page-js', "$path/js/front-page.js", $dep_js, '1.0' );
	endif;

}


/**
 * Load CSS and JS files for production environment.
 *
 */
function vm_load_production_css_js() {

	$path    = get_template_directory_uri() . '/assets';
	$dep_css = $dep_js = array();

	// These will use the 'vm_add_sri_attributes' function to add SRI attributes to files obtained from CDNs.
//    add_filter( 'script_loader_tag', 'vm_add_sri_attributes', 10, 2 );
//    add_filter( 'style_loader_tag', 'vm_add_sri_attributes', 10, 2 );

	wp_enqueue_script( 'jquery-js', 'https://lib.arvancloud.com/ar/jquery/3.4.1/jquery.min.js', array(), '3.4.1', true );
	$dep_js [] = 'jquery-js';

	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );
	$dep_css [] = 'bootstrap';

	wp_enqueue_script( 'bootstrap-js', 'https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js', $dep_js, '4.4.1', true );
	$dep_js [] = 'bootstrap-js';

	wp_enqueue_style( 'aos', 'https://lib.arvancloud.com/ar/aos/2.3.4/aos.css', $dep_css, '2.3.4' );
	$dep_css [] = 'aos';

	wp_enqueue_script( 'aos-js', 'https://lib.arvancloud.com/ar/aos/2.3.4/aos.js', $dep_js, '2.3.4', true );
	$dep_js [] = 'aos-js';

	wp_enqueue_style( 'basic', "$path/css/basic.vmc.min.css", $dep_css, '1.0' );
	$dep_css [] = 'basic';

	if ( is_front_page() ) :
		wp_enqueue_style( 'front-page', "$path/css/front-page.vmcompiled.min.css", $dep_css, '1.0' );
		wp_enqueue_script( 'front-page-js', "$path/js/front-page.vmcompiled.min.js", $dep_js, '1.0' );
	endif;


}

/**
 * Add SRI attributes to css/js files from CDNs.
 *
 * @param $html   string HTML markup for the css/js file
 * @param $handle string Unique file handle/ID
 *
 * @return        string HTML markup for the css/js file with SRI attributes
 *
 */
function vm_add_sri_attributes( $html, $handle ) {

	switch ( $handle ) :
		default :
			return $html;
			break;
	endswitch;

}


/**
 *
 */
function front_page_inline_js() {
	if ( ! is_front_page() ) :
		return;
	endif;
	?>

    <script>
        $(window).on('activate.bs.scrollspy', function (e) {
            var $topBar = $('#static-top-bar');
            $('.nav-link', $topBar).removeClass('active');
            $('.nav-link[href="' + $('#dynamic-nav .nav-link.active').attr('href') + '"]', $topBar).addClass('active');

        });
        AOS.init({duration: 1000, mirror: true});
    </script>

	<?php

}

add_action( 'wp_footer', 'front_page_inline_js', 21 );
