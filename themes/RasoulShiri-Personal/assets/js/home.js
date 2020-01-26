function reloadCaptcha()
{
    console.log('reloading captcha');
    $('#siimage').prop('src', LOC_VARS.url + '/securimage_show.php?sid=' + Math.random());
}

function processForm()
{
    console.log('processing form!');
    $.ajax({
        url: '/index.php',
        type: 'POST',
        async: false,
        cache: false,
        data: $('#contact_captcha').serialize(),
        dataType: 'json'
    }).done(function(data) {
        console.log('captcha ajax success');
        console.log('retrieved data:');
        console.log(data);
        if (data.error === 0) {
            console.log('captcha passed!');
            $.ajax({
                url: LOC_VARS.ajaxUrl,
                async: false,
                cache: false,
                type: 'POST',
                data: { action: 'vm-display-contact-info', security: LOC_VARS.nonce },
                dataType: 'html',
                success: function (content) {
                    console.log('created')
                    $('#contact_captcha').hide(100);
                    $('#contact .tier-head').after(content);
                },
            });
        } else {
            console.log('captcha ajax success');
            console.log('retrieved data:');
            console.log(data);
            alert(LOC_VARS.retry);
            if (data.message.indexOf('Incorrect security code') >= 0) {
                jQuery('#captcha_code').val('');
                reloadCaptcha();
            }
        }
    });

    return false;
}

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
