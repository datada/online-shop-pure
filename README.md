# online-shop-pure
Web bán hàng viết bằng php thuần theo mô hình MVC

# Các tính năng
- Đăng nhập
- Xem chi tiết sản phẩm
- Xem danh sách sản phẩm theo chủng loại
- Thêm vào giỏ hàng, cập nhật giỏ hàng
- Thêm/sửa/xóa chủng loại/sản phẩm/người dùng

# Các trang
<h3>Dành cho khách</h3>
- Trang chủ
- Trang loại sản phẩm
- Trang chi tiết sản phẩm
- Trang giỏ hàng
- Trang liên hệ

<h3>Dành cho admin</h3>

<h4>-Trang đăng nhập: </h4>
(Username/Password: admin/123456)
+ dang-nhap.html

<h4>-Trang quản lý loại sản phẩm (thêm/sửa/xóa):</h4>
+ danh-sach-loai.php
+ them-loai-.php

<h4>-Trang quản lý sản phẩm (thêm/sửa/xóa):</h4>
+ danh-sach-san-pham.php
+ them-san-pham.php

<h4>-Trang quản lý user (thêm/sửa/xóa):</h4>
+ danh-sach-user.php
+ them-user.php

# Cài đặt
<h3>Database</h3>
+ File: online_shop.sql
+ Kết nối database: models/Database.php (dòng 9)

<h3>Thay đổi URL mặc định</h3>
+ File: views/user/blocks/head.html (dòng 1)
