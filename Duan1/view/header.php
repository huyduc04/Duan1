<?php
    ob_start();
    error_reporting(E_ALL);
    ini_set('display_error', 1);
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->

    <link rel="stylesheet" href="view/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="view/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="view/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="view/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loaderloaeder 0022"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__option">
            <div class="offcanvas__links">

                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <a href="">Sign in</a>

                <?php
                } else {
                ?>
                    <a href="#"><img src="view/img/icon/search.png" alt=""></a>


                <?php } ?>




                <a href="#">FAQs</a>
            </div>
            <div class="offcanvas__top__hover">
                <span>Usd <i class="arrow_carrot-down"></i></span>
                <ul>
                    <li>USD</li>
                    <li>EUR</li>
                    <li>USD</li>
                    <li>VND</li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><img src="view/img/icon/search.png" alt=""></a>
            <a href="#"><img src="view/img/icon/heart.png" alt=""></a>
            <a href="#"><img src="view/img/icon/cart.png" alt=""> <span>0</span></a>
            <div class="price">$0.00</div>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Miễn phí vận chuyển, hoàn trả trong 30 ngày hoặc đảm bảo hoàn tiền.</p>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Miễn phí vận chuyển, hoàn trả trong 30 ngày hoặc đảm bảo hoàn tiền.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            <div class="header__top__links">



                                <?php
                                if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                ?>
                                    <a href="index2.php?act=capnhattk"><?= $ten_user ?></a>

                                    <?php if ($role == 1) { ?>


                                        <a href="admin/index.php">Admin</a>
                                        </li>
                                    <?php } ?>
                                    <a href="index2.php?act=thoat">Thoát</a>

                                <?php
                                } else {
                                ?>
                                    <a href="index2.php?act=dangnhap">Sign in</a>
                                <?php } ?>
                                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                                <a href="index.php?act=mybill">Đơn Mua</a>
                                <?php
                } else {
                    echo '<a  href="#">Đơn Mua</a>';
                }
                ?>
                            </div>
                            <!-- <div class="header__top__hover">
                                <span>Giỏ<i class="arrow_carrot-down"></i></span>
                                <ul>
                                    <li>Giỏ Hàng</li>
                                    <li>Đơn Mua</li>
                                  
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="index.php"><img src="view/img/logo3.png" alt="" width="70%"></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class=""><a href="index.php">Trang chủ</a></li>
                            <li><a href="index.php?act=shop">Sản phẩm</a></li>
                            <!-- <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="./about.html">About Us</a></li>
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li> -->
                            <li><a href="index.php?act=blog">Tin tức</a></li>
                            <li><a href="index.php?act=contact">Liên hệ</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><img src="view/img/icon/search.png" alt=""></a>
                        <a href="#"><img src="view/img/icon/heart.png" alt=""></a>
                        <a href="index.php?act=giohang"><img src="view/img/icon/cart.png" alt=""> <span>0</span></a>
                        <!-- <div class="price">$0.00</div> -->
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>