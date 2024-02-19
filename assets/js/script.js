$(document).ready(function() {
    $('.slider-1').owlCarousel({
        margin: 10,
        nav: true,
        dots: false,
        items: 2,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1200: {
                items: 2,
                nav: true,
                loop: false
            }
        }

    });
    $(document).scroll(function() {
        if ($(this).scrollTop() > 30) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
        var y = $(this).scrollTop();
        if (y > 500) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    $('.scrolltop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 1000);
        return false;
    });

    var flag = 0;
    $(window).scroll(function() {
        if ($(window).scrollTop() >= $('.section-blog').offset().top - 200) {
            if (flag == 0) {
                flag = 1;
                const counters = document.querySelectorAll(".counter");

                counters.forEach((counter) => {
                    counter.innerText = "0";
                    const updateCounter = () => {
                        const target = +counter.getAttribute("data-target");
                        const count = +counter.innerText;
                        const increment = target / 200;
                        if (count < target) {
                            counter.innerText = `${Math.ceil(count + increment)}`;
                            setTimeout(updateCounter, 1);
                        } else counter.innerText = target;
                    };
                    updateCounter();
                });
            }
        }
    });


})

$("#typed").typed({
    strings: ["Web Agency", "Social Marketing"],
    typeSpeed: 500,
    startDelay: 500,
    backSpeed: 100,
    backDelay: 100,
    loop: true,
    cursorChar: "|",
    contentType: 'css'
});

$(".toggle-menu").click(function() {
    $(".side__menu").toggle();
    $('.side__menu').addClass('sidemenu');
    $('body').addClass('model-on');
});
$(".has-menu").click(function() {
    $(this).toggleClass('active');
    $('.submenu').slideUp();
    $(this).next().toggle();
})

$(".close").click(function() {
    $(".side__menu").hide()
    $('side__menu').removeClass('sidemenu');
})


$('.side__menu').click(function(e) {
    if ($(e.target).closest(".mobile-nav").length === 0) {
        $(".mobile-nav").parent().hide();
    }
})