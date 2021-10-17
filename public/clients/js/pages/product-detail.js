document.addEventListener('DOMContentLoaded', function () {
    //for detail
    var secondarySlider = new Splide('#secondary-slider', {
        rewind: true,
        fixedWidth: 100,
        fixedHeight: 80,
        isNavigation: true,
        lazyLoad: 'sequential',
        gap: 10,
        focus: 'center',
        pagination: false,
        cover: true
    }).mount();
    var primarySlider = new Splide('#primary-slider', {
        fixedWidth: 1000,
        fixedHeight: 450,
        type: 'fade',
        heightRatio: 0.5,
        pagination: false,
        arrows: false,
        lazyLoad: 'sequential',
        cover: true,
        breakpoints: {
            576: {
                fixedWidth: 500,
                fixedHeight: 300
            },
            480: {
                fixedWidth: 400,
                fixedHeight: 200
            }
        }
    });

    primarySlider.sync(secondarySlider).mount();
});

$('.active-color-type-btn').click(function () {
    $('.active-color-type-btn').css("color", "var(--main-color)");
    $('.active-color-type-btn').css("background-color", "transparent");
    $(this).css("color", "#fff");
    $(this).css("background-color", "var(--main-color)");
});
$('.active-color-classify-btn').click(function () {
    $('.active-color-classify-btn').css("color", "var(--main-color)");
    $('.active-color-classify-btn').css("background-color", "transparent");
    $(this).css("color", "#fff");
    $(this).css("background-color", "var(--main-color)");
});