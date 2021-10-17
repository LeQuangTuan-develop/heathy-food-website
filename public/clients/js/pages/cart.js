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
function updateCheckedList() {
    $('.checkout-type-ship-list').css("display", "none");
    var dataTtoggle = $('.checkedParent:checked').data("checked-toggle");
    $(".checkout-type-ship-list[data-checked-toggle='" + dataTtoggle + "']").slideToggle("fade");
}
$('.checkedParent').change(function () {
    updateCheckedList();
});
$('#editTypeShipModal').on('shown.bs.modal', function () {
    console.log(1);
    updateCheckedList();
});
$('.actived-bank-btn').click(function () {
    $('.actived-bank-btn').css("border-color", "#cecaca");
    $(this).css("border-color", "#8e8e8e");
});


//for checkout
$('.checkout-btn').click(function () {
    $.confirm({
        title: 'Thành công!',
        content: 'Đơn hàng đã được đặt thành công!',
        type: 'green',
        typeAnimated: true,
        buttons: {
            'Trang Chủ': {
                btnClass: 'btn-blue',
                 action: function () {
                    window.location.href = 'home.php';
                }
            },
            'Xem Đơn Hàng': {
                btnClass: 'btn-green',
                action: function () {
                    window.location.href = 'user.php';
                }
            }
        }
    });
});