<?php
session_start();
$captcha = @$_POST['captcha_code'];
require_once '../assets/securimage/securimage.php';
$securimage = new Securimage(
	array(
		'image_width'          => 275,
		'image_height'         => 100,
		'code_length'          => mt_rand( 4, 8 ),
		'num_lines'            => mt_rand( 3, 10 ),
		'perturbation'         => 0.5,
	)
);
if ( $securimage->check( $captcha ) == false ) :
	die();
else :
	$content = <<<html
<p class="tier-text contact-info">
	<a href="mailto:rasoolshiri.r@gmail.com" target="_blank">
		<span class="vm-icon vmi-envelope"></span><span>rasoolshiri.r@gmail.com</span>
	</a>
</p>
<p class="tier-text contact-info">
	<a href="tel:+989199209012">
		<span class="vm-icon vmi-phone2"></span><span>+989199209012</span>
	</a>
</p>
html;

	die ( json_encode( $content ) );
endif;
