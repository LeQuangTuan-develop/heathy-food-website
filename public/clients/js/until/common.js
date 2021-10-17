document.addEventListener('DOMContentLoaded', function () {
    new Splide('#splide-product-relation-item', {
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
       new Splide('#splide-product-blog-item', {
        type: 'loop',
        lazyLoad: 'sequential',
        perPage: 4,
        perMove: 1,
        breakpoints: {
            1200: {
                perPage: 4,
                perMove: 1
            },
            992: {
                perPage: 3,
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