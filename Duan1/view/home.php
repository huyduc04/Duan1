  <!-- Hero Section Begin -->
  <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="view/img/hero/banner16.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Bộ Sưu Tập Mùa Đông</h6>
                                <h2>Balenciaga Triple S Trainer White</h2>
                                <p>Balen Triple S Trainer White 2018. Dad Shoe. Đế giày tăng chiều cao. Phù hợp: nam nữ, đi học, đi làm, hoạt động thể thao.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="view/img/hero/banner23.png">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6>Bộ Sưu Tập Mùa Thu</h6>
                                <h2>Vans Old Skool Classic Black</h2>
                                <p>O.l.d Skool Black / Đen. Phù hợp: nam nữ, đi học, đi làm, hoạt động thể thao.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <section class="banner spad">
        <div class="container">
            <div class="row">


                <?php 
                 $i=0;
                    foreach ($top3 as $t3) {
                        extract($t3);
                        $img=$img_path.$img_sp;
                        $link="index.php?act=sanphamct&idsp=".$id_sp;

                       
                        if($i==0) {
                            $div="col-lg-7 offset-lg-4";
                            $div2="banner__item";
                        }
                        if($i==1) {
                            $div="col-lg-5";
                            $div2="banner__item banner__item--middle";
                        }
                        if($i==2) {
                            $div="col-lg-7";
                            $div2="banner__item banner__item--last";
                        }
                        echo '
                        
                        <div class="'.$div.'">
                        <div class="'.$div2.'">
                            <div class="banner__item__pic">
                                <img src="'.$img.'" alt="">
                            </div>
                            <div class="banner__item__text">
                                <h2>'.$name_sp.'</h2>
                                <a href="'.$link.'">Shop now</a>
                            </div>
                        </div>
                    </div>
                        
                        ';
                        $i+=1;
                    }
                ?>




               
             
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản Phẩm Bán Chạy Nhất</li>
                        <!-- <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li> -->
                    </ul>
                </div>
              
                
            </div>
            <div class="row product__filter">
            <?php
                                  foreach( $spnew2 as $sp) {
                                    extract($sp);
                                    $linksp="index.php?act=sanphamct&idsp=".$id_sp;
                                    $hinh= $img_path.$img_sp;
                                  
                                    echo ' 
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                    <div class="product__item">
                    <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="soluong" value="1">
                    <input type="hidden" name="id" value="'.$id_sp.'">
                    <input type="hidden" name="name" value="'.$name_sp.'">
                    <input type="hidden" name="img" value="'.$img_sp.'">
                    <input type="hidden" name="price" value="'.$price_sp.'">
                   
               
                        <div class="product__item__pic set-bg" data-setbg="'. $hinh.'">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><img src="view/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="view/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>'.$name_sp.'</h6>
                            <a href="'.$linksp.'" class="add-cart">Xem Chi Tiết Sản Phẩm</a>
                         
                            <h5>'.$price_sp.'</h5>
                           
                        </div>

                        </form>
                    </div>
                </div>';
                                  }
                ?>
               
               
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Nổi Bật<br /> <span>Bộ sưu tập giày</span> <br />Hot 2023</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="view/img/product/giay9.jpg" alt="">
                        <div class="hot__deal__sticker">
                            <span>Giảm giá</span>
                            <h5>$29.99</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Ưu đãi trong tuần</span>
                        <h2>Balenciaga Triple S Trainer Black Red</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="view/img/instagram/giay10.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="view/img/instagram/giay11.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="view/img/instagram/giay12.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="view/img/instagram/giay18.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="view/img/instagram/giay19.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="view/img/instagram/giay20.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Tin mới nhất</span>
                        <h2>Thời trang xu hướng mới</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="view/img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="view/img/icon/calendar.png" alt=""> 16 Tháng Hai 2020</span>
                            <h5>Bàn là uốn tóc nào là tốt nhất</h5>
                            <a href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="view/img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="view/img/icon/calendar.png" alt=""> 21 Tháng Hai 2020</span>
                            <h5>Eternity Bands tồn tại mãi mãi</h5>
                            <a href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="view/img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="view/img/icon/calendar.png" alt=""> 28 Tháng Hai 2020</span>
                            <h5>Lợi ích sức khỏe của kính râm</h5>
                            <a href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->


    <style>
        input[name="addtocart"] {
            background-color: #ff0000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[name="addtocart"]:hover {
            background-color: #cc0000;
        }
    </style>