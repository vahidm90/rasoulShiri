jQuery(function ($) {
    // Enable smooth scrolling
    $('a[href*="#"]:not([href="#"]):not([href^="#tab"]):not([href^="#collapse"])').click(function ()
    {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') || location.hostname === this.hostname) {
            var target = $(this.hash);
            if (target.length) {
                if ('top-bar-items' === $(this).parent().attr('id'))
                    $(this).parent().removeClass('show');
                $('html,body').animate({scrollTop: (target.offset().top)}, 300, 'swing');
            }
        }
    });

    // Enable tooltips for navigation radio buttons
    // TODO: adjust the code to the new tippy.js.
/*
    var $navItems = $('#dynamic-nav .nav-link');
    $navItems.each(function () {
        var myTooltip = new Tooltip($(this), {
            placement: "left",
            delay: {show: 0, hide: 100},
            title: $(this).attr('title'),
            trigger: 'hover focus click',
            template: '<div class="vm-tooltip nav-tooltip"><div class="tooltip-arrow"></div><div class="tooltip-txt"></div></div>',
            innerSelector: '.tooltip-txt'
        });
    });
*/
});
$(window).on('scroll', function (e) {
    var $topBar = $('#static-top-bar');
    if (e.currentTarget.innerHeight < e.currentTarget.scrollY)
        $topBar.addClass('fixed-top');
    else
        $topBar.removeClass('fixed-top');
});
