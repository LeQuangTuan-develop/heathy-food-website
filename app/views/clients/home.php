<script>
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('#splide-product-featured-sale', {
            lazyLoad: 'sequential',
        }).mount();
        new Splide('#splide-product-categories', {
            type: 'loop',
            lazyLoad: 'sequential',
            perPage: 3,
            perMove: 1
        }).mount();
        new Splide('#splide-category-item', {
            type: 'loop',
            lazyLoad: 'sequential',
            perPage: 6,
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
        new Splide('#splide-product-category-item', {
            type: 'loop',
            lazyLoad: 'sequential',
            perPage: 5,
            perMove: 1,
            breakpoints: {
                1200: {
                    perPage: 4,
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
        new Splide('#splide-product-sales-item', {
            type: 'loop',
            lazyLoad: 'sequential',
            perPage: 5,
            perMove: 5,
            breakpoints: {
                1200: {
                    perPage: 4,
                    perMove: 4
                },
                992: {
                    perPage: 3,
                    perMove: 3
                },
                768: {
                    perPage: 3,
                    perMove: 3
                },
                635: {
                    perPage: 2,
                    perMove: 2
                },
                576: {
                    perPage: 1,
                    perMove: 1
                }
            }
        }).mount();
        new Splide('#splide-sold-flash-item', {
            type: 'loop',
            lazyLoad: 'sequential',
            perPage: 5,
            perMove: 5,
            breakpoints: {
                1200: {
                    perPage: 4,
                    perMove: 4
                },
                992: {
                    perPage: 3,
                    perMove: 3
                },
                768: {
                    perPage: 3,
                    perMove: 3
                },
                635: {
                    perPage: 2,
                    perMove: 2
                },
                576: {
                    perPage: 1,
                    perMove: 1
                }
            }
        }).mount();
        new Splide('#splide-product-blog-list', {
            type: 'loop',
            lazyLoad: 'sequential',
            perPage: 3,
            perMove: 1
        }).mount();
    });

    //load  more product recommoned
    $(function() {
        $(".product-recommend-slide").slice(0, 6).show();
        $(".load-more-product-recommend-slide-btn").on('click', function(e) {
            e.preventDefault();
            $(".product-recommend-slide:hidden").slice(0, 4).slideDown();
            //        $('html,body').animate({
            //            scrollTop: $(this).offset().top
            //        }, 1500);
        });
    });
</script>