$('.user-title-active-color-btn').click(function () {
    $('.user-title-active-color-btn').removeClass("active-color");
    $('.user-title-active-color-btn').find('i').removeClass("active-color");
    $(this).addClass("active-color");
    $(this).addClass("active-color");
});
$('.active-color-btn').click(function () {
    $('.active-color-btn').removeClass("active-color");
    $(this).addClass("active-color");
});
$('.user-title-active-color-btn').click(function () {
    $('.user-noti-btn').css("display", "none");
    $(this).parent().parent().find('.user-noti-btn').slideToggle("fade");
});
$('.open-user-aside-btn').click(function () {
    $('.responsive-fix-support').toggle("slow");
});
$('.close-user-aside-btn').click(function () {
    $('.responsive-fix-support').toggle("slow");
});
$('.credit-card-active-btn').click(function () {
    $('.credit-card-active-btn').css("border-color", "#ebebeb");
    $(this).css("border-color", "var(--main-color)");
});
$('.user-infor-btn').click(function () {
    var dataUser = $(this).data('user-infor');
    $('.list-user-confirm').css("display", "none");
    $('.list-user-confirm[data-user-infor=' + dataUser + ']').slideToggle("fade");
});
$('.actived-color-bill-btn').click(function () {
    $('.actived-color-bill-btn').removeClass("active-option");
    $(this).addClass("active-option");
});
$('.view-user-profile-btn').click(function () {
    $('.list-voucher-form').css("display", "none");
    $('.list-user-bill').css("display", "none");
    $('.list-user-news').css("display", "none");
    $('.list-user-confirm').css("display", "none");
    $('.user-infor-btn').removeClass("active-color");
    var dataUser = $(this).data('user-infor');
    $('.user-infor-btn[data-user-infor=' + dataUser + ']').addClass("active-color");
    $('.list-user-confirm[data-user-infor=' + dataUser + ']').slideToggle("fade");
});
$('.view-user-bill-btn').click(function () {
    $('.list-voucher-form').css("display", "none");
    $('.list-user-confirm').css("display", "none");
    $('.list-user-news').css("display", "none");
    $('.list-user-bill-cover').slideToggle("fade");
});
$('.noti-news-btn').click(function () {
    $('.list-user-bill').css("display", "none");
    var dataNoti = $(this).data('noti');
    $('.list-user-bill[data-noti=' + dataNoti + ']').slideToggle("fade");
});
$('.view-user-news-btn').click(function () {
    $('.list-voucher-form').css("display", "none");
    $('.list-user-news').css("display", "none");
    $('.list-user-bill').css("display", "none");
    $('.list-user-confirm').css("display", "none");
    $('.noti-news-btn').removeClass("active-color");
    var dataNoti = $(this).data('noti');
    $('.noti-news-btn[data-noti=' + dataNoti + ']').addClass("active-color");
    $('.list-user-news[data-noti=' + dataNoti + ']').slideToggle("fade");
});
$('.view-voucher-btn').click(function () {
    $('.list-user-confirm').css("display", "none");
    $('.list-user-news').css("display", "none");
    $('.list-user-bill-cover').css("display", "none");
    $('.list-voucher-form').slideToggle("fade");
});

//for rating
var rating = 0;
$('#reviewProductModal .inner-star i').hover(function () {
    rating = $(this).data('rating');
    $.each($(".rating-items"), function (index, item) {
        var currentRating = $(item).data('rating');
        if (currentRating <= rating) {
            $(item).css("color", "f90");
        } else {
            $(item).css("color", "#b6b6b6");
        }
    });
});
$('#reviewProductModal .inner-star i').click(function () {
    rating = $(this).data('rating');
    $.each($(".rating-items"), function (index, item) {
        var currentRating = $(item).data('rating');
        if (currentRating <= rating) {
            $(item).css("color", "#f90");
        } else {
            $(item).css("color", "#b6b6b6");
        }
    });
});
$(".substring-title-blog-2").html(function (index, currentHTML) {
    if (currentHTML.length >= 90) {
        return currentHTML.substr(0, 90) + '...';
    }
});

//for user action
$('.change-user-infor-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Thông tin của bạn đã được cập nhật thành công!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Xác Nhận': {
                btnClass: 'btn-green'
            }
        }
    });
});
$('.change-user-email-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Email của bạn đã được cập nhật thành công!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Trở Lại Trang Cá Nhân': {
                btnClass: 'btn-green',
                 action: function () {
                    window.location.href = 'user.php';
                }
            }
        }
    });
});
$('.change-user-phone-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Số điện thoại của bạn đã được cập nhật thành công!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Trở Lại Trang Cá Nhân': {
                btnClass: 'btn-green',
                 action: function () {
                    window.location.href = 'user.php';
                }
            }
        }
    });
});
$('.change-user-pass-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Mật khẩu của bạn đã được cập nhật thành công!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Xác Nhận': {
                btnClass: 'btn-green'
            }
        }
    });
});
$('.review-product-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Đánh giá sản phẩm thành công!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Xác Nhận': {
                btnClass: 'btn-green'
            }
        }
    });
});
