<main>
    <div class="cart-cover">
        <div class="container">
            <div class="row">
                <section class="col-12 col-xl-8">
                    <div class="title-common-primary">
                        <h1>Giỏ Hàng</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="scroll-cart-sticky">
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Sản phẩm (1)</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col" class="text-align-center">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty(Session::data('cart')))
                                @foreach (Session::data('cart') as $product)
                                <tr>
                                    <td class="cart-product-img">
                                        <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/uploads/products/{{ $product['image'] }}" alt="" />
                                        <div class="margin-top-1 action-responsive">
                                            <button class="color-grey-3 hover-color"><i class="fas fa-times"></i></button>
                                            <a href="{{ _WEB_ROOT }}/product/detail/{{ $product['id'] }}" class="hover-color color-grey-3"><i class="far fa-eye"></i></a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-product-infor">
                                            <strong class="active-color display-block">{{ $product['product_name'] }}</strong>
                                            <!-- <span class="display-block color-grey-3 margin-top-2 margin-bottom-2">Túi hữu cơ 500g</span>
                                            <div class="cart-product-action">
                                                <span class="display-block color-grey-3">Màu vàng</span>
                                            </div> -->
                                        </div>
                                    </td>
                                    <td><strong class="color-grey-3">125.000 vnđ</strong></td>
                                    <td>
                                        <div class="quantity">
                                            <input type="number" min="0" name="quantity" step="1" value="1">
                                        </div>
                                    </td>
                                    <td class="text-align-center">
                                        <strong class="color-grey-3">125.000 vnđ</strong>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </section>
                <aside class="col-12 col-xl-4">
                    <div class="cart-checkout-infor bg-white">
                        <div class="flex-support">
                            <h3>Giao tới</h3>
                            <button data-toggle="modal" data-target="#editLocationModal">thay đổi</button>
                        </div>
                        <div>
                            <strong class="cart-checkout-infor-name">Lê Quang Tuấn</strong>
                            <strong>0964258789</strong>
                        </div>
                        <span class="display-block margin-top-1">12 Lê Quang Định, Gò Vấp, TPHCM</span>
                    </div>
                    <div class="cart-checkout-sale bg-white">
                        <h3>Khuyến mãi</h3>
                        <div class="cart-checkout-sale-coupon">
                            <input type="text" placeholder="mã khuyến mãi">
                            <button class="btn btn-success">Áp dụng</button>
                        </div>
                    </div>
                    <div class="cart-checkout-price bg-white">
                        <div class="flex-support">
                            <span class="color-grey-3">Tạm tính</span>
                            <span class="color-black">230.000 vnđ</span>
                        </div>
                        <div class="flex-support">
                            <span class="color-grey-3">Giảm giá</span>
                            <span class="color-black">0 vnđ</span>
                        </div>
                        <div class="flex-support total-price">
                            <span>Tổng cộng</span>
                            <span class="font-size-basic color-red">230.000 vnđ</span>
                        </div>
                    </div>
                    <div class="cart-checkout-submit">
                        <button class="btn btn-success w-100">Mua Hàng</button>
                    </div>
                    <div class="modal fade" id="editLocationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thông tin hiện tại</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div><strong>Họ và tên:</strong>
                                        <input class="w-100" type="text" value="Lê Quang Tuấn">
                                    </div>
                                    <div class="margin-top-2 margin-bottom-2">
                                        <strong>Số điện thoại: </strong>
                                        <input class="w-100" type="text" value="096666666">
                                    </div>
                                    <div>
                                        <strong>Địa chỉ: </strong>
                                        <input class="w-100" type="text" value="12 Lê Quang Định, Gò Vấp, TPHCM">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-success">Lưu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</main>