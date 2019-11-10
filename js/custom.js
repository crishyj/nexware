(function($) {
    'use stricte';
    // Variables
    var $winHeight = $(window).height(),
        $scrollTopBtn = $('#top'),
        $icon = $('section > div  i');
    // Section Width 
    $('section div').height($winHeight);
    // Resize Window function 
    $(window).resize(function() {
        $('section div').height($winHeight);
        $icon.css('marginTop', $winHeight - $(this).height() / 2);
        $icon.css('marginLeft', $(window).width() - $(this).width() / 2);
    });
    // Scrolling
    $(window).scroll(function() {
        //  console.log($(this).scrollTop());
        if ($(this).scrollTop() >= 450) {
            $scrollTopBtn.fadeIn();
        } else {
            $scrollTopBtn.fadeOut();
        }
    });
    $scrollTopBtn.click(function() {
        $('html,body').animate({ scrollTop: 0 }, 2000);
    });
    // Center icon inside section
    $icon.css('marginTop', $winHeight - $(this).height() / 2);
    $icon.css('marginLeft', $(window).width() - $(this).width() / 2);
}(jQuery));