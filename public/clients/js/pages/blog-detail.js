$('.like-post-detail-btn').click(function () {
    $('.like-post-detail-btn').css("display", "inline-block");
    $(this).css("display", "none");
});
$('.reply-comment-btn').click(function () {
    var dataComment = $(this).data('comment');
    $(this).css("display", "none");
    $('.comment-contact-form[data-comment=' + dataComment + ']').slideToggle("fade");
});
$('.cancel-comment-btn').click(function () {
    var dataComment = $(this).data('comment');
    $('.comment-contact-form[data-comment=' + dataComment + ']').css("display", "none");
    $('.reply-comment-btn[data-comment=' + dataComment + ']').toggle();
});