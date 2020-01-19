<?php
//TODO: use CDNs.


/**
 * Load front-end CSS and JS files.
 *
 */
function vm_css_js_front_end() {

    wp_deregister_script( 'jquery' );

    switch (VM_IS_DEV) :
        case true :
            vm_load_dev_css_js();
            break;
        default :
            vm_load_production_css_js();
            break;
    endswitch;

}

add_action( 'wp_enqueue_scripts', 'vm_css_js_front_end' );


/**
 * Load CSS and JS files for development environment.
 *
 */
function vm_load_dev_css_js() {

    $path    = get_template_directory_uri() . '/assets';
    $dep_css = $dep_js = array();

    wp_enqueue_script( 'jquery-js', "$path/js/jquery-3.4.1.min.js", array(), '3.4.1', true );
    $dep_js [] = 'jquery-js';

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
    add_filter( 'script_loader_tag', 'vm_add_sri_attributes', 10, 2 );
    add_filter( 'style_loader_tag', 'vm_add_sri_attributes', 10, 2 );

    wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.4.1.min.js', array(), null, true );
    $dep_js []= 'jquery-js';

    wp_enqueue_style( 'bootstrap', 'https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css', array(), null );
    $dep_css []= 'bootstrap';

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js', $dep_js, null, true );
    $dep_js []= 'bootstrap-js';

    wp_enqueue_style( 'basic', "$path/css/basic.vmcompiled.min.css", $dep_css, '1.0' );
    $dep_css [] = 'basic';

    if ( is_front_page() ) :
        wp_enqueue_style( 'front-page', "$path/css/front-page.vmcompiled.min.css", $dep_css, '1.0' );
        wp_enqueue_script( 'front-page-js', "$path/js/front-page.vmcompiled.min.js", $dep_js, '1.0' );
    endif;


}


function vm_add_sri_attributes ( $html, $handle ) {

    switch ( $handle ) :
        default :
            return $html;
            break;
        case 'jquery-js' :
            $replace = 'integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"';
            $tag = '></script>';
            break;
        case 'bootstrap' :
            $replace = 'integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous"';
            $tag = '/>';
            break;
        case 'bootstrap-js' :
            $replace = 'integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"';
            $tag = '></script>';
            break;
    endswitch;

    return str_replace( $tag, " $replace$tag", $html );

}

function vm_load_css_js() {

    $path = get_template_directory_uri() . '/assets';
    wp_deregister_script('wp-embed');

    if (is_page('test')) :
        wp_enqueue_script('vmp-jquery-js', "$path/js/jquery-3.3.1.min.js", array(), '3.3.1', true);
        wp_enqueue_script('vmp-popper-js', "$path/js/popper.min.js", array(), false, true);
        wp_enqueue_script('vm-tooltip-js', "$path/js/tooltip.min.js", array(), false, true);
        wp_enqueue_script('vmp-custom-template-js', "$path/js/custom-template.js", array(), '1.0.0', true);
        return;
    endif;

    wp_enqueue_style('vmp-bootstrap', "$path/css/bootstrap.min.css");
    wp_enqueue_style('vmp-aos', "$path/css/aos.min.css");
    wp_enqueue_style('vmp-basic', "$path/css/basic.css");
    wp_enqueue_style('vmp-icons', "$path/css/icons.css");
    wp_enqueue_style('vmp-fonts', "$path/css/fonts.css");
    wp_enqueue_style('vmp-popper', "$path/css/popper.css");
    wp_enqueue_style('vmp-landing', "$path/css/landing.css", array('vmp-basic'));

    wp_enqueue_script('vmp-jquery-js', "$path/js/jquery-3.3.1.min.js", array(), '3.3.1', true);
    wp_enqueue_script('vmp-popper-js', "$path/js/popper.min.js", array(), false, true);
    wp_enqueue_script('vm-tooltip-js', "$path/js/tooltip.min.js", array(), false, true);
    wp_enqueue_script('vmp-aos-js', "$path/js/aos.min.js", array(), false, true);
    wp_enqueue_script('vmp-bootstrap-js', "$path/js/bootstrap.min.js", array('vmp-jquery-js', 'vmp-popper-js'), '4.1.3', true);
    wp_enqueue_script('vmp-landing-js', "$path/js/landing.js", array('vmp-jquery-js', 'vmp-popper-js', 'vm-tooltip-js'), '1.0.0', true);

    if (is_front_page()) :
        wp_enqueue_style('vmp-front-page', "$path/css/home.css", array('vmp-basic'));
        wp_enqueue_script('vmp-home-js', "$path/js/home.js", array(), '1.0.0', true);
    elseif (is_page()) :
        wp_enqueue_style('vmp-custom-template', "$path/css/custom-template.css", array('vmp-basic'));
        wp_enqueue_script('vmp-custom-template-js', "$path/js/custom-template.js", array(), '1.0.0', true);
    endif;
}

add_action('wp_enqueue_scripts', 'vm_load_css_js');

function front_page_inline_js() {
    if (!is_front_page()) :
        return;
    endif;
    ?>

    <script>
        $(window).on('activate.bs.scrollspy', function (e)
        {
            var $topBar = $('#static-top-bar');
            $('.nav-link', $topBar).removeClass('active');
            $('.nav-link[href="' + $('#dynamic-nav .nav-link.active').attr('href') + '"]', $topBar).addClass('active');

        });
        AOS.init({duration: 1000, mirror: true});
    </script>

    <?php

}

add_action('wp_footer', 'front_page_inline_js', 21);
