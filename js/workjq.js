$('.owl-carousel').owlCarousel({
    center: true,
    loop:true,
    margin:10,
    nav:true,
    navText: ['<i class="fas fa-chevron-left arrow-left"></i>', '<i class="fas fa-chevron-right arrow-right"></i>'],
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        1000:{
            items:3,
            nav:true,
        }
    }
});
