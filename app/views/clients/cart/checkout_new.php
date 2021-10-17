<main>
    <div class="container">
        <div class="row">
            <section class="col-12 col-xl-8">
                <div class="checkout-intern-form checkout-type-ship">
                    <h3>1. Hình thức giao hàng</h3>
                    <div class="checkout-intern-form-support checkout-type-ship-form">
                        <div>
                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/logo/ship/GHTK-logo.png" alt="" />
                            <strong class="display-block">Giao hàng tiết kiệm</strong>
                        </div>
                        <div class="responsive-checkout-type-support">
                            <span class="display-block active-color">Giao vào thứ ba, 22/08</span>
                            <span class="color-grey">Được giao bởi GHTK</span>
                        </div>
                        <div>
                            <span class="display-block">20.000 vnđ</span>
                            <button data-toggle="modal" data-target="#editTypeShipModal">Thay đổi</button>
                        </div>
                    </div>
                    <div class="modal fade" style="z-index: 999999;" id="editTypeShipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Chọn đơn vị vận chuyển</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>KÊNH VẬN CHUYỂN LIÊN KẾT VỚI HEALTHY FOOD</h6>
                                    <ul class="product-filter-list product-filter-list-price">
                                        <li class="filter-1-sp">
                                            <label class="filter-1-sp-ll">
                                                <input type="radio" name="checkedShipParent" class="checkedParent" data-checked-toggle="3" checked />
                                                <span class="toggle-type-ship-btn" data-checked-toggle="3">Giao hàng tiết kiệm</span>
                                            </label>
                                            <strong class="text-align-right">22.000 vnđ</strong>
                                            <ul class="checkout-type-ship-list" data-checked-toggle="3">
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radio1" checked>
                                                        <span>Tất cả các ngày trong tuần</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radio1">
                                                        <span>Chỉ giao hàng giờ hành chính</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="filter-1-sp">
                                            <label class="filter-1-sp-ll" data-checked-toggle="1">
                                                <input type="radio" name="checkedShipParent" class="checkedParent" data-checked-toggle="1" />
                                                <span class="toggle-type-ship-btn" data-checked-toggle="1">Giao hàng nhanh</span>
                                            </label>
                                            <strong>32.000 vnđ</strong>
                                            <ul class="checkout-type-ship-list" data-checked-toggle="1">
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radio2" checked>
                                                        <span>Tất cả các ngày trong tuần</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radio2">
                                                        <span>Chỉ giao hàng giờ hành chính</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="filter-1-sp">
                                            <label class="filter-1-sp-ll" data-checked-toggle="2">
                                                <input type="radio" name="checkedShipParent" class="checkedParent" data-checked-toggle="2" />
                                                <span class="toggle-type-ship-btn" data-checked-toggle="2">Giao hàng siêu tốc</span>
                                            </label>
                                            <strong>42.000 vnđ</strong>
                                            <ul class="checkout-type-ship-list" data-checked-toggle="2">
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radio3" checked>
                                                        <span>Tất cả các ngày trong tuần</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label>
                                                        <input type="radio" name="radio3">
                                                        <span>Chỉ giao hàng giờ hành chính</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-success">Thay đổi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout-intern-form checkout-type-payment">
                    <h3>2. Hình thức thanh toán</h3>
                    <div class="checkout-intern-form-support checkout-type-payment-form">
                        <ul class="product-filter-list product-filter-list-price">
                            <li class="filter-1-sp" style="padding-left: 0; border-bottom: none;">
                                <label class="filter-1-sp-ll">
                                    <input type="radio" name="checkedPaymentParent" class="checkedParent" checked />
                                    <span class="toggle-type-ship-btn"><i style="padding: 7.5; border-radius: 5px;" class="fas fa-hand-holding-usd margin-right-1 btn-success"></i> Thanh toán bằng tiền mặt khi nhận hàng</span>
                                </label>
                            </li>
                            <li class="filter-1-sp" style="padding-left: 0; border-bottom: none;">
                                <label class="filter-1-sp-ll">
                                    <input type="radio" name="checkedPaymentParent" class="checkedParent" />
                                    <span class="toggle-type-ship-btn"><strong class="momo-payment margin-right-1">mo<br>mo</strong> Thanh toán bằng ví MoMo</span>
                                </label>
                            </li>
                            <li class="filter-1-sp" style="padding-left: 0; border-bottom: none;">
                                <label class="filter-1-sp-ll">
                                    <input type="radio" name="checkedPaymentParent" class="checkedParent" />
                                    <span class="toggle-type-ship-btn"><strong class="zalo-payment margin-right-1">Zalo<br><i class="">Pay</i></strong> Thanh toán bằng ZaloPay</span>
                                </label>
                            </li>
                            <li class="filter-1-sp" style="padding-left: 0; border-bottom: none;">
                                <label class="filter-1-sp-ll">
                                    <input type="radio" name="checkedPaymentParent" class="checkedParent" />
                                    <span data-toggle="modal" data-target="#editTypePaymentBankModal" class="toggle-type-ship-btn"><i style="padding: 9px; border-radius: 5px; background-color: #4194a3; color: #Fff;" class="far fa-credit-card margin-right-1 "></i> Thẻ ATM nội địa/Internet Banking</span>
                                </label>
                            </li>
                        </ul>
                        <div class="modal fade" style="z-index: 999999;" id="editTypePaymentBankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Xin chọn ngân hàng</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="payment-banking-primary">
                                            <li class="actived-bank-btn">
                                                <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/logo/ship/vtb.png" alt="" />
                                            </li>
                                            <li class="actived-bank-btn">
                                                <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/logo/ship/vcm.png" alt="" />
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-success">Lưu</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <aside class="col-12 col-xl-4">
                <div class="cart-checkout-infor checkout-location bg-white">
                    <div class="flex-support">
                        <h3>Địa chỉ</h3>
                    </div>
                    <hr>
                    <div class="margin-top-1">
                        <strong class="cart-checkout-infor-name color-grey-1">Lê Quang Tuấn</strong>
                        <strong>0964258789</strong>
                    </div>
                    <span class="display-block margin-top-1">12 Lê Quang Định, Gò Vấp, TPHCM</span>
                </div>
                <div class="cart-checkout-price bg-white">
                    <div class="flex-support">
                        <h3>Đơn hàng</h3>
                        <span data-toggle="modal" data-target="#viewBillDetailModal" class="color-blue hover-color">Xem thông tin</span>
                    </div>
                    <hr>
                    <div class="flex-support">
                        <span class="color-grey-3">Tạm tính</span>
                        <span class="color-black">230.000 vnđ</span>
                    </div>
                    <div class="flex-support">
                        <span class="color-grey-3">Giảm giá</span>
                        <span class="color-black">0 vnđ</span>
                    </div>
                    <div class="flex-support">
                        <span class="color-grey-3">Phí vận chuyển</span>
                        <span class="color-black">20.000 vnđ vnđ</span>
                    </div>
                    <div class="flex-support total-price">
                        <span>Tổng cộng</span>
                        <span class="font-size-basic color-red">250.000 vnđ</span>
                    </div>
                </div>
                <div class="cart-checkout-submit">
                    <button class="btn btn-success w-100 checkout-btn">Tiến Hành Đặt Hàng</button>
                </div>
                <div class="modal fade" style="z-index: 99999;" id="viewBillDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Đơn hàng (2 sản phẩm)</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="scroll-cart-sticky">
                                                <th scope="col">Hình ảnh</th>
                                                <th scope="col">Sản phẩm</th>
                                                <th scope="col">Giá</th>
                                                <th scope="col">Số lượng</th>
                                                <th scope="col" class="text-align-center">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="cart-product-img">
                                                    <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                                </td>
                                                <td>
                                                    <div class="cart-product-infor">
                                                        <strong class="active-color display-block">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                                        <span class="display-block color-grey-3 margin-top-2 margin-bottom-2">Túi hữu cơ 500g</span>
                                                        <div class="cart-product-action">
                                                            <span class="display-block color-grey-3">Màu vàng</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><strong class="color-grey-3">125.000 vnđ</strong></td>
                                                <td>x1</td>
                                                <td class="text-align-center">
                                                    <strong class="color-grey-3">125.000 vnđ</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="cart-product-img">
                                                    <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-4.jpg" alt="" />
                                                </td>
                                                <td>
                                                    <div class="cart-product-infor">
                                                        <strong class="active-color display-block">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                                        <span class="display-block color-grey-3 margin-top-2 margin-bottom-2">Túi hữu cơ 500g</span>
                                                        <div class="cart-product-action">
                                                            <span class="display-block color-grey-3">Màu vàng</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><strong class="color-grey-3">125.000 vnđ</strong></td>
                                                <td>x1</td>
                                                <td class="text-align-center">
                                                    <strong class="color-grey-3">125.000 vnđ</strong>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>