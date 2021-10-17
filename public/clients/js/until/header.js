//for scroll progress
(function ($) {
    $.fn.prognroll = function (options) {
        var settings = $.extend({
            height: 5,
            color: "#50bcb6",
            custom: false
        }, options);
        var progressBar = $("<span>", {
            class: "prognroll-bar",
        });
        return this.each(function (i, el) {
            if ($(this).data("prognroll")) {
                return false;
            }
            $(this).data("prognroll", true);
            $("body").prepend(progressBar).end().find(".prognroll-bar").not(":first").remove();
            $(".prognroll-bar").css({
                position: "fixed",
                top: 0,
                left: 0,
                width: 0,
                height: settings.height,
                backgroundColor: settings.color,
                zIndex: 2147483647
            });
            var globals = {
                "windowScrollTop": $(window).scrollTop(),
                "windowOuterHeight": $(window).outerHeight(),
                "bodyHeight": $(document).height()
            }
            function bindWindowScroll() {
                $(window).scroll(function (e) {
                    e.preventDefault();
                    globals.windowScrollTop = $(window).scrollTop();
                    globals.windowOuterHeight = $(window).outerHeight();
                    globals.bodyHeight = $(document).height();

                    var total = (globals.windowScrollTop / (globals.bodyHeight - globals.windowOuterHeight)) * 100;
                    $(".prognroll-bar").css("width", total + "%");
                });
            }
            if (settings.custom === false) {
                bindWindowScroll();
            } else {
                if ($(this).css("max-height") == "none") {
                    bindWindowScroll();
                } else {
                    $(this).scroll(function (e) {
                        e.preventDefault();
                        var customScrollTop = $(this).scrollTop();
                        var customOuterHeight = $(this).outerHeight();
                        var customScrollHeight = $(this).prop("scrollHeight");
                        var total = (customScrollTop / (customScrollHeight - customOuterHeight)) * 100;
                        $(".prognroll-bar").css("width", total + "%");
                    });
                }
            }
            var total = (globals.windowScrollTop / (globals.bodyHeight - globals.windowOuterHeight)) * 100;
            $(".prognroll-bar").css("width", total + "%");
        });
    };
})(jQuery);
$("body").prognroll();
$(".content").prognroll({
    custom: true
});
$("body").prognroll({
    height: 5,
    color: "#50bcb6"
});

jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.cart-quantity input');
jQuery('.cart-quantity').each(function () {
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
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
$('.cate-lv-1-item').click(function () {
    $(this).find('.cate-lv-2-cover').slideToggle("fade");
    $(this).find('.toggle-down-up-icon').toggle();
});
$('.open-menu-cate-btn').click(function () {
    $('.header-cate').toggle('slow');
});
$('.close-menu-cate-btn').click(function () {
    $('.header-cate').toggle('slow');
});
$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
$('.lazy-load').lazy(function () {});

$('.add-to-cart-btn').click(function () {
    $.confirm({
        title: 'Giỏ hàng!',
        content: 'Sản phẩm đã được thêm vào giỏ hàng!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Tiếp tục mua sắm': {
                btnClass: 'btn-blue'
            },
            'Giỏ hàng': {
                btnClass: 'btn-green',
                action: function () {
                    window.location.href = 'cart.php';
                }
            }
        }
    });
});
