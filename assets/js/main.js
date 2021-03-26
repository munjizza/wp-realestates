// $('.open-nav-btn').on('click', function(e) {
//   $('.menu-header-menu-container').toggleClass('show');
// })

// $('.autoplay').slick({
//   slidesToShow: 1,
//   slidesToScroll: 1,
//   autoplay: true,
//   autoplaySpeed: 5000,
//   dots: true
// });

// $('.slick-dots li button').empty();

// $('.verical-slider').slick({
//     vertical: true,
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     verticalSwiping: true,
//     centerMode: true
//   });

$('.accordion').each(function(){
    $(this).on('click', function(){
        $(this).children('.question_text').toggleClass('show');
    });
})

