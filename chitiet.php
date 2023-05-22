<?php
	include("lib_db.php");
	$id =isset($_REQUEST["id"])?$_REQUEST ["id"] :0;
	$sql = "select * from db_content where id={$id} ";
	$data =select_one($sql);
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
                    <a href="/btl_cnweb/quanly.php"> > Quản lý sản phẩm</a> 
                    <a href="" > > <?php echo $data["vn_title"]?></a>
                </div>
                <div class="details-product">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 product-details-left">
                            <div class="product-details-img">
                                <div class="product-details-img-small">
                                    <img src="images/kem-chong-nang-cathy-doll-small1.jpg" alt="">
                                    <img src="images/kem-chong-nang-cathy-doll-small2.jpg" alt="">
                                    <img src="images/kem-chong-nang-cathy-doll-small3.jpg" alt="">
                                    <img src="images/kem-chong-nang-cathy-doll-small4.jpg" alt="">
                                </div>
                                <img src="<?php echo $data ['img']?>" alt="" class="product-details-img-item">
                            </div>
                            <div class="main-img-product">
                                <div class="top-product-details-name">
                                    <img src="images/icon-nowfree.jpg">
                                    <div class="product-details-name"><p><?php echo $data["name"]?></p></div>
                                </div>
                                <h1 class="title-vn-product-details">
                                    <span>
                                        <?php echo $data["vn_title"]?>
                                    </span>
                                </h1>
                                <h2 class="title-eng-product-details">
                                    <span>
                                        <?php echo $data["e_title"]?>
                                    </span>
                                </h2>
                                <div class="code-product">
                                    <a class="star-product"><img src="images/2,5-star.png"></a>
                                    <span class="txt-danhgia"> 1 đánh giá</span>
                                    <span>|</span>
                                    <span class="txt-hoidap"> 17 Hỏi đáp</span>
                                        <span> | </span>
                                    <span class="item-id-product">Mã sản phẩm: 309300012</span>
                                </div>
                                <div class="box-price-product"> 
                                    <strong class="item-new-price-slide1"><?php echo $data["price"]?> ₫</strong>
                                    <span class="price-note">(Đã bao gồm VAT)</span>
                                        <p id="product-market">Giá thị trường:
                                            <span id="price-market"><?php echo $data["market_price"]?> ₫</span> - Tiết kiệm:
                                            <span id="save-money"><?php echo $data["save_money"]?> ₫</span>(<span id="discount-money" class="txt-discount" style="color: #ff6600;">-37%</span>)
                                        </p>
                                    </div>
                                    <div class="soluong">
                                        <p class="txt-soluong">Số lượng: 
                                            <div class="up-down-soluong">
                                                <span class="number-soluong">1</span> 
                                                <i class="fas fa-sort" style="margin-left: 14px;"></i>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="fast-ship-product">
                                        <img class="image-ship-product" src="images/ship-product.png">
                                        <span style="font-weight: 500;">Hà Nội - HCM:</span> 
                                        Bạn muốn nhận hàng trước 
                                        <span style="color: #ff6600;">10h</span> 
                                        hôm nay. Đặt hàng trước 
                                        <span style="color: #ff6600;">8h</span> 
                                        và chọn giao hàng 
                                        <span style="color: #ff6600;">2H</span> 
                                        ở bước thanh toán.                                    
                                        <a href="#" class="txt-xemthem code-product">Xem chi tiết</a>
                                    </div>
                                    <div class="btn-product">
                                        <div class="btn-check-product">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <div class="txt-check-product">
                                                <b>20/28</b> Chi Nhánh <br> còn <b> sản phẩm</b>        
                                            </div>
                                        </div>
                                        <div class="btn-cart-product">
                                            <i class="fas fa-cart-plus"></i>
                                            <div class="txt-cart-product">
                                                <b>Giỏ hàng</b>        
                                            </div>
                                        </div>
                                        <div class="btn-buy-product">
                                            <p>Mua ngay</p>
                                            <span>NowFree 2H (Hà Nội - HCM)</span>
                                        </div>
                                    </div>  
                            </div>
                            <div class="like-product">
                                    <button class="like-product-btn">
                                       <span> <i class="far fa-thumbs-up"></i>Thích 0</span>
                                    </button>
                                    <button class="share-product-btn">Chia sẻ</button>
                                    <span><i class="far fa-heart"></i> Thêm vào danh sách yêu thích</span>
                            </div>
                        </div>
                        <div class="col-lg-3 product-details-right">
                            <p style="color: #326e51;text-align: center;">
                                <span>
                                    <strong>Miễn phí vận chuyển</strong>
                                </span>
                            </p>
                            <div class="product-details-img-small-right">
                                <div class="item-img-details-right">
                                    <img src="images/shipnow.png">
                                    <p>Giao Nhanh Miễn Phí 2H (HN•HCM).
                                        <strong>Trễ tặng 100K</strong>
                                    </p>
                                </div>
                                <div class="item-img-details-right">
                                    <img src="images/auth.png">
                                    <p>Phát hiện hàng giả, bạn trả hàng và nhận thêm 
                                        <strong>110%</strong>
                                        giá trị.
                                    </p>
                                </div>
                                <div class="item-img-details-right">
                                    <img src="images/diachi.png">
                                    <p>
                                        <strong>Giao Hàng Miễn Phí</strong>
                                        (từ 90K HN•HCM trừ huyện, toàn Quốc từ 249K)
                                    </p>
                                </div>
                                <div class="item-img-details-right">
                                    <img src="images/doitra.png">
                                    <p>Đổi trả <br> trong
                                        <strong>14 ngày</strong>
                                    </p>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="details-product">
                    <div class="row">
                        <div class="col-lg-9 col-md-12 col-sm-12 product-details-left full-content-product">
                            <div class="content-top-details">
                                <a href="#" class="txt-item-details">Thông tin sản phẩm</a>
                                <a href="#" class="txt-item-details">Thông số sản phẩm</a>
                                <a href="#" class="txt-item-details">Thành phần chính</a>
                                <a href="#" class="txt-item-details">Hướng dẫn sử dụng</a>                                    
                                <a href="#" class="txt-item-details">Đánh giá</a>
                                <a href="#" class="txt-item-details">Hỏi đáp</a>
                            </div>
                            <div class="txt-product-details">
                                <p>
                                    <span>
                                        <strong><?php echo $data["vn_title"]?></strong>
                                    </span>
                                </p>
                                <p>
                                    <span class="full-content-product-details"><?php echo $data["info"]?>
                                    </span>
                                </p>
                                <p style="height: 350px;text-align:center;margin-top: 30px;">
                                    <span class="img-content-product-details">
                                    <img src="<?php echo $data ['img_big']?>" alt="" class="img-content-product-details">
                                    </span>
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 product-details-right img-brand-right">
                            <img src="images/brand-right.jpg">
                            <div class="slide-product row product-right-content">
                                <div class="slide-product-box item-product-right col-lg">
                                    <div class="img-slide-product">
                                        <img src="images/img-makeup2.jpg">
                                    </div>
                                    <div class="txt-slide-product">
                                        <div class="product-price-slide">
                                            <strong class="item-new-price-slide">168.000 ₫</strong>
                                            <span class="discount-slide"><p>20%</p></span>
                                            <span class="item-old-price-slide">210.000 ₫</span>
                                        </div>
                                        <div class="product-name width-common">
                                            <strong>LANEIGE</strong>
                                        </div>
                                        <div class="product-detail width-common">
                                            <div class="v-name txt-product-detail">Mặt Nạ Ngủ Môi Laneige Hương Quả Mọng Mini 8g</div>
                                            <div class="e-name txt-product-detail">Lip Sleeping Mask [Berry] - Miniature</div>
                                        </div>
                                        <div class="danh-gia with-common">
                                            <img src="images/4-star.png"> (6) &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <i class="fas fa-shopping-cart"></i> 322
                                        </div>
                                        <div class="product-detail txt-product-detail width_common">Deal đã hết hạn</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row details-product">
                    <div class="col-lg-9 col-md-12 col-sm-12 product-details-left">
                        <div class="sc-right-parameter">
                            <p>
                                <span>
                                    <strong>Thông số sản phẩm</strong>
                                </span>
                            </p>
                            <table class="sc-right-parameter-table table table-striped">
                                <tbody>
                                <tr>
                                    <td class="sc-table-row">Barcode</td>
                                    <td class="sc-table-row">8858842000144</td>
                                </tr>
                                <tr>
                                    <td class="sc-table-row">Thương Hiệu</td>
                                    <td class="sc-table-row"><?php echo $data ["name"]?></td>
                                </tr>
                                <tr>
                                    <td class="sc-table-row">Xuất xứ thương hiệu</td>
                                    <td class="sc-table-row">Thái Lan</td>
                                </tr>
                                <tr>
                                    <td class="sc-table-row">Nơi sản xuất</td>
                                    <td class="sc-table-row">Thailand</td>
                                </tr>
                                <tr>
                                    <td class="sc-table-row">Loại da</td>
                                    <td class="sc-table-row">Mọi Loại Da</td>
                                </tr>
                                <tr>
                                    <td class="sc-table-row">Đặc tính</td>
                                    <td class="sc-table-row">Ban Ngày</td>
                                </tr>
                                <tr>
                                    <td class="sc-table-row">Vấn đề về da</td>
                                    <td class="sc-table-row">Da xỉn màu</td>
                                </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 product-details-right">
                        <p>
                            <span>
                                <strong>Sản Phẩm Xem Cùng</strong>
                            </span>
                        </p>
                        <div class="slide-product row product-right-content">
                            <div class="slide-product-box item-product-right col-lg">
                                <div class="img-slide-product">
                                    <img src="images/img-makeup1.jpg">
                                </div>
                                <div class="txt-slide-product">
                                    <div class="product-price-slide">
                                        <strong class="item-new-price-slide">22.000 ₫</strong>
                                        <span class="discount-slide"><p>56%</p></span>
                                        <span class="item-old-price-slide">50.000 ₫</span>
                                    </div>
                                    <div class="product-name width-common">
                                        <strong>Ipek Klasik</strong>
                                    </div>
                                    <div class="product-detail width-common">
                                        <div class="v-name txt-product-detail">Bông Tẩy Trang Ipek 150 Miếng</div>
                                        <div class="e-name txt-product-detail">Cotton Pads</div>
                                    </div>
                                    <div class="danh-gia with-common">
                                        <img src="images/5-star.png"> (49) &nbsp;&nbsp;|&nbsp;&nbsp;
                                        <i class="fas fa-shopping-cart"></i> 5.523
                                    </div>
                                    <div class="product-detail txt-product-detail width_common">Deal đã hết hạn</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row details-product">
                    <div class="col-lg-9 col-md-12 col-sm-12 product-details-left">
                        <p style="margin-bottom : 0;">
                            <span>
                                <strong>Thành phần chính</strong>
                            </span>
                        </p>
                        <span class="full-content-product-details"><?php echo $data ["details_product"]?></span>
                    </div>
                    <div class="col-lg-3 product-details-right">

                    </div>
                </div>
                <div class="row details-product">
                    <div class="col-lg-9 col-md-12 col-sm-12 product-details-left">
                        <p style="margin-bottom : 0;">
                            <span>
                                <strong>Hướng dẫn sử dụng</strong>
                            </span>
                        </p>
                        <span class="full-content-product-details">Bóp một lượng sản phẩm vừa đủ và thoa lên những vùng da muốn chống nắng.
                                Nên thoa sản phẩm tầm 15 ~ 20' trước khi ra ngoài để sản phẩm thẩm thấu hoàn toàn vào da và đạt hiệu quả cao.</span>
                    </div>
                    <div class="col-lg-3 product-details-right">

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
            
        </div>

