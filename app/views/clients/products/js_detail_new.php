<script>
    document.addEventListener('DOMContentLoaded', function() {  
        //for detail
        var secondarySlider = new Splide('#secondary-slider', {
            rewind: true,
            fixedWidth: 100,
            fixedHeight: 80,
            isNavigation: true,
            lazyLoad: 'sequential',
            gap: 10,
            focus: 'center',
            pagination: false,
            cover: true
        }).mount();
        var primarySlider = new Splide('#primary-slider', {
            fixedWidth: 600,
            fixedHeight: 550,
            type: 'fade',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            lazyLoad: 'sequential',
            cover: true,
            breakpoints: {
                576: {
                    fixedWidth: 500,
                    fixedHeight: 300
                },
                480: {
                    fixedWidth: 400,
                    fixedHeight: 200
                }
            }
        });

        primarySlider.sync(secondarySlider).mount();
    });

    $('.active-color-type-btn').click(function() {
        $('.active-color-type-btn').css("color", "var(--main-color)");
        $('.active-color-type-btn').css("background-color", "transparent");
        $(this).css("color", "#fff");
        $(this).css("background-color", "var(--main-color)");
    });
    $('.active-color-classify-btn').click(function() {
        $('.active-color-classify-btn').css("color", "var(--main-color)");
        $('.active-color-classify-btn').css("background-color", "transparent");
        $(this).css("color", "#fff");
        $(this).css("background-color", "var(--main-color)");
    });

    const _token = $('meta[name=csrf-token]').attr("content");

    $(document).on('click', '#submit-cart', function() {
        var qty = $('#qty').val();
        var id = $('#id_product').val();
        var url = "{{_WEB_ROOT.'/them-gio-hang/id-'}}" + id;
        const form = new FormData();
        form.append('id', id);
        form.append('qty', qty);
        form.append('_token', _token);
        sendData(url, form);
	})

    function addToCart(id) {
		const _token = $('meta[name=csrf-token]').attr("content");
		var url = "{{_WEB_ROOT.'/them-gio-hang/id-'}}" + id;
		qty = 1;
		const form = new FormData();
		form.append('id', id);
		form.append('qty', qty);
		form.append('_token', _token);
		sendData(url, form);
	}
</script>