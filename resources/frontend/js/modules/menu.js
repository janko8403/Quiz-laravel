export default function mainMenu() {

    var stickyNav = function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 0 ) { 
            $('.navbar').addClass('header-hidden');
        } else {
            $('.navbar').removeClass('header-hidden');
        }
    };

    stickyNav();

    $(window).scroll(function() {
        stickyNav();
    });
    
}
