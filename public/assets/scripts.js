
$(window).scroll(function () {
    var scrollPosition = $(window).scrollTop();
    scrollPosition > '0' ? $('#topbar').addClass('bg-white').removeClass('bg-transparent').addClass('shadow') : $('#topbar').removeClass('bg-transparent').removeClass('bg-white').removeClass('shadow');
});