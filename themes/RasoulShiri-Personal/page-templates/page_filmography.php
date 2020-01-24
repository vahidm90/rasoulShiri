<?php
/*
 *  Template Name: Filmography
 */

get_header( 'custom-template' );

?>
<nav class="navbar navbar-expand-lg navbar-light" id="static-top-bar">
    <a class="navbar-brand" href="<?php echo home_url(); ?>" title="Home">Rasoul Shiri</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-bar-items"
            aria-controls="top-bar-items" aria-label="Toggle Navigation Menu" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-lg-end" id="top-bar-items">
        <a class="nav-link" href="<?php echo home_url(); ?>#animation">Animation</a>
        <a class="nav-link" href="<?php echo home_url(); ?>#sketch">Sketch</a>
        <a class="nav-link" href="<?php echo home_url(); ?>#char-design">Character Design</a>
        <a class="nav-link" href="<?php echo home_url(); ?>#short-animation">Short Animation</a>
        <a class="nav-link" href="<?php echo home_url(); ?>#about">About</a>
        <a class="nav-link" href="<?php echo home_url(); ?>#contact">Contact</a>
    </div>
</nav>
<?php

if ( have_posts() ) :
	while ( have_posts() ) :

		the_post();

		?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"><h1><?php the_title();  ?></h1></div>
                <div class="col-12">
                    <div class="content d-flex flex-wrap flex-column flex-md-row"><?php the_content(); ?></div>
                </div>
            </div>
        </div>
	<?php

	endwhile;
endif;

get_footer( 'custom-template' );
