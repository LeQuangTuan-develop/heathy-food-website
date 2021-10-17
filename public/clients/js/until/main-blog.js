$(".substring-title-blog").html(function (index, currentHTML) {
    if (currentHTML.length >= 200) {
        return currentHTML.substr(0, 200) + '...';
    }
});
$(".substring-title-blog-2").html(function (index, currentHTML) {
    if (currentHTML.length >= 90) {
        return currentHTML.substr(0, 90) + '...';
    }
});
new Splide('#splide-blog-product-hot', {
    lazyLoad: 'sequential'
}).mount();
