$(document).ready(function () {
    $().UItoTop({easingType: 'easeOutQuart'});
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
    $("span.menu").click(function () {
        $("ul.nav1").slideToggle(300, function () {
            // Animation complete.
        });
    });
    $("#owl-demo1").owlCarousel({
        items: 1,
        lazyLoad: false,
        autoPlay: true,
        navigation: false,
        navigationText: false,
        pagination: true,
    });
    // $('#horizontalTab').easyResponsiveTabs({
    //     type: 'default', //Types: default, vertical, accordion
    //     width: 'auto', //auto or any width like 600px
    //     fit: true   // 100% fit in a container
    // });

});