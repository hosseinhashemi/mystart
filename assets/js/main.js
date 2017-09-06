

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function ($) {
    var MQL = 1170;

    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
            previousTop: 0
        },
                function () {
                    var currentTop = $(window).scrollTop();
                    //check if user is scrolling up
                    if (currentTop < this.previousTop) {
                        //if scrolling up...
                        if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                            $('.navbar-custom').addClass('is-visible');
                        } else {
                            $('.navbar-custom').removeClass('is-visible is-fixed');
                        }
                    } else if (currentTop > this.previousTop) {
                        //if scrolling down...
                        $('.navbar-custom').removeClass('is-visible');
                        if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed'))
                            $('.navbar-custom').addClass('is-fixed');
                    }
                    this.previousTop = currentTop;
                });
    }




    //search
    $('a[href="#search"]').on('click', function (event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function (event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });



    //responsive menu
    $('.slimmenu').slimmenu(
            {
                resizeWidth: '768',
                collapserTitle: '',
                animSpeed: 'medium',
                indentChildren: true,
                childrenIndenter: '&raquo;'
            });

    //Swiper Slider: 
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true,
        speed: 1000,
        nextButton: ".swiper-button-next",
        prevButton: ".swiper-button-prev",
        autoplay: 4000
    });


    //About-us
    $("#circle-1").percircle();
    $("#circle-2").percircle();
    $("#circle-3").percircle();
    $("#circle-4").percircle();

    $('.masonry-blog-grid').masonry({
        itemSelector: '.post-item-selector',
        columnWidth: '.grid-sizer',
        percentPosition: true
//        horizontalOrder: true
    });

});
