<main>
    <div class="container">
        <div class="router-pages">
            <a href="home.php">Trang Chủ</a> -
            <a href="product.php">Trang Cá Nhân</a> -
            <a href="#">Quang Tuấn</a>
        </div>
        <div class="row" style="margin-top: 20px; margin-bottom: 20px;">
            <i class="fas fa-list open-user-aside-btn"></i>
            <aside class="col-12 col-lg-3 col-xl-3 responsive-fix-support">
                <div class="product-filter section-aside-product user-control-form">
                    <div class="user-title">
                        <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/login/avatar.png" alt="" />
                        <div>
                            <span class="display-block">Xin chào!</span>
                            <strong class="hover-color">Lê Quang Tuấn</strong>
                        </div>
                        <i class="fas fa-times close-user-aside-btn"></i>
                    </div>
                    <ul class="product-filter-list product-filter-list-cate">
                        <li class="user-support-cate" data-user="1">
                            <div class="product-flex">
                                <strong data-user-infor="1" class="hover-color color-grey-4 active-color font-size-basic user-title-active-color-btn view-user-profile-btn"><i class="fas fa-user"></i> Hồ Sơ</strong>
                            </div>
                            <ul class="product-filter-list-cate-2 user-noti-btn">
                                <li data-user-infor="1" class="color-grey-3 hover-color active-color active-color-btn user-infor-btn">
                                    Thông tin cá nhân
                                </li>
                                <li data-user-infor="2" class="color-grey-3 hover-color active-color-btn user-infor-btn">
                                    Ngân hàng
                                </li>
                                <li data-user-infor="3" class="color-grey-3 hover-color active-color-btn user-infor-btn">
                                    Địa chỉ
                                </li>
                                <li data-user-infor="4" class="color-grey-3 hover-color active-color-btn user-infor-btn">
                                    Đổi mật khẩu
                                </li>
                            </ul>
                        </li>
                        <li class="user-support-cate" data-user="2">
                            <div class="product-flex">
                                <strong class="hover-color color-grey-4 font-size-basic user-title-active-color-btn view-user-bill-btn"><i class="fas fa-file-alt"></i> Đơn Hàng</strong>
                            </div>
                        </li>
                        <li class="user-support-cate" data-user="3">
                            <div class="product-flex">
                                <strong data-noti="1" class="hover-color color-grey-4 font-size-basic user-title-active-color-btn view-user-news-btn"><i class="fas fa-bell"></i>Thông báo</strong>
                            </div>
                            <ul class="product-filter-list-cate-2 user-notification user-noti-btn" data-user="4">
                                <li class="color-grey-3 hover-color active-color active-color-btn noti-news-btn" data-noti="1">
                                    Đánh Giá Sản Phẩm
                                </li>
                                <li class="color-grey-3 hover-color active-color-btn noti-news-btn" data-noti="2">
                                    Tin tức liên quan
                                </li>
                            </ul>
                        </li>
                        <li class="user-support-cate" data-user="5">
                            <div class="product-flex">
                                <strong class="hover-color color-grey-4 font-size-basic user-title-active-color-btn view-voucher-btn"><i class="fas fa-calendar-check"></i> Kho Voucher</strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="col-12 col-lg-9 col-xl-9" id="product-list-cover">
                <div class="product-list list-user-confirm" data-user-infor="1">
                    <div class="">
                        <h3 class="color-grey-4 margin-right-2">Thông tin của tôi</h3>
                        <span style="color: #555;">Quản lý thông tin hồ sơ để bảo mật tài khoản</span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-lg-8 user-information-form">
                            <div class="flex-user">
                                <span class="flex-user-title">Tên Đăng Nhập</span>
                                <span class="flex-user-content">quangtuan123</span>
                            </div>
                            <div class="flex-user">
                                <span class="flex-user-title">Họ và tên</span>
                                <div class="flex-user-content">
                                    <input type="text" class="input-group">
                                </div>
                            </div>
                            <div class="flex-user">
                                <span class="flex-user-title">Email</span>
                                <div class="flex-user-content">
                                    <span>qu*******23@gmail.com</span>
                                    <a href="#">Thay Đổi</a>
                                </div>
                            </div>
                            <div class="flex-user">
                                <span class="flex-user-title">Số điện thoại</span>
                                <div class="flex-user-content">
                                    <span>**********23</span>
                                    <a href="#">Thay Đổi</a>
                                </div>
                            </div>
                            <div class="flex-user">
                                <span class="flex-user-title">Giới tính</span>
                                <div class="flex-user-content user-gender">
                                    <input type="radio" class=""> <label for="men">Nam</label>
                                    <input type="radio" class=""> <label for="woman">Nữ</label>
                                    <input type="radio" class=""> <label for="order">Khác</label>
                                </div>
                            </div>
                            <div class="flex-user">
                                <span class="flex-user-title">Ngày sinh</span>
                                <div class="flex-user-content">
                                    <input type="date" class="">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="user-infor-img text-align-center">
                                <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/login/avatar.png" alt="" />
                                <input id="uploadImg" type="file">
                                <label for="uploadImg" class="btn btn-primary display-block margin-top-2">Chọn Ảnh</label>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-pagination">
                        <button class="btn btn-success change-user-infor-btn">Lưu</button>
                    </div>
                </div>
                <div class="product-list list-user-confirm display-none" data-user-infor="2">
                    <div class="display-flex align-items-center justify-content-between">
                        <h4 class="color-grey-4 margin-right-2">Thẻ tín dụng / Thẻ ghi nợ</h4>
                        <button class="btn btn-success" data-toggle="modal" data-target="#addVisaModal">Thêm Thẻ Mới</button>
                    </div>
                    <div class="modal fade" id="addVisaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm thẻ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="margin-bottom-2">
                                        <strong class="color-grey-4 margin-bottom-1 display-block">Chi tiết thẻ</strong>
                                        <input class="w-100" type="text" placeholder="Họ tên trên thẻ">
                                    </div>
                                    <div class="margin-bottom-2">
                                        <input type="text" placeholder="Số thẻ">
                                        <i class="fab fa-cc-visa credit-card-active-btn"></i>
                                        <i class="fab fa-cc-mastercard credit-card-active-btn"></i>
                                        <i class="fab fa-cc-jcb credit-card-active-btn"></i>
                                        <i class="fab fa-cc-paypal credit-card-active-btn"></i>
                                    </div>
                                    <div class="margin-bottom-4">
                                        <input type="datetime" placeholder="Ngày hết hạn (MM/YY)">
                                        <input type="text" placeholder="Mã CVV">
                                    </div>
                                    <div class="margin-bottom-2">
                                        <strong class="color-grey-4 margin-bottom-1 display-block">Địa chỉ đăng ký thẻ Tín dụng/Ghi nợ</strong>
                                        <input class="w-100" type="text" placeholder="Địa chỉ hóa đơn">
                                    </div>
                                    <div class="margin-bottom-2">
                                        <input class="w-100" type="text" placeholder="Postal Code">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-success">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-lg-12 user-information-form">
                            <p class="text-align-center">Bạn chưa có thẻ nào</p>
                        </div>
                    </div>
                    <hr>
                    <div class="display-flex align-items-center justify-content-between responsive-bank">
                        <h4 class="color-grey-4 margin-right-2">Tài Khoản Ngân Hàng Của Tôi</h4>
                        <button class="btn btn-success" data-toggle="modal" data-target="#addBankModal">Thêm Tài Khoản Ngân Hàng</button>
                    </div>
                    <div class="modal fade" id="addBankModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm thẻ ngân hàng</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="margin-bottom-2">
                                        <input class="w-100" type="text" placeholder="Họ và tên">
                                    </div>
                                    <div class="margin-bottom-4">
                                        <input class="w-100" type="text" placeholder="Số CMND">
                                    </div>
                                    <div class="margin-bottom-2">
                                        <label for="seclectBank">Tên Ngân Hàng</label>
                                        <select class="form-control" id="seclectBank">
                                            <option>Vietcombank</option>
                                            <option>Viettinbank</option>
                                            <option>Dong A Bank</option>
                                            <option>Techcombank</option>
                                        </select>
                                    </div>
                                    <div class="margin-bottom-2">
                                        <label for="seclectBank">Chi Nhánh Ngân Hàng</label>
                                        <select class="form-control" id="seclectBank">
                                            <option>Vietcombank</option>
                                            <option>Viettinbank</option>
                                            <option>Dong A Bank</option>
                                            <option>Techcombank</option>
                                        </select>
                                    </div>
                                    <div class="margin-bottom-2">
                                        <input class="w-100" type="text" placeholder="Số tài khoản">
                                    </div>
                                    <div class="margin-bottom-4">
                                        <input class="w-100" type="text" placeholder="Tên đầy đủ (viết in hoa, không dấu)">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-success">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-lg-12 user-information-form">
                            <p class="text-align-center">Bạn chưa có thẻ nào</p>
                            <ul>
                                <li class="bank-infor">
                                    <div class="display-flex" style="gap: 10px;">
                                        <div>
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/logo/ship/vcm.png" alt="" />
                                        </div>
                                        <div>
                                            <div>
                                                <strong class="margin-right-2">VP BANK - NHTMCP VN THINH VUONG</strong>
                                                <span class="color-blue">đã duyệt</span>
                                            </div>
                                            <span class="display-block color-black margin-top-2 margin-bottom-2">Họ và tên: Lê Quang Tuấn</span>
                                            <div>
                                                <span class="color-grey-3">Khu vực:</span>
                                                <span class="color-grey-4">TP Hồ Chí Minh</span>
                                                <span class="color-grey-3">Chi nhánh:</span>
                                                <span class="color-grey-4">Hồ Chí Minh</span>
                                            </div>
                                        </div>
                                        <span class="bank-infor-num-check">*9819</span>
                                    </div>
                                    <div class="center-responsive">
                                        <button class="btn btn-danger">Xóa</button>
                                        <button class="btn btn-success">Đặt Làm Mặc Định</button>
                                    </div>
                                </li>
                                <li class="bank-infor">
                                    <div class="display-flex" style="gap: 10px;">
                                        <div>
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/logo/ship/vcm.png" alt="" />
                                        </div>
                                        <div>
                                            <div>
                                                <strong class="margin-right-2">VP BANK - NHTMCP VN THINH VUONG</strong>
                                                <span class="btn btn-success">Mặc Định</span>
                                            </div>
                                            <span class="display-block color-black margin-top-2 margin-bottom-2">Họ và tên: Lê Quang Tuấn</span>
                                            <div>
                                                <span class="color-grey-3">Khu vực:</span>
                                                <span class="color-grey-4">TP Hồ Chí Minh</span>
                                                <span class="color-grey-3">Chi nhánh:</span>
                                                <span class="color-grey-4">Hồ Chí Minh</span>
                                            </div>
                                        </div>
                                        <span class="bank-infor-num-check">*9819</span>
                                    </div>
                                    <div class="center-responsive">
                                        <button class="btn btn-danger">Xóa</button>
                                        <button class="btn btn-success">Đặt Làm Mặc Định</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product-list list-user-confirm display-none" data-user-infor="3">
                    <div class="display-flex align-items-center justify-content-between">
                        <h4 class="color-grey-4 margin-right-2">Địa chỉ của tôi</h4>
                        <button class="btn btn-success" data-toggle="modal" data-target="#addLocationModal">Thêm Địa Chỉ Mới</button>
                    </div>
                    <div class="modal fade" id="addLocationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Thêm địa chỉ</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="margin-bottom-2">
                                        <label for="seclectProvince">Tỉnh/ Thành Phố</label>
                                        <select class="form-control" id="seclectProvince">
                                            <option>An Giang</option>
                                            <option>Hồ Chí Minh</option>
                                            <option>Đồng Nai</option>
                                            <option>Bình Định</option>
                                        </select>
                                    </div>
                                    <div class="margin-bottom-2">
                                        <label for="seclectDistrict">Quận Huyện</label>
                                        <select class="form-control" id="seclectDistrict">
                                            <option>Huyện An Phú</option>
                                            <option>Huyện Châu Phú</option>
                                            <option>Huyện Châu Thành</option>
                                            <option>Huyện Chợ Mới</option>
                                        </select>
                                    </div>
                                    <div class="margin-bottom-2">
                                        <label for="seclectWars">Phường/ Xã</label>
                                        <select class="form-control" id="seclectWars">
                                            <option>Thị Trấn An Phú</option>
                                            <option>Thị Trấn Long Bình</option>
                                            <option>Xã Khánh An</option>
                                            <option>Xã Khánh Bình</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    <button type="button" class="btn btn-success">Thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-lg-12 user-information-form">
                            <p class="display-block text-align-center">6 Lê Lợi, Phường 4, Quận Gò Vấp, TPHCM</p>
                            <button data-toggle="modal" data-target="#addLocationModal" class="btn btn-success margin-0px-auto display-block">Sửa</button>
                            <p class="text-align-center">Bạn chưa có địa chỉ nào</p>
                        </div>
                    </div>
                </div>
                <div class="product-list list-user-confirm display-none" data-user-infor="4">
                    <div class="">
                        <h3 class="color-grey-4 margin-right-2">Đổi Mật Khẩu</h3>
                        <span style="color: #555;">Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu cho người khác</span>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-lg-12 user-information-form">
                            <div class="flex-user">
                                <span class="flex-user-title">Mật khẩu hiện tại</span>
                                <div class="flex-user-content">
                                    <input type="password" class="input-group">
                                </div>
                            </div>
                            <div class="flex-user">
                                <span class="flex-user-title">Mật khẩu mới</span>
                                <div class="flex-user-content">
                                    <input type="password" class="input-group">
                                </div>
                            </div>
                            <div class="flex-user" style="margin-bottom: 10px;">
                                <span class="flex-user-title">Xác nhận mật khẩu</span>
                                <div class="flex-user-content">
                                    <input type="password" class="input-group">
                                </div>
                            </div>
                            <a class="display-block text-align-right" href="#">Quên mật khẩu?</a>
                        </div>
                    </div>
                    <div class="product-list-pagination">
                        <button class="btn btn-success change-user-pass-btn">Xác Nhận</button>
                    </div>
                </div>
                <div class="product-list display-none list-user-bill list-user-bill-cover max-width-100" data-user-infor="5">
                    <div class="product-list-option">
                        <ul>
                            <li class="actived-color-bill-btn active-option">Tất Cả</li>
                            <li class="actived-color-bill-btn">Chờ Xác Nhận</li>
                            <li class="actived-color-bill-btn">Chờ Lấy Hàng</li>
                            <li class="actived-color-bill-btn">Đang Giao</li>
                            <li class="actived-color-bill-btn">Đã Giao</li>
                            <li class="actived-color-bill-btn">Đã Hủy</li>
                        </ul>
                    </div>
                    <div class="list-bill-infor">
                        <ul>
                            <li>
                                <div class="display-flex justify-content-between align-items-center list-bill-detail responsive-bill-cover">
                                    <div class="display-flex align-items-center list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                            <span class="color-grey-4 display-block">Túi hữu cơ 500g</span>
                                            <span class="color-grey-4">Màu vàng</span>
                                            <span class="color-grey-3 display-block">18:56 22/08/2022</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <span class="display-block color-red">ĐÃ HỦY</span>
                                        <span class="color-black display-block margin-top-1 margin-bottom-1">500.000 vnđ</span>
                                        <button data-toggle="modal" data-target="#viewBillDetailModal" class="btn btn-success">Xem chi tiết</button>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <li>
                                <div class="display-flex justify-content-between align-items-center list-bill-detail responsive-bill-cover">
                                    <div class="display-flex align-items-center list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                            <span class="color-grey-4 display-block">Túi hữu cơ 500g</span>
                                            <span class="color-grey-4">Màu vàng</span>
                                            <span class="color-grey-3 display-block">18:56 22/08/2022</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <span class="display-block active-color">HOÀN THÀNH</span>
                                        <span class="color-black display-block margin-top-1 margin-bottom-1">500.000 vnđ</span>
                                        <button data-toggle="modal" data-target="#viewBillDetailModal" class="btn btn-success">Xem chi tiết</button>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <li>
                                <div class="display-flex justify-content-between align-items-center list-bill-detail responsive-bill-cover">
                                    <div class="display-flex align-items-center list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                            <span class="color-grey-4 display-block">Túi hữu cơ 500g</span>
                                            <span class="color-grey-4">Màu vàng</span>
                                            <span class="color-grey-3 display-block">18:56 22/08/2022</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <span class="display-block color-blue">ĐANG GIAO</span>
                                        <span class="color-black display-block margin-top-1 margin-bottom-1">500.000 vnđ</span>
                                        <button data-toggle="modal" data-target="#viewBillDetailModal" class="btn btn-success">Xem chi tiết</button>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <li>
                                <div class="display-flex justify-content-between align-items-center list-bill-detail responsive-bill-cover">
                                    <div class="display-flex align-items-center list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                            <span class="color-grey-4 display-block">Túi hữu cơ 500g</span>
                                            <span class="color-grey-4">Màu vàng</span>
                                            <span class="color-grey-3 display-block">18:56 22/08/2022</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <span class="display-block color-orange">ĐANG LẤY HÀNG</span>
                                        <span class="color-black display-block margin-top-1 margin-bottom-1">500.000 vnđ</span>
                                        <button data-toggle="modal" data-target="#viewBillDetailModal" class="btn btn-success">Xem chi tiết</button>
                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                        <div class="modal fade" id="viewBillDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">
                                            Chi tiết đơn hàng
                                            <span class="btn btn-danger">Đã hủy</span>
                                            <span class="btn btn-warning" style="color: #fff;">Chờ Xác Nhận</span>
                                            <span class="btn btn-info">Chờ Lấy Hàng</span>
                                            <span class="btn btn-primary">Đang Giao</span>
                                            <span class="btn btn-success">Hoàn thành</span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <div class="display-flex responsive-fix-bill">
                                                <div class="">
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Khách hàng:</span>
                                                        <strong class="flex-bill-content">Lê Quang Tuấn</strong>
                                                    </div>
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Số điện thoại:</span>
                                                        <strong class="flex-bill-content">096666623</strong>
                                                    </div>
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Địa chỉ:</span>
                                                        <strong class="flex-bill-content">6 Le Loi, Phuong 4, Go Vap, TPHCM</strong>
                                                    </div>
                                                </div>
                                                <div class="flex-gorw-1">
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Hình thức giao hàng:</span>
                                                        <strong class="flex-bill-content">COD</strong>
                                                    </div>
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Ngày đặt hàng:</span>
                                                        <strong class="flex-bill-content">12/08/2022</strong>
                                                    </div>
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Tổng giá đơn hàng:</span>
                                                        <strong class="flex-bill-content">500.000 vnđ</strong>
                                                    </div>
                                                    <div class="flex-bill">
                                                        <span class="flex-bill-title">Ngày nhận hàng:</span>
                                                        <strong class="flex-bill-content">12/09/2022</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table overflow-x-scroll">
                                                    <thead class="responsive-bill-scroll">
                                                        <tr class="scroll-cart-sticky">
                                                            <th scope="col">Hình ảnh</th>
                                                            <th scope="col">Sản phẩm (4)</th>
                                                            <th scope="col">Giá</th>
                                                            <th scope="col" class="text-align-center">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="responsive-bill-scroll">
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
                                                            <td class="text-align-center">
                                                                <strong class="color-grey-3">125.000 vnđ</strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-danger">Hủy Đơn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-align-center">
                            <button class="btn btn-success">1</button>
                            <button class="btn btn-secondary">2</button>
                        </div>
                    </div>
                </div>
                <div class="product-list list-user-bill display-none list-user-news" data-noti="1">
                    <div class="">
                        <h3 class="color-grey-4 margin-right-2">Sản phẩm bạn đã mua</h3>
                        <span style="color: #555;">Tham gia đánh giá sản phẩm để nhận nhiều ưu đãi hơn</span>
                    </div>
                    <hr>
                    <div class="list-bill-infor">
                        <ul>
                            <li>
                                <div class="display-flex justify-content-between align-items-end list-bill-detail responsive-noti-news">
                                    <div class="display-flex align-items-start list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                            <span class="color-grey-3 display-block">18:56 22/08/2022</span>
                                            <span class="color-black display-block">120.000 vnđ</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <strong class="active-color">Đã Đánh Giá Sản Phẩm <i class="fas fa-check"></i></strong>
                                    </div>
                                </div>
                                <hr>
                            </li>
                            <li>
                                <div class="display-flex justify-content-between align-items-end list-bill-detail responsive-noti-news">
                                    <div class="display-flex align-items-start list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color">Cam Kiến Vàng Vĩnh Long Mọng Nước, Canh Tác An Toàn</strong>
                                            <span class="color-grey-3 display-block">18:56 22/08/2022</span>
                                            <span class="color-black display-block">250.000 vnđ</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <button data-toggle="modal" data-target="#reviewProductModal" class="btn btn-success">Đánh Giá Sản Phẩm</button>
                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                        <div class="modal fade" id="reviewProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Đánh Giá Sản Phẩm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <strong>Đánh giá: 1-5 sao</strong>
                                        <div>
                                            <div class="inner-star display-flex margin-top-2 margin-bottom-2">
                                                <i class="fas fa-star color-star-dark rating-items" data-rating="1"></i>
                                                <i class="fas fa-star color-star-dark rating-items" data-rating="2"></i>
                                                <i class="fas fa-star color-star-dark rating-items" data-rating="3"></i>
                                                <i class="fas fa-star color-star-dark rating-items" data-rating="4"></i>
                                                <i class="fas fa-star color-star-dark rating-items" data-rating="5"></i>
                                            </div>
                                        </div>
                                        <strong class="margin-top-2 margin-bottom-1">Bình luận về sản phẩm:</strong>
                                        <textarea name="comment" id="comment-product" class="w-100 max-width-100" rows="5" placeholder="Bạn muốn nói gì?"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                        <button type="button" class="btn btn-success review-product-btn" data-dismiss="modal">Xác Nhận</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-align-center">
                        <button class="btn btn-success">1</button>
                        <button class="btn btn-secondary">2</button>
                    </div>
                </div>
                <div class="product-list list-user-bill display-none list-user-news" data-noti="2">
                    <div class="">
                        <h3 class="color-grey-4 margin-right-2">Tin tức hàng ngày</h3>
                        <span style="color: #555;">Tham gia đánh giá sản phẩm để nhận nhiều ưu đãi hơn</span>
                    </div>
                    <hr>
                    <div class="list-bill-infor">
                        <ul>
                            <li>
                                <div class="display-flex justify-content-between align-items-start list-bill-detail responsive-noti-news">
                                    <div class="display-flex align-items-start list-bill-detail-contents">
                                        <div class="margin-right-2">
                                            <img class="lazy-load img-width-primary d-block" data-src="{{ _WEB_ROOT }}/public/clients/images/banner/slide-6.jpg" alt="" />
                                        </div>
                                        <div>
                                            <strong class="active-color  substring-title-blog">Giảm 15k phí vận chuyển Cho Đơn Hàng Từ 2 Khay Cá Nục Hải Thần</strong>
                                            <p style="margin-bottom: 0;" class="display-block margin-bottom-1 substring-title-blog-2">Cá nục Hải Thần được đánh bắt ở vùng biển Thuận An (Huế), nơi nổi tiếng với nhiều loại hải sản phong phú. Do được đánh bắt bằng tàu mành (ra khơi và trở về trong 2-3 ngày) nên cá luôn giữ được chất lượng và độ tươi ngon.</p>
                                            <span class=" display-block">18:56 22/08/2022</span>
                                        </div>
                                    </div>
                                    <div class="list-bill-detail-status text-align-right">
                                        <a href="blog-detail.php" class="btn btn-success">Xem Chi Tiết</a>
                                    </div>
                                </div>
                                <hr>
                            </li>
                        </ul>
                    </div>
                    <div class="text-align-center">
                        <button class="btn btn-success">1</button>
                        <button class="btn btn-secondary">2</button>
                    </div>
                </div>
                <div class="product-list list-voucher-form display-none" data-user-infor="7">
                    <div class="product-list-option">
                        <ul>
                            <li class="actived-color-bill-btn active-option">Mới Nhất</li>
                            <li class="actived-color-bill-btn">Phổ Biến</li>
                            <li class="actived-color-bill-btn">Sắp Hết Hạn</li>
                        </ul>
                    </div>
                    <div class="list-bill-infor">
                        <ul class="voucher-list">
                            <li class="voucher-item">
                                <div class="voucher-item-cover">
                                    <div class="voucher-item-title">
                                        <span>MIỄN PHÍ VẬN CHUYỂN</span>
                                        <div class="voucher-item-title-support"></div>
                                    </div>
                                    <div class="voucher-item-contents">
                                        <strong class="display-block">Mã khuyến mãi: BD0232123</strong>
                                        <span>HSD: 28/02/2025</span>
                                    </div>
                                </div>
                            </li>
                            <li class="voucher-item">
                                <div class="voucher-item-cover">
                                    <div class="voucher-item-title">
                                        <span>MIỄN PHÍ VẬN CHUYỂN</span>
                                        <div class="voucher-item-title-support"></div>
                                    </div>
                                    <div class="voucher-item-contents">
                                        <strong class="display-block">Mã khuyến mãi: BD0232123</strong>
                                        <span>HSD: 28/02/2025</span>
                                    </div>
                                </div>
                            </li>
                            <li class="voucher-item">
                                <div class="voucher-item-cover">
                                    <div class="voucher-item-title">
                                        <span>MIỄN PHÍ VẬN CHUYỂN</span>
                                        <div class="voucher-item-title-support"></div>
                                    </div>
                                    <div class="voucher-item-contents">
                                        <strong class="display-block">Mã khuyến mãi: BD0232123</strong>
                                        <span>HSD: 28/02/2025</span>
                                    </div>
                                </div>
                            </li>
                            <li class="voucher-item">
                                <div class="voucher-item-cover">
                                    <div class="voucher-item-title">
                                        <span>MIỄN PHÍ VẬN CHUYỂN</span>
                                        <div class="voucher-item-title-support"></div>
                                    </div>
                                    <div class="voucher-item-contents">
                                        <strong class="display-block">Mã khuyến mãi: BD0232123</strong>
                                        <span>HSD: 28/02/2025</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="text-align-center">
                            <button class="btn btn-success">1</button>
                            <button class="btn btn-secondary">2</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>