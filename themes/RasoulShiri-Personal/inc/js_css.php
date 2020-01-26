<?php


/**
 * Load front-end CSS and JS files.
 *
 */
function vm_css_js_front_end() {

	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'wp-embed' );

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

	wp_enqueue_script( 'jquery-js', "$path/js/jquery-3.4.1.min.js", array(), '3.4.1' );
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

	if ( is_home() ) :

		wp_enqueue_style( 'aos', "$path/aos-2.3.4/aos.min.css", $dep_css, '2.3.4' );
		$dep_css [] = 'aos';

		wp_enqueue_script( 'aos-js', "$path/aos-2.3.4/aos.min.js", $dep_js, '2.3.4', true );
		$dep_js [] = 'aos-js';

		wp_enqueue_style( 'landing', "$path/css/landing.css", $dep_css, '1.0' );
		$dep_css [] = 'landing';

		wp_enqueue_style( 'home', "$path/css/home.css", $dep_css, '1.0' );
		wp_register_script( 'home-js', "$path/js/home.js", array( 'jquery-js' ), '1.0' );
		wp_localize_script(
			'home-js',
			'LOC_VARS',
			array(
				'themeUrl' => get_template_directory_uri(),
				'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
				'siteUrl'  => home_url(),
				'nonce'    => wp_create_nonce( 'vm_contact_nonce' ),
				'retry'    => _x( 'Try Again!', 'Captcha error', VM_TD ),
			)
		);
		wp_enqueue_script( 'home-js' );

    elseif ( is_page() ) :

		wp_enqueue_style( 'page', "$path/css/page.css", $dep_css, '1.0' );
		wp_enqueue_script( 'page-js', "$path/js/page.js", array(), '1.0.0', true );

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
	add_filter( 'script_loader_tag', 'vm_add_sri_attributes', 10, 2 );
	add_filter( 'style_loader_tag', 'vm_add_sri_attributes', 10, 2 );

	wp_enqueue_script( 'jquery-js', 'https://lib.arvancloud.com/ar/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );
	$dep_js [] = 'jquery-js';

	wp_enqueue_script( 'popper-js', "$path/js/popper-2.0.0.min.js", $dep_js, '2.0.0', true );
	$dep_js [] = 'popper-js';

	wp_enqueue_script( 'tippy-js', "$path/js/tippy-5.1.4-bundle.iife.min.js", $dep_js, '5.1.4', true );
	$dep_js [] = 'tippy-js';

	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );
	$dep_css [] = 'bootstrap';

	wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', $dep_js, '4.4.1', true );
	$dep_js [] = 'bootstrap-js';


	wp_enqueue_style( 'basic', "$path/css/basic.vmc.min .css", $dep_css, '1.0' );

	if ( is_home() ) :

		wp_enqueue_style( 'aos', 'https://lib.arvancloud.com/ar/aos/2.3.4/aos.css', $dep_css, '2.3.4' );
		$dep_css = 'aos';

		wp_enqueue_script( 'aos-js', 'https://lib.arvancloud.com/ar/aos/2.3.4/aos.js', $dep_js, '2.3.4', true );
		$dep_js = 'aos-js';

		wp_enqueue_style( 'home', "$path/css/home.vmc.min.css", $dep_css, '1.0' );
		wp_enqueue_script( 'home-js', "$path/js/home.vmc.min.js", $dep_js, '1.0', true );

    elseif ( is_page() ) :

		wp_enqueue_style( 'page', "$path/css/page.vmc.min.css", $dep_css, '1.0' );
		wp_enqueue_script( 'page-js', "$path/js/page.vmc.min.js", array(), '1.0.0', true );

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
		case 'bootstrap' :
			$replace = ' integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"';
			$tag     = '/>';
			break;
		case 'bootstrap-js' :
			$replace = ' integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"';
			$tag     = '></script>';
			break;
		default :
			return $html;
			break;
	endswitch;

	return str_replace( $tag, " $replace$tag", $html );

}


/**
 * Print front-page inline scripts.
 *
 */
function front_page_inline_js() {

	if ( ! is_front_page() || wp_doing_ajax() ) :
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
