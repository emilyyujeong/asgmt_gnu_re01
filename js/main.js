$(function () {
    $('.main_slide').slick({
        arrows: false,
        dots: true,
        // autoplay: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,

    });



    $('.pro_slide').slick({
        arrows: false,
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    $('#newMenu .arrows i:nth-child(1)').on('click', function () {
        $('.pro_slide').slick('slickPrev')
    });
    $('#newMenu .arrows i:nth-child(2)').on('click', function () {
        $('.pro_slide').slick('slickNext')
    });


    //MOBILE RESPONSIVE

    $('.m_open').on('click', function () {
        $('#header').toggleClass('on');
        $('.m_btn').toggleClass('on');
    });

    $('#header').on('scroll wheel touchmove', function () {
        if ($(this).hasClass('on')) {
            return false;
        }
    });


    $('#header .search_toggle button').on('click', function () {
        $('#header .search').toggleClass('on')
    })




})