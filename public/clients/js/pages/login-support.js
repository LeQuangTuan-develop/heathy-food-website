$('.show-pass-login-btn').click(function () {
    var idPass = $(this).find('i').data('id-pass');
    $(this).find('i[data-id-pass=' + idPass + ']').toggle();
});

$('.show-pass-login-btn').find('i#open-pass-btn').click(function () {
    $('#lock-pass').attr('type', 'text');
});
$('.show-pass-login-btn').find('i#lock-pass-btn').click(function () {
    $('#lock-pass').attr('type', 'password');
});
$('.show-pass-login-btn').find('i#open-confirm-btn').click(function () {
    $('#lock-confirm').attr('type', 'text');
});
$('.show-pass-login-btn').find('i#lock-confirm-btn').click(function () {
    $('#lock-confirm').attr('type', 'password');
});
