//load  more product recommoned
$(function () {
    $(".product-recommend-slide").slice(0, 6).show();
    $(".load-more-product-recommend-slide-btn").on('click', function (e) {
        e.preventDefault();
        $(".product-recommend-slide:hidden").slice(0, 4).slideDown();
//        $('html,body').animate({
//            scrollTop: $(this).offset().top
//        }, 1500);
    });
});