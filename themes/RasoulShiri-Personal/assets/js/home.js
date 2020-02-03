jQuery(function ($) {

    var $form = $('#contact-captcha');
    $form.css('max-height', 0);

    $('#show-contact-captcha').on('click', function (e) {
        e.preventDefault();
        $form.animate({maxHeight: '100vh'}, 300, 'swing');
        $(this).hide(300);
    });

    $('#reload-captcha').on('click', function (e) {
        e.preventDefault();
        reloadCaptcha();
    });

    // Enable smooth scrolling
    $('a[href*="#"]:not([href="#"]):not([href^="#tab"]):not([href^="#collapse"])').click(function () {
        if (
            (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')) ||
            (location.hostname === this.hostname)
        ) {
            var target = $(this.hash);
            if (target.length) {
                if ('top-bar-items' === $(this).parent().attr('id'))
                    $(this).parent().removeClass('show');
                $('html,body').animate({scrollTop: (target.offset().top)}, 300, 'swing');
            }
        }
    });

    // Enable tooltips for navigation radio buttons
    tippy(
        '[data-tippy-content]',
        {
            animation: 'perspective-extreme',
            placement: 'left',
            trigger: 'mouseenter focus click active',
            inertia: true,
        }
    );

});

$(window).on('scroll', function (e) {
    var $topBar = $('#static-top-bar');
    if (e.currentTarget.innerHeight < e.currentTarget.scrollY)
        $topBar.addClass('fixed-top');
    else
        $topBar.removeClass('fixed-top');
});
