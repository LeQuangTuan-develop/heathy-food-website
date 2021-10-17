var stt = 0;
function go_to_slide(toStt) {
    stt = toStt;
    var currentSlide = $('.slideshow-item[data-index=' + stt + ']');
    console.log(currentSlide);
    var previousSlide = $('.slideshow-item[data-index=' + ((stt == 0) ? 2 : (stt - 1)) + ']');
    currentSlide.css("opacity", "1");
    previousSlide.css("opacity", "0");
}
function auto_slide() {
    stt = stt + 1;
    if(stt > 2) {
        stt = 0;
    }
    go_to_slide(stt);
    setTimeout(function(){
        auto_slide();
    }, 5000);
}
$('.slideshow-item').css("opacity", "0");
auto_slide();