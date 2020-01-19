<!-- Sketch carousel -->

<div id="sketch-slider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#sketch-slider" data-slide-to="0" class="active"></li>
        <li data-target="#sketch-slider" data-slide-to="1"></li>
        <li data-target="#sketch-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo $path; ?>/img/sketch01.png" class="d-block w-100" alt="Daily sketch by Rasoul Shiri">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $path; ?>/img/sketch02.png" class="d-block w-100" alt="Daily sketch by Rasoul Shiri">
        </div>
        <div class="carousel-item">
            <img src="<?php echo $path; ?>/img/sketch03.png" class="d-block w-100" alt="Daily sketch by Rasoul Shiri">
        </div>
    </div>
    <a class="carousel-control-prev" href="#sketch-slider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#sketch-slider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>