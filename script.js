$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('.large-logo').addClass('scrolled');
            $('#navbar').addClass('scrolled');
        } else {
            $('.large-logo').removeClass('scrolled');
            $('#navbar').removeClass('scrolled');
        };
    });
    // function updateLargeLogoHeight() {
    //     var window = $(window).height();
    //     var newHeight = windowHeight * 0.3;
    //     document.documentElement.style.setProperty('--bigLogoHeight', newHeight + 'px');
    // }
    // updateLargeLogoHeight();
    // $(window).resize(function () {
    //     updateLargeLogoHeight();
    // });
});



