<main>
    <div class="container">
        <div class="router-pages">
            <a href="home.php">Trang Chủ</a> -
            <a href="product.php">Danh mục sản phẩm</a> -
            <a href="#">{{ $product['product_name'] }}</a>
        </div>
        <div class="responsive-with-fix" style="margin-top: 20px; margin-bottom: 20px;">
            <section class="product-detail">
                <div class="row width100 max-width-100 responsive-with-fix">
                    <div class="col-12 col-lg-7 responsive-with-fix-2" style="background-color: #fff; padding: 20px;">
                        <div id="primary-slider" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <!-- ảnh -->
                                    <li class="splide__slide">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt="" />
                                    </li>
                                    @foreach ($list_gallary as $gallary)
                                    <li class="splide__slide">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/uploads/products/{{ $gallary['image'] }}" alt="" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div id="secondary-slider" class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <li class="splide__slide">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt="" />
                                    </li>
                                    @foreach ($list_gallary as $gallary)
                                    <li class="splide__slide">
                                        <img data-splide-lazy="{{ _WEB_ROOT }}/public/uploads/products/{{ $gallary['image'] }}" alt="" />
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 product-content product-detail-item">
                        <span class="product-name">{{ $product['product_name'] }}</span>
                        <div class="product-review display-flex">
                            @php
                            $total = 0;
                            $count = 0;
                            $star = 0;
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
                            <span class="hover-color quanti-reviewer review-scroll-btn">{{$count}} đánh giá</span>
                            <a href="#feedback-customer" class="my-review">Xem đánh giá</a>
                        </div>
                        <div class="product-price display-flex align-items-center">
                            @php
                            $discount_percentage = 0;
                            @endphp
                            @foreach ($list_discounts as $discount)
                            @if ($discount['product_id'] == $product['id'])
                                $discount_percentage = $discount['discount_percentage'];
                            @endif
                            @endforeach
                            @if ($discount_percentage === 0)
                            <span class="color-red-support margin-right-2"> {{ number_format($product['list_price'], 0, ',', '.') }} vnđ</span>
                            @else
                            <span class="color-red-support margin-right-2"> {{ number_format($product['list_price'] * (1 - $discount_percentage), 0, ',', '.') }} vnđ/kg</span>
                            <del class="color-grey-2 font-size-basic">{{ number_format($product['list_price'], 0, ',', '.') }} vnđ</del>
                            @endif
                        </div>
                        <hr style="width: 95%;">
                        <div class="product-info">Tình trạng:
                            <span class="active-color">Còn hàng (66)</span>
                            <!--<span class="color-red">Hết hàng</span>-->
                            <!--<span class="color-orange">Ngừng kinh doanh</span>-->
                            |
                            <span class="color-grey-3 margin-left-2">Đã bán 33</span>
                        </div>
                        <div class="product-info">SKU: {{ $product['product_code'] }}</div>
                        <p class="product-detail-contents">Phiên bản mới được thiết kế lạ xe, và các chấn động như được mang ra đời thật điều này nâng sự chân thật trong sự phản hồi khi chơi game lên tầm cao mới.</p>
                        <div class="margin-top-2">
                            Phân loại:
                            <span class="btn btn-outline-success active-color-classify-btn">Túi hữu cơ 100g</span>
                            <span class="btn btn-outline-success active-color-classify-btn">Túi hữu cơ 500g</span>
                            <span class="btn btn-outline-success active-color-classify-btn">Hủ 1kg</span>
                        </div>
                        <div class="margin-top-2">
                            Loại sản phẩm:
                            <span class="btn btn-outline-success active-color-type-btn">Màu xanh</span>
                            <span class="btn btn-outline-success active-color-type-btn">Màu đỏ</span>
                            <span class="btn btn-outline-success active-color-type-btn">Màu vàng</span>
                        </div>
                        <div class="form-product-detail">
                            <input type="hidden" id="id_product" name="id" value="{{ $product['id'] }}">
                            <div class="quantity">
                                <input type="number" id="qty" name="quantity" step="1" value="1">
                            </div>
                            <button id="submit-cart" class="btn btn-success width100">Thêm Vào Giỏ Hàng</button>
                        </div>
                        <div class="product-social-links">
                            <div class="add-wish-list">

                            </div>
                            <a href="#" class="share-btn-primary hover-color">
                                <i class="fas fa-share-alt"></i>
                                share
                            </a>
                        </div>
                        <hr>
                        <div class="product-info">Danh mục: <a href="">Tên danh mục</a></div>
                        <div class="product-info">Nhãn hàng: <a href="">Tên nhãn hàng</a></div>
                    </div>
                </div>
                <div class="product-detail-information">
                    <div class="product-detail-information-title">
                        <h3>Thông tin sản phẩm</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 col-xl-8 product-detail-information-contents">
                            {! $product['description'] !}
                        </div>
                        <aside class="col-12 col-xl-4">
                            <ul class="product-information-important">
                                <li>
                                    <strong>Thương hiệu:</strong>
                                    <strong class="active-color display-block">Nguyên Anh Seafood</strong>
                                </li>
                                <li>
                                    <strong>Mã sản phẩm:</strong>
                                    <span class="color-grey-3">300020000009</span>
                                </li>
                                <li>
                                    <strong>Xuất xứ:</strong>
                                    <span class="color-grey-3">Phú Quốc - Việt Nam</span>
                                </li>
                                <li>
                                    <strong>Ngày sản xuất:</strong>
                                    <span class="color-grey-3">In trên bao bì</span>
                                </li>
                                <li>
                                    <strong>Hạn sử dụng:</strong>
                                    <span class="color-grey-3"> 2-3 ngày từ ngày sản xuất</span>
                                </li>
                                <li>
                                    <strong>Thành phần:</strong>
                                    <span class="color-grey-3">100% Từ thiên nhiên</span>
                                </li>
                                <li>
                                    <strong>Hướng dẫn sử dụng:</strong>
                                    <span class="color-grey-3">Hấp, kho, chiên, cháy tỏi, nấu canh, nấu lẩu…</span>
                                </li>
                                <li>
                                    <strong>Hướng dẫn bảo quản:</strong>
                                    <span class="color-grey-3">Bảo quản ở ngăn đá -18 độ C</span>
                                </li>
                            </ul>
                            <div>
                                <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/lua.jpg" alt="" />
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="product-detail-info" id="feedback-customer">
                    <div class="product-detail-header">
                    </div>
                    <div class="product-detail-content">
                        <h3>Khách hàng đánh giá</h3>
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="product-detail-rate">
                                    <div class="product-detail-rate-total">
                                        <span>4.5</span>
                                        <i class="fas fa-star color-star-light"></i>
                                    </div>
                                    <div class="product-detail-rate-ingre">
                                        <div>
                                            <span class="order-1 display-inline-block active-color">5 sao</span>
                                            <div class="order-3 progress display-inline-block" style="height: 5px; width: 200px; margin: 0 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 88%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100">33%</div>
                                            </div>
                                            <span class="order-2 color-blue">2 đánh giá</span>
                                        </div>
                                        <div>
                                            <span class="display-inline-block active-color">4 sao</span>
                                            <div class="progress display-inline-block" style="height: 5px; width: 200px; margin: 0 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="color-blue">0 đánh giá</span>
                                        </div>
                                        <div>
                                            <span class="display-inline-block active-color">3 sao</span>
                                            <div class="progress display-inline-block" style="height: 5px; width: 200px; margin: 0 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="color-blue">0 đánh giá</span>
                                        </div>
                                        <div>
                                            <span class="display-inline-block active-color">2 sao</span>
                                            <div class="progress display-inline-block" style="height: 5px; width: 200px; margin: 0 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="color-blue">0 đánh giá</span>
                                        </div>
                                        <div>
                                            <span class="display-inline-block active-color">1 sao</span>
                                            <div class="progress display-inline-block" style="height: 5px; width: 200px; margin: 0 10px;">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="color-blue">0 đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="product-detail-comment">
                            <div class="product-detail-comment-infor">
                                <div class="product-detail-comment-infor-user">
                                    <div class="user-information">
                                        <div>
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/product/user/user.png" alt="" />
                                        </div>
                                        <div>
                                            <strong class="color-grey-3">Quang Tuan</strong>
                                            <span class="color-grey-2">Tham gia 2 ngày trước</span>
                                        </div>
                                    </div>
                                    <div class="user-action">
                                        <i class="far fa-comment-alt color-grey-2"></i>
                                        <span class="color-grey-2">Đã viết: </span>
                                        <span class="color-grey-3">2 đánh giá</span>
                                    </div>
                                </div>
                                <div class="product-detail-comment-infor-contents">
                                    <div class="inner-star">
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-dark"></i>
                                    </div>
                                    <span class="display-block margin-top-2 color-grey-2">1 ngày trước</span>
                                    <p class="display-block margin-top-2 margin-bottom-2">
                                        rất hài lòng với dịch vụ chăm sóc khách hàng của shop.tủ mới đẹp. ok với giá tiền.tủ này dùng 2 dàn lạnh độc lập. nên ngăn mát có độ ẩm 70%, độ ẩm này rất cao nên sẽ có hiện tượng đọng nước ngăn mát các bạn mua về thấy vây. tưởng là bị lỗi.( m mua về cungz tưởng là bị lỗi nên điẹn lên cskh, và đk bên bảo hành sam sung bảo là tủ có độ ẩm cao 70% để tăng độ tươi rau củ quả. nên kbi mở cánh cửa tủ ngăn mát, CHO dù mở cửa ngăn mát xong đóng lại nhanh vẫn sẻ xảy ra hiện tượng đọng nước trong ngăn mát một ít) tủ ok trong tầm giá tiền.
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="product-detail-comment-infor">
                                <div class="product-detail-comment-infor-user">
                                    <div class="user-information">
                                        <div>
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/product/user/user.png" alt="" />
                                        </div>
                                        <div>
                                            <strong class="color-grey-3">Tan Loc</strong>
                                            <span class="color-grey-2">Tham gia 1 ngày trước</span>
                                        </div>
                                    </div>
                                    <div class="user-action">
                                        <i class="far fa-comment-alt color-grey-2"></i>
                                        <span class="color-grey-2">Đã viết: </span>
                                        <span class="color-grey-3">2 đánh giá</span>
                                    </div>
                                </div>
                                <div class="product-detail-comment-infor-contents">
                                    <div class="inner-star">
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-light"></i>
                                        <i class="fas fa-star color-star-dark"></i>
                                    </div>
                                    <span class="display-block margin-top-2 color-grey-2">1 phút trước</span>
                                    <p class="display-block margin-top-2 margin-bottom-2">
                                        rất hài lòng với dịch vụ chăm sóc khách hàng của shop.tủ mới đẹp. ok với giá tiền.tủ này dùng 2 dàn lạnh độc lập. nên ngăn mát có độ ẩm 70%, độ ẩm này rất cao nên sẽ có hiện tượng đọng nước ngăn mát các bạn mua về thấy vây. tưởng là bị lỗi.( m mua về cungz tưởng là bị lỗi nên điẹn lên cskh, và đk bên bảo hành sam sung bảo là tủ có độ ẩm cao 70% để tăng độ tươi rau củ quả. nên kbi mở cánh cửa tủ ngăn mát, CHO dù mở cửa ngăn mát xong đóng lại nhanh vẫn sẻ xảy ra hiện tượng đọng nước trong ngăn mát một ít) tủ ok trong tầm giá tiền.
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @if (!empty($list_viewed_products))
        <div class="section-aside-product product-watched">
            <div class="product-watched-title">
                <h3>Sản phẩm bạn đã xem</h3>
                <a class="color-grey hover-color" data-toggle="tooltip" data-placement="top" title="Sản phẩm nổi bật" href="#">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="product-list-watched">
                <div id="splide-product-watched-item" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($list_viewed_products as $product)
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
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <div class="section-aside-product product-watched">
            <div class="product-watched-title">
                <h3>Sản phẩm liên quan</h3>
                <a class="color-grey hover-color" data-toggle="tooltip" data-placement="top" title="Sản phẩm nổi bật" href="#">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
            </div>
            <div class="product-list-watched">
                <div id="splide-product-relation-item" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($list_related_products as $product)
                            <li class="splide__slide">
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
                                            <img data-splide-lazy="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt="" />
                                        </div>
                                        <div class="product-list-item-infor-name textshorten">
                                            <strong class="color-black">{{ $product['product_name'] }}</strong>
                                        </div>
                                        <div class="product-list-item-infor-cate">
                                            @foreach ($list_prod_cates as $category)
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
                </div>
            </div>
        </div>
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