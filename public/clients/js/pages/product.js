$('.product-filter-price-toggle-btn').click(function () {
    $('.product-filter-list-price').slideToggle("fade");
    $(this).find('i').toggle();
});
$('.product-filter-cate-toggle-btn').click(function () {
    $('.product-filter-list-cate').slideToggle("fade");
    $(this).find('i').toggle();
});
$('.product-filter-list-cate-1').click(function () {
    $(this).find('.product-filter-list-cate-2').slideToggle("fade");
    $(this).find('i').toggle();
});
$('.actived-color-menu-btn').click(function () {
    $('.actived-color-menu-btn').removeClass("active-option");
    $(this).addClass("active-option");
});

document.addEventListener('DOMContentLoaded', function () {
    new Splide('#splide-product-watched-item', {
        type: 'loop',
        lazyLoad: 'sequential',
        perPage: 5,
        perMove: 1,
        breakpoints: {
            1200: {
                perPage: 5,
                perMove: 1
            },
            992: {
                perPage: 4,
                perMove: 1
            },
            768: {
                perPage: 3,
                perMove: 1
            },
            635: {
                perPage: 2,
                perMove: 1
            },
            576: {
                perPage: 1,
                perMove: 1
            }
        }
    }).mount();

});



//for input number
jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
jQuery('.quantity').each(function () {
    var spinner = jQuery(this),
            input = spinner.find('input[type="number"]'),
            btnUp = spinner.find('.quantity-up'),
            btnDown = spinner.find('.quantity-down'),
            min = input.attr('min'),
            max = input.attr('max');

    btnUp.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

    btnDown.click(function () {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
            var newVal = oldValue;
        } else {
            var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
    });

});

//for add review 
var $container = $("html,body");
var $scrollTo = $('.product-detail-rate');
$('.review-scroll-btn').click(function () {
    $container.animate({scrollTop: $scrollTo.offset().top - $container.offset().top + $container.scrollTop(), scrollLeft: 0}, 300);
});




