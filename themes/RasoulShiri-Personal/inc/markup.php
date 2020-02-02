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
