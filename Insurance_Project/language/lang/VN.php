<?php 
if (isset($_SESSION['lang'])){
    if ($_SESSION['lang'] == 'VN'){
    $VN_buynow = 'Mua Ngay';
    /*  */
    $VN_ins = '<P style="color:red;font-size:22px">
    <b>BẢO HIỂM ZURICH MUA 2<br>HOÀN TRẢ 11$ VÀO TÀI KHOẢN</b>
    </P>';
    $VN_ins2 = 'An toàn tính mạng giữ vững tay lái và bảo vệ người thân!';
    /* Misc */
    $VN_title = "SAFE CARS LIMITED";
    $VN_slide_main = 'TRANG KẾT NỐI KHÁCH HÀNG<br> VỚI NHÀ CUNG CẤP Các Gói Bảo HIểm';
    $VN_share = 'Chia sẻ';
    $VN_viewmore = 'Xem Thêm';
    $VN_user = 'Tài khoản';
    $VN_pass = 'Mật khẩu';
    $VN_passShow = 'Hiện mật khẩu';
    $VN_accounts = "Đăng ký tài khoản?";
    $VN_login = 'Đăng nhập';
    $VN_register = 'Đăng ký';
    $VN_fullname = 'Họ Tên';
    $VN_retype = 'Nhập lại';
    $VN_interest = 'GÓI HẤP DẪN';
    $VN_hotline = 'HỖ TRỢ';
    /*  Menu */
    $VN_m0 = 'Trang chủ';
    $VN_m1 = 'Bảo hiểm';
    $VN_m2 = 'Xe';
    $VN_m3 = 'Liên hệ';
    $VN_m4 = 'Chính sách';
    $VN_m5 = 'Hướng dẫn';
    $VN_staff = 'Bộ phận';
    $VN_project = 'Đồ Án';
    /* Homepage */
    $VN_slide = 'CÁC <span style="color:#e52322">LỢI ÍCH</span> KHI <br>MUA TRỰC TUYẾN';
    $VN_slide1 = 'Thanh toán trực tuyến';
    $VN_slide2 = 'Bảo hiếm có hiệu lực sau khi mua';
    $VN_slide3 = '3 Bước giao dịch nhanh chóng';
    $VN_home_intro = 'TRANG WEB THIẾT KẾ ĐỂ KẾT NỐI CÁC CÔNG TY BẢO HIỂM TỚI NGƯỜI DÙNG<br>
    CHÚNG TÔI ĐÃ CÓ <b>3</b> NĂM KINH NGHIỆM HOẠT ĐỘNG VÀ THIẾT KẾ CÁC WEBSITE<br>
    BẠN SẼ CẢM THẤY HÀI LÒNG KHI SỬ DỤNG DỊCH VỦ CỦA CHÚNG TÔI';
    $VN_home_i1 = 'KINH NGHIỆM';
    $VN_home_i2 = 'ĐỐI TÁC';
    $VN_home_i3 = 'KHÁCH HÀNG';
    /* DOWNLOAD */
    $VN_app = 'ỨNG DỤNG SAFE CARS LIMITED';
    $VN_download = 'CHƯA THỂ TẢI XUỐNG';
    $VN_perm = 'TỐI ƯU CHO PHIÊN BẢN ĐIỆN THOẠI DỰ KIẾN<br>HỌC KỲ 2 - 4';
    /* INSURANCE */
    $VN_seller = 'BÁN CHẠY NHẤT';
    $VN_limited = 'GIỚI HẠN';
    $VN_hot = 'NÓNG';
    /*  */
    $VN_buyer1 = 'Xem thông tin chi tiết bảo hiểm';
    $VN_buyer2 = 'Điền hồ sơ người mua bảo hiểm';
    $VN_buyer3 = 'Thanh toán';
    $VN_Tags_Accounts = 'Tài khoản';
    $VN_Tags_Redeem = 'Đã mua';
    $VN_Tags_Admin = 'Quản trị';
    $VN_Tags_History = 'Lịch sử';
    $VN_Tags_Settings = 'Cài đặt';
    $VN_Tags_Logout = 'Đăng xuất';
    $VN_Tags_Funds = 'Nạp tiền';
    $VN_Tags_Withdraw = 'Rút tiền';
   /* ADMIN */
    $VN_admin_code = 'Mã bảo hiểm';
    $VN_admin_home = 'Trang chủ';
    $VN_admin_dashboard = 'Bảng điều khiển';
    $VN_admin_company = 'Công ty';
    $VN_admin_product = 'Sản phẩm';

    $VN_admin_totaluser = 'Người dùng';
    $VN_admin_partnercompany = 'Đối tác';
    $VN_admin_totalpackages = 'Gói sản phẩm';
    $VN_admin_target = 'Mục tiêu';
    $VN_admin_time = 'Thời gian';
    $VN_admin_revenue ='Doanh thu';
    $VN_admin_company1 = 'Chỉnh sửa các công ty đã niêm yết trên';
    $VN_admin_company2 = 'Chỉnh sửa các gói bảo hiểm đã niêm yết của các công ty trên';
    $VN_admin_edit = 'Chỉnh sửa';
    /* Dbuy */
    $VN_buy_insurance = "Hoàn tất hồ sơ mua bảo hiểm";
    $VN_buy_name = "Họ Tên (có dấu)";
    $VN_buy_sex = "Giới tính";
    $VN_buy_sex1= "Nam";
    $VN_buy_sex2 = "Nữ";
    $VN_buy_sex3 = "khác...";
    $VN_buy_phone = "Số điện thoại";
    $VN_buy_dob = "Ngày sinh";
    $VN_buy_social = "Số chứng minh nhân nhân";
    $VN_buy_email = "Email";
    $VN_buy_address = "Địa chỉ";
    $VN_buy_complete = "Hoàn tất";
    
    $VN_cmt_rate = "Đánh giá";
    $VN_cmt_h = "Đánh giá về sản phẩm";
    $VN_cmt_sub1 = "Mức độ hài lòng";
    $VN_cmt_sub2 = "Tiêu đề:";
    $VN_cmt_sub3 = "Nhận xét:";
    }
}
?>