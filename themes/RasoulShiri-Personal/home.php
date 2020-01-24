<?php
$path = get_template_directory_uri() . '/assets/bin';

session_start();

include_once get_template_directory() . '/assets/securimage/securimage.php';

$securimage = new Securimage();

get_header( 'home' );
?>
    <nav id="dynamic-nav" class="navbar d-none d-lg-flex" data-aos="fade-left">
        <div class="nav-container">
            <a class="vmp-icon-radio-unchecked nav-link" title="Home" href="#home"></a>
            <a class="vmp-icon-radio-unchecked nav-link" title="Animation" href="#animation"></a>
            <a class="vmp-icon-radio-unchecked nav-link" title="Sketch" href="#sketch"></a>
            <a class="vmp-icon-radio-unchecked nav-link" title="Character Design" href="#char-design"></a>
            <a class="vmp-icon-radio-unchecked nav-link" title="Short Animation" href="#short-animation"></a>
            <a class="vmp-icon-radio-unchecked nav-link" title="About" href="#about"></a>
            <a class="vmp-icon-radio-unchecked nav-link" title="Contact" href="#contact"></a>
        </div>
    </nav>
    <div class="tier" id="home">
        <div class="tier-img-div h-100 w-100">
            <img src="<?php echo $path; ?>/bin/img/home-left.png" id="home-left-img" data-aos="fade-right"/>
            <img src="<?php echo $path; ?>/bin/img/home-right.png" id="home-right-img" data-aos="fade-left"/>
        </div>
        <div class="text-center tier-content">
            <h1 class="tier-head" data-aos="fade-down">
				<?php _ex( 'Rasoul Shiri', 'Site Owner', VM_TD ); ?>
            </h1>
            <p class="tier-text" data-aos="fade-up" id="TTEG">
                <a href="#animation"><?php _ex( 'Animation', 'Tier title', VM_TD ); ?></a>
            </p>
            <p class="tier-text" data-aos="fade-up">
                <a href="#sketch"><?php _ex( 'Sketch', 'Tier title', VM_TD ); ?></a>
            </p>
            <p class="tier-text" data-aos="fade-up">
                <a href="#char-design"><?php _ex( 'Character Design', 'Tier title', VM_TD ); ?></a>
            </p>
            <p class="tier-text" data-aos="fade-up">
                <a href="#short-animation"><?php _ex( 'Short Animation', 'Tier title', VM_TD ); ?></a>
            </p>
        </div>
        <noscript>
            <div class="text-center tier-content">
                <h1 class="tier-head">
					<?php _ex( 'Rasoul Shiri', 'Site Owner', VM_TD ); ?>
                </h1>
                <p class="tier-text" id="TTEG">
                    <a href="#animation"><?php _ex( 'Animation', 'Tier title', VM_TD ); ?></a>
                </p>
                <p class="tier-text">
                    <a href="#sketch"><?php _ex( 'Sketch', 'Tier title', VM_TD ); ?></a>
                </p>
                <p class="tier-text">
                    <a href="#char-design"><?php _ex( 'Character Design', 'Tier title', VM_TD ); ?></a>
                </p>
                <p class="tier-text">
                    <a href="#short-animation"><?php _ex( 'Short Animation', 'Tier title', VM_TD ); ?></a>
                </p>
            </div>
        </noscript>
    </div>
    <div class="tier" id="animation">
        <nav class="navbar navbar-expand-lg navbar-light" id="static-top-bar">
            <a class="navbar-brand" href="#home" title="Home">Rasoul Shiri</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#top-bar-items"
                    aria-controls="top-bar-items" aria-label="Toggle Navigation Menu" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-lg-end" id="top-bar-items">
                <a class="nav-link" href="#animation">Animation</a>
                <a class="nav-link" href="#sketch">Sketch</a>
                <a class="nav-link" href="#char-design">Character Design</a>
                <a class="nav-link" href="#short-animation">Short Animation</a>
                <a class="nav-link" href="#about">About</a>
                <a class="nav-link" href="#contact">Contact</a>
            </div>
        </nav>
        <div class="tier-content">
            <h2 class="tier-head" data-aos="fade-down">
				<?php _ex( 'Animation', 'Tier title', VM_TD ); ?>
            </h2>
            <div class="tier-items container-fluid">
                <div class="row no-gutters">
                    <div class="col-lg-4">
                        <a href="<?php echo home_url( 'tv-series' ); ?>"
                           title="<?php _ex( 'TV Series', 'Tier item', VM_TD ); ?>">
                            <div class="tier-item card" data-aos="flip-right">
                                <img class="card-img-top" src="<?php echo $path; ?>/bin/img/portfolio-image_09.jpg"
                                     alt="<?php _ex( 'TV Series', 'Tier item', VM_TD ); ?>">
                                <div class="card-body">
                                    <h3 class="card-title"><?php _ex( 'TV Series', 'Tier item', VM_TD ); ?></h3>
                                    <p class="card-text"><?php _ex( 'Over 1000 minutes of animated TV series', 'Tier text', VM_TD ); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="<?php echo home_url( 'animated-short-series' ); ?>"
                           title="<?php _ex( 'Animated Short Series', 'Tier item', VM_TD ); ?>">
                            <div class="tier-item card" data-aos="flip-right">
                                <img class="card-img-top" src="<?php echo $path; ?>/bin/img/portfolio-image_03.jpg"
                                     alt="<?php _ex( 'Animated Short Series', 'Tier item', VM_TD ); ?>">
                                <div class="card-body">
                                    <h3 class="card-title"><?php _ex( 'Animated Short Series', 'Tier item', VM_TD ); ?></h3>
                                    <p class="card-text"><?php _ex( 'Under-2-minute animated short series for online media and TV', 'Tier text', VM_TD ); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="<?php echo home_url( 'tv-commercials' ); ?>"
                           title="<?php _ex( 'TV Commercials', 'Tier item', VM_TD ); ?>">
                            <div class="tier-item card" data-aos="flip-right">
                                <img class="card-img-top" src="<?php echo $path; ?>/bin/img/portfolio-image_01.jpg"
                                     alt="<?php _ex( 'TV Commercials', 'Tier item', VM_TD ); ?>">
                                <div class="card-body">
                                    <h3 class="card-title"><?php _ex( 'TV Commercials', 'Tier item', VM_TD ); ?></h3>
                                    <p class="card-text"><?php _ex( 'TV commercials for events and mobile apps ads', 'Tier text', VM_TD ); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <noscript>
            <div class="tier-content">
                <h2 class="tier-head">
					<?php _ex( 'Animation', 'Tier title', VM_TD ); ?>
                </h2>
                <div class="tier-items container-fluid">
                    <div class="row no-gutters">
                        <div class="col-lg-4">
                            <a href="<?php echo home_url( 'tv-series' ); ?>"
                               title="<?php _ex( 'TV Series', 'Tier item', VM_TD ); ?>">
                                <div class="tier-item card">
                                    <img class="card-img-top" src="<?php echo $path; ?>/bin/img/portfolio-image_09.jpg"
                                         alt="<?php _ex( 'TV Series', 'Tier item', VM_TD ); ?>">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php _ex( 'TV Series', 'Tier item', VM_TD ); ?></h3>
                                        <p class="card-text"><?php _ex( 'Over 1000 minutes of animated TV series', 'Tier text', VM_TD ); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?php echo home_url( 'animated-short-series' ); ?>"
                               title="<?php _ex( 'Animated Short Series', 'Tier item', VM_TD ); ?>">
                                <div class="tier-item card">
                                    <img class="card-img-top" src="<?php echo $path; ?>/bin/img/portfolio-image_03.jpg"
                                         alt="<?php _ex( 'Animated Short Series', 'Tier item', VM_TD ); ?>">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php _ex( 'Animated Short Series', 'Tier item', VM_TD ); ?></h3>
                                        <p class="card-text"><?php _ex( 'Under-2-minute animated short series for online media and TV', 'Tier text', VM_TD ); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="<?php echo home_url( 'tv-commercials' ); ?>"
                               title="<?php _ex( 'TV Commercials', 'Tier item', VM_TD ); ?>">
                                <div class="tier-item card">
                                    <img class="card-img-top" src="<?php echo $path; ?>/bin/img/portfolio-image_01.jpg"
                                         alt="<?php _ex( 'TV Commercials', 'Tier item', VM_TD ); ?>">
                                    <div class="card-body">
                                        <h3 class="card-title"><?php _ex( 'TV Commercials', 'Tier item', VM_TD ); ?></h3>
                                        <p class="card-text"><?php _ex( 'TV commercials for events and mobile apps ads', 'Tier text', VM_TD ); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </noscript>
    </div>
    <div class="tier" id="sketch">
        <div class="tier-content">
            <h2 class="tier-head" data-aos="fade-down">
				<?php _ex( 'Sketch', 'Tier title', VM_TD ); ?>
            </h2>
            <div class="container tier-items">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card tier-item" data-aos="flip-left">
                            <img src="<?php echo $path; ?>/bin/img/sketch01.png" class="my-lg-auto d-block w-100">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card tier-item" data-aos="flip-left">
                            <img src="<?php echo $path; ?>/bin/img/sketch02.png" class="my-lg-auto d-block w-100">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card tier-item" data-aos="flip-left">
                            <img src="<?php echo $path; ?>/bin/img/sketch03.png" class="my-lg-auto d-block w-100">
                        </div>
                    </div>
                </div>
            </div>
            <noscript>
                <h2 class="tier-head">
					<?php _ex( 'Sketch', 'Tier title', VM_TD ); ?>
                </h2>
                <div class="container tier-items">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card tier-item">
                                <img src="<?php echo $path; ?>/bin/img/sketch01.png" class="my-lg-auto d-block w-100">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card tier-item">
                                <img src="<?php echo $path; ?>/bin/img/sketch02.png" class="my-lg-auto d-block w-100">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card tier-item">
                                <img src="<?php echo $path; ?>/bin/img/sketch03.png" class="my-lg-auto d-block w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </noscript>
        </div>
    </div>
    <div class="tier" id="char-design">
        <div class="tier-content">
            <h2 class="tier-head" data-aos="fade-down">
				<?php _ex( 'Character Design', 'Tier title', VM_TD ); ?>
            </h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="<?php echo $path; ?>/bin/img/char-design01.png" class="w-100" data-aos="zoom-in">
                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo $path; ?>/bin/img/char-design02.png" class="w-100" data-aos="zoom-in-up">
                    </div>
                </div>
            </div>
            <noscript>
                <h2 class="tier-head">
					<?php _ex( 'Character Design', 'Tier title', VM_TD ); ?>
                </h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="<?php echo $path; ?>/bin/img/char-design01.png" class="w-100">
                        </div>
                        <div class="col-lg-6">
                            <img src="<?php echo $path; ?>/bin/img/char-design02.png" class="w-100">
                        </div>
                    </div>
                </div>
            </noscript>
        </div>
    </div>
    <div class="tier" id="short-animation">
        <div class="tier-content">
            <noscript>
                <div class="row">
                    <div class="col-12">
                        <h2 class="tier-head">
							<?php _ex( 'Short Animation', 'Tier title', VM_TD ); ?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-3">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_12.jpg" class="d-block w-100"
                             alt="Gabbeh by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">Gabbeh</h3>
                            <p class="date">2018</p>
                            <p class="tier-text">Director: Rasoul Shiri</p>
                            <p class="tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="tier-text">Duration: 2 min</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_07.jpg" class="d-block w-100"
                             alt="The Shadow by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">The Shadow</h3>
                            <p class="date">2018</p>
                            <p class="tier-text">Director: Rasoul Shiri</p>
                            <p class="tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="tier-text">Duration: 1':40"</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_16.jpg" class="d-block w-100"
                             alt="Contrast by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">Contrast</h3>
                            <p class="date">2011</p>
                            <p class="tier-text">Director: Rasoul Shiri</p>
                            <p class="tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="tier-text">Duration: 5 min</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-3">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_17.jpg" class="d-block w-100"
                             alt="Fifty-Fifty by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">Fifty-Fifty</h3>
                            <p class="date">2009</p>
                            <p class="tier-text">Director: Rasoul Shiri</p>
                            <p class="tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="tier-text">Duration: 2 min</p>
                        </div>
                    </div>
                </div>
            </noscript>
            <div id="short-animation-slider" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#short-animation-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#short-animation-slider" data-slide-to="1"></li>
                    <li data-target="#short-animation-slider" data-slide-to="2"></li>
                    <li data-target="#short-animation-slider" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_12.jpg" class="d-block w-100"
                             alt="Gabbeh by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">Gabbeh</h3>
                            <p class="d-none d-md-block date">2018</p>
                            <p class="d-none d-lg-block tier-text">Director: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Duration: 2 min</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_07.jpg" class="d-block w-100"
                             alt="The Shadow by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">The Shadow</h3>
                            <p class="d-none d-md-block date">2018</p>
                            <p class="d-none d-lg-block tier-text">Director: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Duration: 1':40"</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_16.jpg" class="d-block w-100"
                             alt="Contrast by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">Contrast</h3>
                            <p class="d-none d-md-block date">2011</p>
                            <p class="d-none d-lg-block tier-text">Director: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Duration: 5 min</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo $path; ?>/bin/img/portfolio-image_17.jpg" class="d-block w-100"
                             alt="Fifty-Fifty by Rasoul Shiri">
                        <div class="carousel-caption">
                            <h3 class="tier-text title">Fifty-Fifty</h3>
                            <p class="d-none d-md-block date">2009</p>
                            <p class="d-none d-lg-block tier-text">Director: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Screenplay: Rasoul Shiri</p>
                            <p class="d-none d-lg-block tier-text">Duration: 2 min</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#short-animation-slider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#short-animation-slider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="tier" id="about">
        <div class="text-center tier-content">
            <h2 class="tier-head">
				<?php _ex( 'About', 'Tier title', VM_TD ); ?>
            </h2>
            <p class="tier-text">
				<?php
				_ex( 'Born in 1984 in Hamadan, Rasoul Shiri has studied Graphic Design and has been a self-taught animator since 1998. ', 'Bio text', VM_TD );
				_ex( 'He has been making short animation films independently since 2001. ', 'Bio text', VM_TD );
				_ex( 'He\'s been a freelance artist since 2002.', 'Bio text', VM_TD );
				?>
            </p>
            <h3 class="mt-5" data-aos="fade-down">
                <a href="<?php echo home_url( 'filmography' ); ?>">
					<?php _ex( 'Filmography', 'Tier text', VM_TD ); ?>
                </a>
            </h3>
            <noscript>
                <h3 class="mt-5">
                    <a href="<?php echo home_url( 'filmography' ); ?>">
						<?php _ex( 'Filmography', 'Tier text', VM_TD ); ?>
                    </a>
                </h3>
            </noscript>
        </div>
    </div>
    <div class="tier" id="contact">
        <div class="text-center tier-content">
            <div class="tier-head-div">
                <h2 class="tier-head">
					<?php _ex( 'Contact', 'Tier title', VM_TD ); ?>
                </h2>
                <form id="contact_captcha">
	                <?php

	                require_once get_template_directory() . '/assets/securimage/securimage.php';
	                echo Securimage::getCaptchaHtml(array('input_name' => 'ct_captcha'));

	                ?>
                    <input type="submit" value="Submit<?php //TODO: Add content here ?>"/>
                </form>
                <p class="tier-text contact-info">
                        <span class="vmp-icon vmp-icon-mail4"></span><span
                                class="contact-email">rasoolshiri.r<code>@</code>gmail.com</span>
                    </p>
                    <p class="tier-text contact-info">
                        <a href="tel:+989199209012">
                            <span class="vmp-icon vmp-icon-phone"></span><span
                                    class="contact-phone">+989199209012</span>
                        </a>
                    </p>
                <p class="tier-text contact-info">
                    <a href="https://www.instagram.com/shirirasool">
                        <span class="vmp-icon vmp-icon-instagram"></span><span class="contact-insta">shirirasool</span>
                    </a>
                </p>
            </div>
        </div>
    </div>
<?php
get_footer( 'home' );

//TODO: create custom options page to set background images, number of front-page tiers, their names, IDs, etc.
//TODO: create options to set site owner info.
//TODO: create options to set whether to show contact/about page.
//TODO: create options for categories to include for each tier, their headings, their images, and their subheadings.
//TODO: create options to whether include carousel in a tier, and to choose the picture for the carousel items.
//TODO: create options for contact information.