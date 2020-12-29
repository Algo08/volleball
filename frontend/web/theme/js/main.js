var siteCarousel = function () {
    if ( $('.owl-partners-slider').length > 0 ) {
        var owlPartner = $('.owl-partners-slider').owlCarousel({
            loop: true,
            autoHeight: true,
            margin: 50,
            autoplay: true,
            smartSpeed: 1000,
            nav: false,
            dots: false,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:4
                },
                1000:{
                    items:5
                }
            }
        });

    }
    if ( $('.owl-main-slider').length > 0 ) {
        var owlMain = $('.owl-main-slider').owlCarousel({
            loop: true,
            autoHeight: true,
            margin: 50,
            autoplay: true,
            smartSpeed: 1000,
            nav: false,
            dots: false,
            responsive:{
                1000:{
                    items:1
                }
            }
        });

    }
};
siteCarousel();