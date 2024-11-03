window.onload = function() {

    $( document ).ready(function() {
        $('.owl-carousel').owlCarousel({
            nav:false,
            margin: 100,
            responsive:{
                0:{
                    items: 1,
                    stagePadding: 40
                },
                600:{
                    items: 1
                },
                1000:{
                    items: 5
                }
            }
        })
    })

    function scroll_to_div(btn, target){
        $(`#${btn}`).on('click', function() {
        $('html, body').animate({
            scrollTop: $(`#${target}`).offset().top
        }, 500);
        });
    }
    
    scroll_to_div("company-btn","company");
    scroll_to_div("aboutus-btn","aboutus");
    scroll_to_div("solutions-btn","solutions");
    scroll_to_div("news-btn","news");
    scroll_to_div("contact-btn","contact");

    AOS.init({
        duration: 600,
        once: "true",
        easing:"ease-out"
    });
}