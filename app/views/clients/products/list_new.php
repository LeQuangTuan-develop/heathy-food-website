<main>
    <div class="container">
        <div class="router-pages">
            <a href="home.php">Trang Chủ</a> -
            <a href="product.php">Sản phẩm</a> -
            <a href="#">Tất cả sản phẩm</a>
        </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
            <aside class="col-12 col-lg-3 col-xl-3">
                <div class="product-filter section-aside-product">
                    <div class="product-flex product-filter-title product-filter-price-toggle-btn">
                        <h3>Khoảng Giá </h3>
                        <div class="product-filter-icon-toggle">
                            <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i>
                        </div>
                    </div>
                    <ul class="product-filter-list product-filter-list-price">
                        <li>
                            <label>
                                <input type="radio" name="radio" checked />
                                <span>800.000 - 1.000.000 vnđ</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="radio" checked />
                                <span>600.000 - 800.000 vnđ</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="radio" checked />
                                <span>400.000 - 600.000 vnđ</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="radio" checked />
                                <span>200.000 - 400.000 vnđ</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="radio" checked />
                                <span>1.000 - 400.000 vnđ</span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="product-filter section-aside-product">
                    <div class="product-flex product-filter-title product-filter-cate-toggle-btn">
                        <h3>Danh mục sản phẩm</h3>
                        <div class="product-filter-icon-toggle">
                            <i class="fas fa-chevron-down"></i>
                            <i class="fas fa-chevron-up"></i>
                        </div>
                    </div>
                    <ul class="product-filter-list product-filter-list-cate">
                        @foreach ($list_categories as $category)
                        <li class="product-filter-list-cate-1">
                            <a href="{{ _WEB_ROOT.'/product/list?danhmuc='.$category['id'] }}">
                                <div class="product-flex">
                                    <strong class="hover-color color-black active-color font-size-basic">{{ $category['category_name']}}</strong>
                                    <div class="product-filter-icon-toggle">
                                        <i class="fas fa-chevron-down active-color"></i>
                                        <i class="fas fa-chevron-up active-color"></i>
                                    </div>
                                </div>
                            </a>
                            <!-- <ul class="product-filter-list-cate-2">
                                <li class="color-grey-3 hover-color">
                                    Rau củ Đà Lạt
                                </li>
                                <li class="color-grey-3 hover-color">
                                    Rau củ Miền Tây
                                </li>
                                <li class="color-grey-3 hover-color">
                                    Rau Thái Nguyên
                                </li>
                                <li class="color-grey-3 hover-color">
                                    Rau Hải Phòng
                                </li>
                            </ul> -->
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="banner-pr">
                    <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/lua.jpg" alt="" />
            </aside>
            <div class="col-12 col-lg-9 col-xl-9" id="product-list-cover">
                <div class="product-list">
                    <div class="product-list-title">
                        <h3 class="color-grey-3 margin-right-2">Tất cả: </h3>
                        <span>tìm thấy 332 sản phẩm</span>
                    </div>
                    <div class="product-list-option">
                        <ul>
                            <li class="actived-color-menu-btn active-option" data-menu="1">Bán chạy</li>
                            <li class="actived-color-menu-btn" data-menu="2">Sản phẩm mới</li>
                            <li class="actived-color-menu-btn" data-menu="3">Giảm giá</li>
                            <li class="actived-color-menu-btn" data-menu="4">Khuyến mãi</li>
                            <li class="actived-color-menu-btn" data-menu="5">Giá từ thấp đến cao</li>
                            <li class="actived-color-menu-btn" data-menu="6">Giá từ cao đến thấp</li>
                        </ul>
                    </div>
                    <div class="product-list-form">
                        <ul class="row">
                            @foreach($list_products as $product)
                            <li class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 padding-for-product">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            @if ($product['is_new'] == 1)
                                            <span class="product-list-item-tag-new">New</span>
                                            @endif
                                            @foreach ($list_discounts as $discount)
                                            @if ($discount['product_id'] == $product['id'])
                                            <span class="product-list-item-tag-discount">{{$discount['discount_percentage']}}%</span>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name textshorten">
                                            <a href="{{ _WEB_ROOT }}/product/detail/{{ $product['id'] }}">
                                                <strong class="color-black">{{ $product['product_name'] }}</strong>
                                            </a>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            @foreach ($list_categories as $category)
                                            @if ($category['id'] == $product['category_id'])
                                            <span class="active-color">{{ $category['category_name'] }}</span>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            @php
                                            $total = 0;
                                            $count = 0;
                                            $star = 0
                                            @endphp
                                            @foreach ($list_reviews as $review)
                                                @if ($review['product_id'] == $product['id'])
                                                @php
                                                    $total += $review['rating'];
                                                    $count ++;
                                                @endphp
                                                @endif
                                            @endforeach
                                            @if ($count !== 0)
                                            $star = floor($total / $count);
                                            @endif
                                            <div class="inner-star">
                                                @for ($i = 1; $i <= $star; $i++)
                                                <i class="fas fa-star color-star-light"></i>
                                                @endfor
                                                @for ($i = 1; $i <= 5 - $star; $i++)
                                                <i class="fas fa-star color-star-dark"></i>
                                                @endfor
                                            </div>
                                            <div class="quanti-review color-grey"> ({{$count}})</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <!-- <span class="active-color">Đã bán 33</span> -->
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            @php
                                            $discount_percentage = 0;
                                            @endphp
                                            @foreach ($list_discounts as $discount)
                                            @if ($discount['product_id'] == $product['id'])
                                                $discount_percentage = $discount['discount_percentage'];
                                            @endif
                                            @endforeach
                                            @if ($discount_percentage === 0)
                                            <strong class="color-red">{{ number_format($product['list_price'], 0, ',', '.') }} vnđ</strong>
                                            @else
                                            <strong class="color-red">{{ number_format($product['list_price'] * (1 - $discount_percentage), 0, ',', '.') }} vnđ</strong>
                                            <del class="color-grey-2">{{ number_format($product['list_price'], 0, ',', '.') }} vnđ</del>
                                            @endif
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="product-list-pagination">
                        @for ($i = 1; $i <= $pageTotal; $i++)
                        @if ($i == $current_page)
                        <a href="{{ _WEB_ROOT }}/product/list?trang={{ $i }}" class="btn btn-success">{{ $i }}</a>
                        @else
                        <a href="{{ _WEB_ROOT }}/product/list?trang={{ $i }}" class="btn btn-outline-success">{{ $i }}</a>
                        @endif
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        @if (!empty($list_viewed))
        <div class="section-aside-product product-watched">
            <div class="product-watched-title">
                <h3>Sản phẩm bạn đã xem</h3>
                <a class="color-grey hover-color" data-toggle="tooltip" data-placement="top" title="Sản phẩm nổi bật" href="#">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="product-list-watched">
                <div id="splide-product-watched-item" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            <span>New</span>
                                            <span>-11%</span>
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name">
                                            <strong class="color-black">Rau cu trai cay ca rot bong</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            <span class="active-color">Rau cu bon mua</span>
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            <div class="inner-star">
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-dark"></i>
                                            </div>
                                            <div class="quanti-review color-grey"> (10)</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <span class="active-color">Đã bán 33</span>
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            <strong class="color-red">350.000 vnđ/kg</strong>
                                            <del class="color-grey-2">300.000 vnd</del>
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            <span>New</span>
                                            <span>-11%</span>
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name">
                                            <strong class="color-black">Rau cu trai cay ca rot bong</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            <span class="active-color">Rau cu bon mua</span>
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            <div class="inner-star">
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-dark"></i>
                                            </div>
                                            <div class="quanti-review color-grey"> (10)</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <span class="active-color">Đã bán 33</span>
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            <strong class="color-red">350.000 vnđ/kg</strong>
                                            <del class="color-grey-2">300.000 vnd</del>
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            <span>New</span>
                                            <span>-11%</span>
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name">
                                            <strong class="color-black">Rau cu trai cay ca rot bong</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            <span class="active-color">Rau cu bon mua</span>
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            <div class="inner-star">
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-dark"></i>
                                            </div>
                                            <div class="quanti-review color-grey"> (10)</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <span class="active-color">Đã bán 33</span>
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            <strong class="color-red">350.000 vnđ/kg</strong>
                                            <del class="color-grey-2">300.000 vnd</del>
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            <span>New</span>
                                            <span>-11%</span>
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name">
                                            <strong class="color-black">Rau cu trai cay ca rot bong</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            <span class="active-color">Rau cu bon mua</span>
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            <div class="inner-star">
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-dark"></i>
                                            </div>
                                            <div class="quanti-review color-grey"> (10)</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <span class="active-color">Đã bán 33</span>
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            <strong class="color-red">350.000 vnđ/kg</strong>
                                            <del class="color-grey-2">300.000 vnd</del>
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            <span>New</span>
                                            <span>-11%</span>
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name">
                                            <strong class="color-black">Rau cu trai cay ca rot bong</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            <span class="active-color">Rau cu bon mua</span>
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            <div class="inner-star">
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-dark"></i>
                                            </div>
                                            <div class="quanti-review color-grey"> (10)</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <span class="active-color">Đã bán 33</span>
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            <strong class="color-red">350.000 vnđ/kg</strong>
                                            <del class="color-grey-2">300.000 vnd</del>
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide">
                                <article class="product-list-infor">
                                    <a href="#">
                                        <div class="product-list-item-infor-new">
                                            <span>New</span>
                                            <span>-11%</span>
                                        </div>
                                        <div class="product-list-item-infor-img hover-zoom-img-2">
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name">
                                            <strong class="color-black">Rau cu trai cay ca rot bong</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            <span class="active-color">Rau cu bon mua</span>
                                        </div>
                                        <div class="product-list-item-infor-review">
                                            <div class="inner-star">
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-light"></i>
                                                <i class="fas fa-star color-star-dark"></i>
                                            </div>
                                            <div class="quanti-review color-grey"> (10)</div>
                                        </div>
                                        <div class="product-list-item-infor-sold">
                                            <span class="active-color">Đã bán 33</span>
                                        </div>
                                        <div class="product-list-item-infor-price">
                                            <strong class="color-red">350.000 vnđ/kg</strong>
                                            <del class="color-grey-2">300.000 vnd</del>
                                        </div>
                                    </a>
                                    <div class="product-list-item-infor-action text-align-center">
                                        <button class="btn btn-outline-success add-to-cart-btn">Thêm Vào Giỏ</button>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="section-aside-product product-watched">
            <div class="product-watched-title">
                <h3>Bài viết liên quan</h3>
                <a class="color-grey hover-color" data-toggle="tooltip" data-placement="top" title="Sản phẩm nổi bật" href="#">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="product-list-watched">
                <div id="splide-product-blog-item" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide margin-right-2">
                                <article class="text-align-center">
                                    <a style="display: block;" href="#" class="hover-zoom-img-2">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-5.jpg" alt="" />
                                    </a>
                                    <a href="#" class="margin-top-2 display-block">
                                        <strong class="hover-color color-black">Mật Dừa Nước Cô Đặc - Dừa Nước Ông Sáu</strong>
                                    </a>
                                    <div>
                                        <i class="far fa-calendar-alt"></i> 22/02/2022
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide margin-right-2">
                                <article class="text-align-center">
                                    <a style="display: block;" href="#" class="hover-zoom-img-2">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-5.jpg" alt="" />
                                    </a>
                                    <a href="#" class="margin-top-2 display-block">
                                        <strong class="hover-color color-black">Mật Dừa Nước Cô Đặc - Dừa Nước Ông Sáu</strong>
                                    </a>
                                    <div>
                                        <i class="far fa-calendar-alt"></i> 22/02/2022
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide margin-right-2">
                                <article class="text-align-center">
                                    <a style="display: block;" href="#" class="hover-zoom-img-2">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-5.jpg" alt="" />
                                    </a>
                                    <a href="#" class="margin-top-2 display-block">
                                        <strong class="hover-color color-black">Mật Dừa Nước Cô Đặc - Dừa Nước Ông Sáu</strong>
                                    </a>
                                    <div>
                                        <i class="far fa-calendar-alt"></i> 22/02/2022
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide margin-right-2">
                                <article class="text-align-center">
                                    <a style="display: block;" href="#" class="hover-zoom-img-2">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-5.jpg" alt="" />
                                    </a>
                                    <a href="#" class="margin-top-2 display-block">
                                        <strong class="hover-color color-black">Mật Dừa Nước Cô Đặc - Dừa Nước Ông Sáu</strong>
                                    </a>
                                    <div>
                                        <i class="far fa-calendar-alt"></i> 22/02/2022
                                    </div>
                                </article>
                            </li>
                            <li class="splide__slide margin-right-2">
                                <article class="text-align-center">
                                    <a style="display: block;" href="#" class="hover-zoom-img-2">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/clients/images/banner/slide-5.jpg" alt="" />
                                    </a>
                                    <a href="#" class="margin-top-2 display-block">
                                        <strong class="hover-color color-black">Mật Dừa Nước Cô Đặc - Dừa Nước Ông Sáu</strong>
                                    </a>
                                    <div>
                                        <i class="far fa-calendar-alt"></i> 22/02/2022
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>