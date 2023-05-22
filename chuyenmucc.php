<?php
	include("lib_db.php");
	//1. get input, id của bài viết
	$id = isset($_REQUEST["id"]) ? $_REQUEST["id"] * 1 : 0;
	$p = isset($_REQUEST["p"]) ? $_REQUEST["p"] * 1 : 0;
	if ($p < 1) $p = 1;
	//2.1. Thông tin chi tiết của chuyên mục
	$sql = "select * from db_category where id = {$id}";
  // echo $sql;exit();
	//2.2. Thực thi sql
	$data = select_one($sql);
	//print_r($data);exit();
	//2.1. Thông tin chi tiết của chuyên mục
	$nop = 8;
	$offset = $nop * ($p - 1);
	$cond = "where cid = {$id}";
	$sql = "select * from db_content {$cond}  limit {$nop} offset {$offset} ";
	// echo $sql;exit();
	//2.2. Thực thi sql
	$datas = select_list($sql);
  //print_r( $datas); exit();
	$sql2 = "select * from db_content {$cond}";
    $datas2 = select_list($sql2);
    $total = count($datas2);
    $num = ceil($total/$nop);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasaki.vn | Mỹ Phẩm - Clinic & Spa</title>
    <link rel="shortcut icon" href="images/hasaki-shortcuticon.png">
    <link rel="stylesheet" href="bootstrap-5.1.1-dist/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css-btl../style.css">
    <link type="text/css" href="css-btl/lightslider.css">
    <link rel="stylesheet" href="fontawesome-free-6.0.0-beta2-web/fontawesome-free-6.0.0-beta2-web/css/all.css">
    <link rel="stylesheet" href="css-btl/slick-theme.min.css"/>
    <link rel="stylesheet" href="css-btl/slick.min.css"/>
</head>
<body>
    <div class="wrapper">
        <div id="wp-header">
            <div id="header-show-hidd">
                <div class="icon-fa-long-arrow">
                    <i class="fas fa-long-arrow-alt-left"></i>
                </div>
                <div id="mobile-search">
                    <div class="text-search">
                        <input type="text" placeholder="Tìm sản phẩm,thương hiệu bạn mong muốn...">
                    </div>
                    <i class=" fas fa-search"></i>
                </div>
                <div id="icon-fa-cart-head">
                    <a href="#">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="in-cart">0</span>
                    </a>
                </div>
            </div> 
            <div id="header">
                <div id="header-top">
                    <a href="#" class="header-top-img"><img src="images/background-hasaki.jpg"></a>
                </div>
                <div id="header-nav">
                    <div id="icons-fa-bars">
                        <i class="fas fa-bars fa-sm"></i>
                    </div>  
                    <img id="nav-img-logo" src="images/hasaki-logo.jpg" alt="Hasaki-logo">
                    <div id="header-nav-list">
                        <ul id="nav-list-items">
                            <li><a href="/btl_cnweb/chuyenmucc.php?id=1">Kem Chống Nắng</a></li>
                            <li><a href="/btl_cnweb/chuyenmucc.php?id=2">Son Dưỡng</a></li>
                            <li><a href="/btl_cnweb/chuyenmucc.php?id=3">son lì</a></li>
                            <li><a href="/btl_cnweb/chuyenmucc.php?id=4">Bông tẩy trang</a></li>
                            <li><a href="/btl_cnweb/chuyenmucc.php?id=5">Mặt nạ</a></li>
                        </ul>
                        <div id="menu-all">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tất cả
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li id="first-child-sub-menu-all"><a class="dropdown-item" href="#">Tất cả</a></li>
                                    <li><h1 class="dropdown-item title-menu-all" href="#">Sức Khỏe - Làm Đẹp</h1></li>
                                    <li><a class="dropdown-item" href="#">Mỹ Phẩm High-End</a></li>
                                    <li><a class="dropdown-item" href="#">Chăm Sóc Da Mặt</a></li>
                                    <li><a class="dropdown-item" href="#">Trang Điểm</a></li>
                                    <li><a class="dropdown-item" href="#">Chăm Sóc Cơ Thể</a></li>
                                    <li><a class="dropdown-item" href="#">Chăm Sóc Tóc</a></li>
                                    <li><a class="dropdown-item" href="#">Nước Hoa</a></li>
                                    <li><a class="dropdown-item" href="#">Thức Uống Hỗ Trợ Sức Khỏe & </br> Làm Đẹp</a></li>
                                    <li><h1 class="dropdown-item title-menu-all" href="#">Hasaki Clinic & Spa</h2></li>
                                    <li><a class="dropdown-item" href="#">Giảm Béo</a></li>
                                    <li><a class="dropdown-item" href="#">Triệt Lông Diode Laser</a></li>
                                    <li><a class="dropdown-item" href="#">Thư Giãn & Chăm Sóc</a></li>
                                    <li><a class="dropdown-item" href="#">Dịch Vụ Phòng Khám</a></li>    
                                </ul>
                            </li>
                            <div id="header-nav-input">
                                <input type="text" placeholder="Tìm sản phẩm,thương hiệu bạn mong muốn...">
                            </div> 
                            <div id="btn-search">
                                <i class=" fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div id="header-nav-list-img">
                        <div id="gio-hang">
                            <a href="#">
                                <img class="img-bag" src="images/icon_header_giohang.jpg">
                            </a>
                            <div id="so-luong-in-bag">
                                <a class="in-bag">0</a>
                            </div>
                            <div class="txt-gio-hang ">
                                <a href="#" class="txt-header-nav-list-img">Giỏ</br>hàng</a> 
                            </div>                                                                                                      
                        </div>
                        <div id="login">
                            <a href="#"><img class="img-buyer" src="images/icon_header_nguoi.jpg"></a>
                            <div id="login-txt-top">
                                <a href="#" class="txt-login txt-header-nav-list-img">Đăng nhập</a>
                                <a class="txt-header-nav-list-img">/</a>
                                <a href="#" class="txt-register txt-header-nav-list-img">Đăng ký</a>
                            </div>
                            <div id="login-txt-bottom">
                                <a href="" class="txt-header-nav-list-img">
                                    Tài khoản
                                    <i class="fas fa-caret-down"></i>
                                </a>
                            </div>
                            <div id="sub-login">
                                <div class="login-with">
                                    <a href="" class="txt-login-with">Đăng nhập với</a>
                                    <a href="#"><img class="img-login-with-fb" src="images/img_login_fb.jpg"></a>
                                    <a href="#"><img class="img-login-with-gg" src="images/img_login_gg.jpg"></a>
                                </div>
                                <div class="login-with-hasaki">
                                    <div id="txt-login-with-hasaki">
                                        <a href="">Hoặc đăng nhập với Hasaki.vn</a>
                                    </div>                                
                                    <div id="login-dang-nhap">
                                        <a class="txt-login-dang-nhap">Đăng nhập</a>
                                    </div>
                                    <a href="" class="txt-login-question">Bạn chưa có tài khoản?</a>
                                    <div  id="txt-login-dang-ky"><a href="#">ĐĂNG KÝ NGAY</a></div>                                   
                                </div>
                            </div>
                        </div>                    
                        <div id="sub-phone">
                            <a href="#"><img class="img-sub-phone" src="images/icon_header_phone.jpg"></a>
                            <div class="txt-ho-tro-khach-hang">
                                <a href="#" class="txt-header-nav-list-img">Hỗ trợ <br> khách hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wp-content">
        <div id="small-bar-top" class="shadow-top-bottom with-common">
            <div class="small-bar-top-items">
                <div class="small-bar-left-items">
                    <ul id="small-bar-sub-items">
                        <li><a href="#">HASAKI DEALS</a></li>
                        <li><a href="#">HOT DEALS</a></li>
                        <li><a href="#">THƯƠNG HIỆU</a></li>
                        <li><a href="#">HÀNG MỚI VỀ</a></li>
                        <li><a href="#">BÁN CHẠY</a></li>
                        <li><a href="#">CLINIC & SPA</a></li>
                    </ul>
                </div>
                <div class="small-bar-icon-iphone">
                    <a href="#"><img id="img-icon-iphone-small-bar" src="images/icon_phone.jpg"></a>
                    <div class="txt-icon-iphone-small-bar"><a href="#">Tải ứng dụng</a></div>                        
                </div>
                <div class="small-bar-icon-tra-cuu">
                    <a href="#"><img id="img-icon-tra-cuu-small-bar" src="images/icon_tracuudh.jpg"></a>
                    <div class="txt-icon-tracuudh">
                    <a href="#">Tra cứu đơn hàng</a> 
                    </div>                                                                 
                </div>              
            </div>
        </div>
        <div class="head-menu">
            <a href="/btl_cnweb/"> Trang chủ</a>
            <a href="" > > <?php echo $data["name"]?></a>
            <a href="/btl_cnweb/quanly.php"> > Quản lý sản phẩm</a>
        </div>
        <div id="list-product">
            <div class="row">
                <div id="list-product-left" class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                    <div id="item-product-left">
                        <div class="item-category">
                            <p>Hasaki</p>
                        </div>
                        <div class="item-category">
                            <p>Sức khỏe - Làm đẹp</p>
                        </div>
                        <div class="item-category">
                            <p>Hasaki Clinic & Spa</p>
                        </div>
                    </div>
                    <form class="price-ranger">
                        <div class="title-list-product-left">Khoảng giá</div>
                        <div class="price-range-edit">
                            <div class="price-range-input">
                                <input class="start-price" placeholder="₫ TỪ" value="">
                                <span class="price-range-line"></span>
                                <input class="end-price" placeholder="₫ ĐẾN" value="">
                            </div>
                            <button type="button" class="btn-search-price">Áp dụng</button>
                        </div>
                    </form>
                    <div id="catalog">
                        <div class="title-list-product-left">xuất xứ thương hiệu</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">Nhật Bản (140)</a></li>
                                <li><a class="item-category" href="#">Pháp (124)</a></li>
                                <li><a class="item-category" href="#">Hàn Quốc (75)</a></li>
                                <li><a class="item-category" href="#">Mỹ (58)</a></li>
                                <li><a class="item-category" href="#">Đức (26)</a></li>
                                <li><a class="item-category" href="#">Úc (20)</a></li>
                                <li><a class="item-category" href="#">Việt Nam (12)</a></li>
                                <li><a class="item-category" href="#">Ý (8)</a></li>
                                <li><a class="item-category" href="#">Malaysia (7)</a></li>
                                <li><a class="item-category" href="#">Thổ Nhĩ Kỳ (6)</a></li>
                                <li><a class="item-category" href="#">Thái Lan (4)</a></li>
                                <li><a class="item-category" href="#">Indonesia (4)</a></li>
                                <li><a class="item-category" href="#">Tây Ban Nha (3)</a></li>
                                <li><a class="item-category" href="#">Canada (3)</a></li>
                                <li><a class="item-category" href="#">Singapore (3)</a></li>
                                <li><a class="item-category" href="#">Đài Loan (2)</a></li>
                                <li><a class="item-category" href="#">Ấn Độ (2)</a></li>
                                <li><a class="item-category" href="#">Cập nhật (1)</a></li>
                                <li><a class="item-category" href="#">New Zealand (1)</a></li>
                                <li><a class="item-category" href="#">Taiwan (1)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">kết cấu</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">Dạng kem (173)</a></li>
                                <li><a class="item-category" href="#">Dạng sữa (65)</a></li>
                                <li><a class="item-category" href="#">Dạng lỏng (26)</a></li>
                                <li><a class="item-category" href="#">Dạng gel (26)</a></li>
                                <li><a class="item-category" href="#">Dạng xịt (13)</a></li>
                                <li><a class="item-category" href="#">Dạng serum (12)</a></li>
                                <li><a class="item-category" href="#">Dạng nén (9)</a></li>
                                <li><a class="item-category" href="#">Dạng thỏi (5)</a></li>
                                <li><a class="item-category" href="#">Dạng thỏi (4)</a></li>
                                <li><a class="item-category" href="#">Dạng dầu (3)</a></li>
                                <li><a class="item-category" href="#">Dạng nước (3)</a></li>
                                <li><a class="item-category" href="#">Dạng sáp (2)</a></li>
                                <li><a class="item-category" href="#">Dạng bút (2)</a></li>
                                <li><a class="item-category" href="#">Tinh chất (2)</a></li>
                                <li><a class="item-category" href="#">Dạng mút (1)</a></li>
                                <li><a class="item-category" href="#">Dạng tạo bọt sẵn (1)</a></li>
                                <li><a class="item-category" href="#">Dạng viên (1)</a></li>
                                <li><a class="item-category" href="#">Dạng lăn (1)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">loại sản phẩm</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">Kem chống nắng (150)</a></li>
                                <li><a class="item-category" href="#">Trang điểm mặt (71)</a></li>
                                <li><a class="item-category" href="#">Kem dưỡng (30)</a></li>
                                <li><a class="item-category" href="#">Kem dưỡng chống nắng (23)</a></li>
                                <li><a class="item-category" href="#">Dưỡng thể (14)</a></li>
                                <li><a class="item-category" href="#">Kem dưỡng ban đêm (12)</a></li>
                                <li><a class="item-category" href="#">Dưỡng tóc (12)</a></li>
                                <li><a class="item-category" href="#">Son lì (11)</a></li>
                                <li><a class="item-category" href="#">Kem dưỡng ban ngày (8)</a></li>
                                <li><a class="item-category" href="#">Dưỡng mắt (7)</a></li>
                                <li><a class="item-category" href="#">Sữa rửa mặt (7)</a></li>
                                <li><a class="item-category" href="#">Chăm sóc cơ thể (7)</a></li>
                                <li><a class="item-category" href="#">Tẩy trang (6)</a></li>
                                <li><a class="item-category" href="#">Son dưỡng (5)</a></li>
                                <li><a class="item-category" href="#">Tinh chất (5)</a></li>
                                <li><a class="item-category" href="#">Thực phẩm chức năng (5)</a></li>
                                <li><a class="item-category" href="#">Son thỏi (2)</a></li>
                                <li><a class="item-category" href="#">Dầu xả (2)</a></li>
                                <li><a class="item-category" href="#">Trang điểm mắt (2)</a></li>
                                <li><a class="item-category" href="#">Phấn phủ (2)</a></li>
                                <li><a class="item-category" href="#">Phụ kiện làm đẹp (2)</a></li>
                                <li><a class="item-category" href="#">Mặt nạ giấy (1)</a></li>
                                <li><a class="item-category" href="#">Xịt khoáng (1)</a></li>
                                <li><a class="item-category" href="#">Kem trị mụn (1)</a></li>
                                <li><a class="item-category" href="#">Che khuyết điểm (1)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">độ che phủ</div>
                        <div class="list-item-title-short">
                            <ul>
                                <li><a class="item-category" href="#">Dạng kem (173)</a></li>
                                <li><a class="item-category" href="#">Dạng sữa (65)</a></li>
                                <li><a class="item-category" href="#">Dạng lỏng (26)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">tông màu</div>
                        <div class="list-item-title-short">
                            <ul>
                                <li><a class="item-category" href="#">Tự nhiên (46)</a></li>
                                <li><a class="item-category" href="#">Sáng hồng (19)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">loại da</div>
                        <div class="list-item-title-short">
                            <ul>
                                <li><a class="item-category" href="#">Mọi loại da (296)</a></li>
                                <li><a class="item-category" href="#">Da dầu (71)</a></li>
                                <li><a class="item-category" href="#">Da khô (10)</a></li>
                                <li><a class="item-category" href="#">Da mụn (9)</a></li>
                                <li><a class="item-category" href="#">Da thường (1)</a></li>
                                <li><a class="item-category" href="#">Da hỗn hợp (1)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">thành phần</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">Không Paraben (95)</a></li>
                                <li><a class="item-category" href="#">Không bít tắc lỗ chân lông (26)</a></li>
                                <li><a class="item-category" href="#">Vitamin C (22)</a></li>
                                <li><a class="item-category" href="#">Hyaluronic Acid (HA) (17)</a></li>
                                <li><a class="item-category" href="#">Không hương liệu (11)</a></li>
                                <li><a class="item-category" href="#">Không cồn (10)</a></li>
                                <li><a class="item-category" href="#">Không thử nghiệm trên động vật (10)</a></li>
                                <li><a class="item-category" href="#">Niacinamide (B3) (9)</a></li>
                                <li><a class="item-category" href="#">Không gây mụn (8)</a></li>
                                <li><a class="item-category" href="#">Ceramide (8)</a></li>
                                <li><a class="item-category" href="#">Salicylic Acid (BHA) (5)</a></li>
                                <li><a class="item-category" href="#">Collagen (3)</a></li>
                                <li><a class="item-category" href="#">Rau má (3)</a></li>
                                <li><a class="item-category" href="#">Trà xanh (2)</a></li>
                                <li><a class="item-category" href="#">Nha đam (2)</a></li>
                                <li><a class="item-category" href="#">Không Silicone (1)</a></li>
                                <li><a class="item-category" href="#">Không dầu khoáng (1)</a></li>
                                <li><a class="item-category" href="#">Tràm trà (tea tree oil) (1)</a></li>
                                <li><a class="item-category" href="#">Đất sét (1)</a></li>
                                <li><a class="item-category" href="#">Vitamin E (1)</a></li>
                                <li><a class="item-category" href="#">Hoa cúc (1)</a></li>
                                <li><a class="item-category" href="#">Co-enzyme Q10 (1)</a></li>
                                <li><a class="item-category" href="#">Glutathione (1)</a></li>
                                <li><a class="item-category" href="#">Tinh dầu Hoa Trà (1)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">vấn đề về da</div>
                        <div class="list-item-title-short">
                            <ul>
                                <li><a class="item-category" href="#">Da xỉn màu (84)</a></li>
                                <li><a class="item-category" href="#">Da dầu, lỗ chân lông to (67)</a></li>
                                <li><a class="item-category" href="#">Da thiếu nước, thiếu ẩm (61)</a></li>
                                <li><a class="item-category" href="#">Da nhạy cảm, dễ kích ứng (27)</a></li>
                                <li><a class="item-category" href="#">Da mụn (21)</a></li>
                                <li><a class="item-category" href="#">Da lão hóa (20)</a></li>
                                <li><a class="item-category" href="#">Da mệt mỏi, thiếu sức sống (7)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">thương hiệu</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">9Wishes (2)</a></li>
                                <li><a class="item-category" href="#">ANESSA (13)</a></li>
                                <li><a class="item-category" href="#">Acnes (1)</a></li>
                                <li><a class="item-category" href="#">Angel's Liquid (1)</a></li>
                                <li><a class="item-category" href="#">Avène (4)</a></li>
                                <li><a class="item-category" href="#">B.O.M (2)</a></li>
                                <li><a class="item-category" href="#">BIODERMA (8)</a></li>
                                <li><a class="item-category" href="#">BYPHASSE (2)</a></li>
                                <li><a class="item-category" href="#">Beautylabo (1)</a></li>
                                <li><a class="item-category" href="#">Berdoues 1902 (1)</a></li>
                                <li><a class="item-category" href="#">Bio-essence (3)</a></li>
                                <li><a class="item-category" href="#">Bioré (31)</a></li>
                                <li><a class="item-category" href="#">By Wishtrend (1)</a></li>
                                <li><a class="item-category" href="#">CARENEL (1)</a></li>
                                <li><a class="item-category" href="#">CARYOPHY (1)</a></li>
                                <li><a class="item-category" href="#">CETAPHIL (2)</a></li>
                                <li><a class="item-category" href="#">CLINIQUE (4)</a></li>
                                <li><a class="item-category" href="#">Cathy Doll (4)</a></li>
                                <li><a class="item-category" href="#">Clarins (1)</a></li>
                                <li><a class="item-category" href="#">Curél (8)</a></li>
                                <li><a class="item-category" href="#">Céll Fùsion C (12)</a></li>
                                <li><a class="item-category" href="#">DOUBLE RICH (2)</a></li>
                                <li><a class="item-category" href="#">Dental Clinic 2080 (2)</a></li>
                                <li><a class="item-category" href="#">EPONA (1)</a></li>
                                <li><a class="item-category" href="#">ESTEE LAUDER (1)</a></li>
                                <li><a class="item-category" href="#">Elle Vie (1)</a></li>
                                <li><a class="item-category" href="#">Essance (3)</a></li>
                                <li><a class="item-category" href="#">Eucerin (9)</a></li>
                                <li><a class="item-category" href="#">FRUDIA (5)</a></li>
                                <li><a class="item-category" href="#">Fanola (1)</a></li>
                                <li><a class="item-category" href="#">GARNIER (3)</a></li>
                                <li><a class="item-category" href="#">GUERISSON (1)</a></li>
                                <li><a class="item-category" href="#">HATOMUGI (3)</a></li>
                                <li><a class="item-category" href="#">HELIOCARE (1)</a></li>
                                <li><a class="item-category" href="#">HURRAW! (1)</a></li>
                                <li><a class="item-category" href="#">Hada Labo (5)</a></li>
                                <li><a class="item-category" href="#">Himalaya Herbals (2)</a></li>
                                <li><a class="item-category" href="#">ISIS PHARMA (3)</a></li>
                                <li><a class="item-category" href="#">It'S SKIN (1)</a></li>
                                <li><a class="item-category" href="#">J'WHITE (3)</a></li>
                                <li><a class="item-category" href="#">JMSolution (2)</a></li>
                                <li><a class="item-category" href="#">KAI (1)</a></li>
                                <li><a class="item-category" href="#">Keana Nadeshiko (1)</a></li>
                                <li><a class="item-category" href="#">Klairs (1)</a></li>
                                <li><a class="item-category" href="#">L'OCCITANE (1)</a></li>
                                <li><a class="item-category" href="#">L'OREAL (60)</a></li>
                                <li><a class="item-category" href="#">LA ROCHE-POSAY (20)</a></li>
                                <li><a class="item-category" href="#">LANEIGE (10)</a></li>
                                <li><a class="item-category" href="#">LEMONADE (7)</a></li>
                                <li><a class="item-category" href="#">MAC (1)</a></li>
                                <li><a class="item-category" href="#">MAYBELLINE (34)</a></li>
                                <li><a class="item-category" href="#">MEDISKINBYC (1)</a></li>
                                <li><a class="item-category" href="#">MEISHOKU (2)</a></li>
                                <li><a class="item-category" href="#">VICHY (23)</a></li>
                                <li><a class="item-category" href="#">australis (20)</a></li>
                                <li><a class="item-category" href="#">flormar (3)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">đặc tính</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">Ban Ngày (183)</a></li>
                                <li><a class="item-category" href="#">Dạng Lì (120)</a></li>
                                <li><a class="item-category" href="#">Ngày Và Đêm (104)</a></li>
                                <li><a class="item-category" href="#">2 in 1 (15)</a></li>
                                <li><a class="item-category" href="#">Màu Tự Nhiên (11)</a></li>
                                <li><a class="item-category" href="#">Ban Đêm (10)</a></li>
                                <li><a class="item-category" href="#">Không Màu (8)</a></li>
                                <li><a class="item-category" href="#">Chống Thấm Nước (5)</a></li>
                                <li><a class="item-category" href="#">Có mùi (2)</a></li>
                                <li><a class="item-category" href="#">Dạng Bóng (2)</a></li>
                                <li><a class="item-category" href="#">Màu Sáng (2)</a></li>
                                <li><a class="item-category" href="#">Không mùi (1)</a></li>
                                <li><a class="item-category" href="#">Không Nhũ (1)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">công dụng</div>
                        <div class="list-item-title">
                            <ul>
                                <li><a class="item-category" href="#">Chống nắng (185)</a></li>
                                <li><a class="item-category" href="#">Trang điểm nền (64)</a></li>
                                <li><a class="item-category" href="#">Làm sáng da (34)</a></li>
                                <li><a class="item-category" href="#">Dưỡng ẩm (25)</a></li>
                                <li><a class="item-category" href="#">Trang điểm môi (13)</a></li>
                                <li><a class="item-category" href="#">Ngừa lão hóa (12)</a></li>
                                <li><a class="item-category" href="#">Làm sạch da (12)</a></li>
                                <li><a class="item-category" href="#">Phục hồi tóc (9)</a></li>
                                <li><a class="item-category" href="#">Che khuyết điểm (8)</a></li>
                                <li><a class="item-category" href="#">Lót trang điểm (8)</a></li>
                                <li><a class="item-category" href="#">Ngừa lão hóa mắt (6)</a></li>
                                <li><a class="item-category" href="#">Phủ phấn (5)</a></li>
                                <li><a class="item-category" href="#">Kiềm dầu (5)</a></li>
                            </ul>
                        </div><br>
                        <div class="title-list-product-left">size</div>
                        <div class="list-item-title-short">
                            <ul>
                                <li><a class="item-category" href="#">Fullsize (230)</a></li>
                                <li><a class="item-category" href="#">Combo (27)</a></li>
                                <li><a class="item-category" href="#">Minisize (11)</a></li>
                                <li><a class="item-category" href="#">Bộ sản phẩm (10)</a></li>
                                <li><a class="item-category" href="#">Sample (4)</a></li>
                            </ul>
                        </div><br>
                    </div>    
                </div>
                <div id="list-product-right" class="col-lg-10">
                    <div class="title-list-product-right">
                        <h1 class="title-right"><?php echo $data["name"] ?></h1>
                        <h2 class="txt-product-right">(504 sản phẩm)</h2>
                    </div>
                    <div class="folder-block">
                        Sắp xếp
                        <span class="hidden-sm hidden-md hidden-xs list-item-folder-block">
                            <div class="item-folder-block">
                                <a href="#">Mới nhất</a>
                            </div>
                            <div class="item-folder-block selling">
                                <a href="#">Bán chạy</a>
                            </div>
                            <div class="item-folder-block">
                                <a href="#">Giá thấp đến cao</a>
                            </div>
                            <div class="item-folder-block">
                                <a href="#">Giá cao đến thấp</a>
                            </div>
                            <div class="item-folder-block">
                                <a href="#">Nổi bật</a>
                            </div>
                        </span>
                        <div class="show-right">
                            Hiển thị 40 <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="container">
                        <div class="slide-product row product-right-content">
                        <?php foreach($datas as $data){ ?>
                        <div class="slide-product-box item-product-right col-md-4 col-sm-12 col-lg-3">
                            <a href="/btl_cnweb/chitiet.php?id=<?php echo $data["id"]?>"> <img src="<?php echo $data["img"]?>" style="height: 194px;"></a>
                            <div class="txt-slide-product">
                                <div class="product-price-slide">
                                    <strong class="item-new-price-slide"><?php echo $data["price"]?> ₫</strong>
                                    <span class="discount-slide"><p>56%</p></span>
                                    <span class="item-old-price-slide"><?php echo $data["market_price"]?> ₫</span>
                                </div>
                                <div class="product-name width-common">
                                    <strong><?php echo $data["name"]?></strong>
                                </div>
                                <div class="product-detail width-common">
                                    <div class="v-name txt-product-detail"><?php echo $data["vn_title"]?></div>
                                    <div class="e-name txt-product-detail"><?php echo $data["e_title"]?></div>
                                </div>
                                <div class="danh-gia with-common">
                                    <img src="images/5-star.png"> (49) &nbsp;&nbsp;|&nbsp;&nbsp;
                                    <i class="fas fa-shopping-cart"></i> 5.523
                                </div>
                                <div class="product-detail txt-product-detail width_common">Deal đã hết hạn</div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <h1 class="title-right">Trang</h1>
                    <ul>
                    <?php for ($i=1;$i<=$num;$i++) { ?>
                        <li>
                            <a href="chuyenmucc.php?id=<?php echo $id ?>&p=<?php echo $i ?>"><?php echo $i ?></a>
                        </li>
                    <?php } ?>
                    </ul>	
                    <h1 class="title-right">Xem các sản phẩm khác</h1>
                    <ul>
                    <?php foreach ($datas as $data) { ?>
                        <li>
                        <a href="chitiet.php?id=<?php echo $data["id"] ?>"><?php echo $data["vn_title"] ?></a>
                        </li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
        <div id="seen-product">
            <div class="box-seen ">
                <div class="text-box-seen">Sản phẩm đã xem</div>
                <div class="item-box-seen">
                    <div class="img-box-seen"><img src="images/img-suggest1.jpg"></div>
                    <div class="img-box-seen"><img src="images/img-top-search-small1.jpg"></div>
                    <div class="img-box-seen"><img src="images/img-skincare3.jpg"></div>
                </div>
            </div> 
        </div>  
    </div>
    <div id="footer">
        <div class="slogan-hasaki with-common">
            <div class="item-footer row">
                <div class="list-img-footer col-lg-7 col-md-12 col-sm-12">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    
                            <div class="item-img-slogan"><img src="images/img-footer-pay.jpg"></div>
                            <div class="text-slogan">
                                <p>Thanh toán<br> khi nhận hàng</p>
                            </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    
                            <div class="item-img-slogan"><img src="images/img-footer-nowship.jpg"></div>
                            <div class="text-slogan">
                                <p>Now free<br> 2H</p>
                            </div>
                    
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        
                            <div class="item-img-slogan"><img src="images/img-return-goods.jpg"></div>
                            <div class="text-slogan"><p>14 ngày đổi trả<br> miễn phí</p></div>
                        
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        
                            <div class="item-img-slogan"><img src="images/img-footer-brand-good.jpg"></div>
                            <div class="text-slogan"><p>Thương hiệu uy tín<br> toàn cầu</p></div>
                    
                    </div>
                </div>
            </div>
            <div class="item-footer row">
                <div class="list-img-footer col-lg-5 col-md-12 col-sm-12">
                    <div class="box-hotline">
                        <div class="item-hotline">
                            <div class="txt-hotline">Khiếu nại, góp ý</div>
                            <div>
                                <strong>
                                    <a class="sdt-hotline" href="tel:18006310">1800 6310</a>
                                </strong>
                            </div>
                            <div class="img-hotline"><img src="images/img-footer-feed-back.jpg"></div>
                        </div>
                        <div class="item-hotline">
                            <div class="txt-tuvan">Tư vấn</div>
                            <div>
                                <strong>
                                    <a class="sdt-hotline" href="tel:18006324">1800 6324</a>
                                </strong>
                            </div>
                            <div class="img-hotline"><img src="images/img-footer-hotline.jpg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div id="wp-footer">
        <div id="around-footer">
            <div class="content-footer">
                <div class="inside-content-footer col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="customer-sub col-lg-4 col-md-4 col-sm-12">
                            <div class="box-link-footer">
                                <div class="list-link-footer">
                                    <h4 class="title-footer text-uppercase">hỗ trợ khách hàng</h4>
                                </div>
                                <div class="list-link-footer">
                                    <div class="hotline-custmer-sub">Hotline: 1800 6324</div>
                                    (miễn phí , 08-22h kể cả T7, CN)
                                </div>
                                <div class="list-link-footer"><a href="#">Các câu hỏi thường gặp</a>
                                </div>
                                <div class="list-link-footer"><a href="#">Gửi yêu cầu hỗ trợ</a>
                                </div>
                                <div class="list-link-footer"><a href="#">Hướng dẫn đặt hàng</a>
                                </div>
                                <div class="list-link-footer"><a href="#">Phương thức vận chuyển</a>
                                </div>
                                <div class="list-link-footer"><a href="#">Chính sách đổi trả</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="box-link-footer">
                                <div class="list-link-footer">
                                    <h4 class="title-footer text-uppercase">Về hasaki.vn</h4>
                                </div>
                                <div class="list-link-footer"><a href="#" target="_blank" class="txt_link_hasaki">Giới thiệu Hasaki.vn</a>
                                </div>
                                <div class="list-link-footer"><a href="#" target="_blank" class="txt_link_hasaki">Tuyển Dụng</a></div>
                                <div class="list-link-footer"><a href="#" target="_blank" class="txt_link_hasaki">Chính sách bảo mật</a>
                                </div>
                                <div class="list-link-footer"><a href="#" target="_blank" class="txt_link_hasaki">Điều khoản sử dụng</a>
                                </div>
                                <div class="list-link-footer"><a href="#" target="_blank" class="txt_link_hasaki">Liên hệ</a></div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12">
        
                            <div class="box-link-footer">
                                <div class="list-link-footer">
                                    <h4 class="title-footer text-uppercase">Hợp tác &amp; Liên kết</h4>
                                </div>
                                <div class="list-link-footer"><a href="#" class="txt_link_hasaki">https://hasaki.vn/spa.html</a>
                                </div>
                                <div class="list-link-footer"><a href="#" class="txt_link_hasaki">Hasaki cẩm nang</a></div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="information col-lg-4 col-md-4 col-sm-12">
                    <div class="update-promotion newsletter">
                        <div class="title txt-update-promotion">Cập nhật thông tin khuyến mãi</div>
                        <div class="content">
                            <form id="account-form" class="account form">
                                <div class="field newsletter">
                                    <div class="control">
                                        <input name="email" type="email" id="newsletter" placeholder="Email của bạn" class="input-letter">
                                        <label class="item-radio"><input type="radio" name="gender" value="1">Nam</label>
                                        <label class="item-radio"><input type="radio" name="gender" value="2">Nữ</label>
                                        <button class="action subscribe primary btnSubscribe" title="Subscribe" type="submit"> <span>Đăng ký</span></button>
                                    </div>
                                </div>  
                            </form>
                            <div class="text-subscribe">
                                Đăng ký nhận tin từ Hasaki.vn, cơ hội nhận quyền lợi giảm giá riêng biệt.
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="box-down-app-footer width-common">
                        <div class="img-qr-code">
                            <img src="images/QRCode-hasaki.png">
                        </div>
                        <div class="list-app-down">
                            <a href="#" class="img-download-app">
                                <img src="images/img_app_store.jpg">
                            </a>
                            <a href="#" class="img-download-app">
                                <img src="images/img_google_play.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-footer">
                    <div class="row">
                        <div class="content-intro-hasaki col-lg-9 col-md-8 col-sm-8">
                            <div class="text-introduce">
                                <div class="content-intro">
                                    <h2>&nbsp;<strong>ĐẸP</strong></h2>
                                    <p>Đẹp -&nbsp;Là một từ mà mọi người đều khát khao cả nam lẫn nữ. Đẹp đi đôi với khỏe mạnh, đẹp đi đôi với sự lựa chọn thông minh. Đẹp toát ra từ vẻ ngoài tươi tắn tràn đầy năng lượng sống. Chính vì vậy sức khỏe và làm đẹp ngày càng được nhiều người quan để hướng đến cuộc sống tươi vui, hạnh phúc hơn. Sức khỏe tốt được biểu hiện qua làn da hồng hào,mịn màng, vóc dáng cân đối, mái tóc bồng bềnh và hàm răng chắc khỏe. Thấu hiểu nhu cầu đó, các hãng mỹ phẩm không ngừng nghiên cứu và cho ra đời hàng nghìn loại mỹ phẩm làm đẹp đa dạng chủng loại. Nhiều nhóm hàng mỹ phẩm bao gồm chăm sóc da, chăm sóc tóc, chăm sóc toàn thân, chăm sóc cá nhân, nước hoa lần lượt ra đời và đa dạng hóa để đáp ứng nhu cầu làm đẹp của con người.<br>Chăm sóc da mặt là một quá trình công phu gồm nhiều bước như sữa rửa mặt, nước hoa hồng, serum, sữa dưỡng, và kem , là sự tự thưởng cho bản thân, và tất nhiên kết quả gặt được sau một quá trình kiên trì là 1 làn da đẹp mỹ mãn. Còn Trang điểm là một phép màu, mọi người ví thợ trang điểm là 1 nhà phù thủy giúp các cô gái trở nên xinh đẹp tức thì. Bạn có thể dùng son môi, phấn má hồng, phấn nền để trang điểm khi đi làm, dự tiệc để trở nên thu hút. Ngoài ra bạn cũng nên dùng kem trắng da, sữa dưỡng thể để chăm sóc toàn thân, cũng như chọn lựa dầu gội đầu phù hợp để dưỡng tóc hằng ngày. Ngoài ra, một vóc dáng khỏe đẹp hoàn hảo còn cần sự giúp sức của nhóm hàng chăm sóc cá nhân như kem đánh răng, dung dịch vệ sinh và tăng cường sức khỏe như thực phẩm chức năng, viên uống vitamin.</p>
                                    <p>Hasaki luôn tôn trọng khách hàng, lấy niềm vui, sự hài lòng của khách hàng để làm động lực, không ngừng tìm kiếm các sản phẩm tốt nhất để mỗi khách hàng đều có thể trở nên tự tin và xinh đẹp hơn. Các hãng thương hiệu mỹ phẩm ở Hasaki luôn là các thương hiệu uy tín, được mọi người tin dùng như : Secret Key, Laneige, Vichy, Avène, Yves Rocher, Laroche Posay, Lancôme,...Bên cạnh đó khi mua hàng ở Hasaki, khách luôn được giá ưu đãi tốt nhất, dịch vụ nhanh chóng &amp; nhiều chương trình Khuyến Mãi khác</p>                        
                                </div>
                            </div>
                            <div class="tag-product">
                                <div class="txt-top-find"><b>Top tìm kiếm</b></div>
                                <div class="list-tag-product">
                                    <a href="#">Kem Chống Nắng</a>
                                    <a href="#">Son Dưỡng</a>
                                    <a href="#">son lì</a>
                                    <a href="#">Sữa Rửa Mặt</a>
                                    <a href="#">Bông Tẩy Trang</a>
                                    <a href="#">Mặt Nạ</a>
                                    <a href="#">Kem Dưỡng Da</a>
                                    <a href="#">kem dưỡng ẩm hada labo</a>
                                    <a href="#">la roche posay</a>
                                    <a href="#">kem chống nắng senka</a>
                                    <a href="#">xịt khoáng evoluderm</a>
                                    <a href="#">mỹ phẩm</a>
                                    <a href="#">sữa rửa mặt cetaphil</a>
                                    <a href="#">vaseline</a>
                                    <a href="#">cetaphil</a>
                                    <a href="#">bioderma</a>
                                    <a href="#">serum</a>
                                </div>
                            </div>
                        </div>
                        <div class="chung-nhan col-lg-3 col-md-4 col-sm-4">
                            <div class="item-chung-nhan">
                                <div class=""><b>Được chứng nhận</b></div>
                                <a href="#">
                                    <img src="images/img-chung-nhan.png">
                                </a>
                            </div>
                            <div class="item-chung-nhan">
                                <div class=""><b>Bản quyền © 2016 Hasaki.vn</b></div>
                                Công Ty cổ phần HASAKI BEAUTY & S.P.A                    
                            </div>
                            <div class="item-chung-nhan">
                                <div class="box-address-hasaki">
                                    <div class="address-hasaki">Địa chỉ giao dịch:</div>
                                    <div class="list-address">
                                            <div class="form-group bottom5 top20">
                                                <div class="relative item-show-address">
                                                    <label class="province">
                                                        <strong>Hồ Chí Minh</strong>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="relative item-show-address">
                                                    <strong>Quận Tân Bình</strong>
                                                    <div>71 Hoàng Hoa Thám,  Phường 13</div>
                                                    <div>28 Phan Huy Ích,  Phường 13</div>
                                                </div>
                                            </div>
                                            <div class="form-group bottom5">
                                                <div class="relative item-show-address">
                                                    <strong>Quận Phú Nhuận</strong>
                                                    <div>48 Lê Văn Sỹ,  Phường 11</div>
                                                    <div>176 Phan Đăng Lưu,  Phường 3</div>
                                                </div>
                                            </div>
                                            <div class="form-group bottom5">
                                                <div class="relative item-show-address">
                                                    <strong>Huyện Bình Chánh</strong>
                                                    <div>A30/6 Quốc Lộ 50,  Xã Bình Hưng</div>
                                                </div>
                                            </div>
                                            <div class="form-group bottom5">
                                                <div class="relative item-show-address">
                                                    <strong>Quận 2</strong>
                                                    <div>109 Đường Nguyễn Duy Trinh,  Phường Bình Trưng Tây</div>
                                                </div>
                                            </div>
                                            
                                    </div>
                                    <div class="block_expand_address txt_color_2">
                                        Xem tất cả chi nhánh Hasaki
                                    </div>
                                </div>
                            </div>
                            <div class="item-chung-nhan">
                                Giấy chứng nhận Đăng ký Kinh doanh số 0313612829 do Sở Kế hoạch và Đầu tư Thành phố Hồ Chí
                                Minh cấp ngày 31/08/2015
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</body>
        