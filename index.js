$(document).ready(function () {
    $('.slider-list').slick({
        slidesToShow: 1,
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-arrow-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-arrow-right' aria-hidden='true'></i></button>",
        autoplay: true,
        autoplaySpeed: 2000
    });
    $('.list_movie').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: "<button type='button' class='slick-prev1 pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next1 pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
});
