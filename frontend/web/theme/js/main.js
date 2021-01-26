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
            margin: 0,
            autoplay: true,
            smartSpeed: 1000,
            nav: false,
            dots: true,
            dotClass: 'fa fa-circle-thin',
            responsive:{
                0:{
                    items:1
                }
            }
        });
        $('.owl-main-slider').click(function(e) {
            e.preventDefault();
            owl1.trigger('next.owl.carousel');
        })
        $('.owl-main-slider').click(function(e) {
            e.preventDefault();
            owl1.trigger('prev.owl.carousel');
        })

    }
};
siteCarousel();