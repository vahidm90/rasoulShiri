<?php


/**
 * Set HTML <title> tag for the document.
 *
 * @param  $title string Default document title
 *
 * @return        string Document title
 *
 */
function vm_set_doc_title( $title ) {

	if ( is_home() ) :
		return get_bloginfo() . ' - ' . get_bloginfo( 'description' );
	elseif ( is_page() ) :
		global $post;
		return $post->post_title . ' | ' . get_bloginfo();
	xdebug_break();
	endif;


	return $title;

}

add_filter( 'pre_get_document_title', 'vm_set_doc_title' );


function display_contact_info() {

	xdebug_break();
	if ( ! check_ajax_referer( 'vm_contact_nonce', 'security' ) ) :
		die('Security failure!');
	endif;

	$content =<<<html
<p class="tier-text contact-info">
	<a href="mailto:rasoolshiri.r@gmail.com" target="_blank">
		<span class="vmp-icon vmp-icon-mail4"></span><span class="contact-email">rasoolshiri.r@gmail.com</span>
	</a>
</p>
<p class="tier-text contact-info">
	<a href="tel:+989199209012">
		<span class="vmp-icon vmp-icon-phone"></span><span class="contact-phone">+989199209012</span>
	</a>
</p>
html;

	die($content);

}

add_action( 'wp_ajax_nopriv_vm-display-contact-info', 'display_contact_info' );
add_action( 'wp_ajax_vm-display-contact-info', 'display_contact_info' );