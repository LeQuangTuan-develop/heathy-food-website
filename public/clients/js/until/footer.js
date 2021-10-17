$(document).ready(function () {
    $(".fixed-toggle-primary").click(function () {
        var width = $(window).width();
        if (width <= '973') {
            $(this).find('.fixed-toggle-primary-content').slideToggle("fade");
        }
    });
});

$('.send-mail-footer-btn').click(function () {
    $.confirm({
        title: 'Xác nhận!',
        content: 'Email của bạn đã được gửi đi thành công!',
        buttons: {
            'Xác nhận': function () {
                $.alert('Xác nhận!');
            }
        }
    });
});

//for push up
$(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    if (scrollTop >= 200) {
        $('.push-up-btn-primary').removeClass('display-none');
    } else {
        $('.push-up-btn-primary').addClass('display-none');
    }
});
$('.push-up-btn-primary').click(function () {
    var current = $(window).scrollTop();
    scrollTop(current);
});
function scrollTop(x0) {
    var x = x0 - 200;
    if (x < 0) {
        x = 0;
    }
    $(window).scrollTop(x);
    if (x0 != 0) {
        setTimeout(function () {
            scrollTop(x);
        }, 20);
    }
}