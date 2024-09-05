    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
<?php 
    include "boxleft.php";
?>
<div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__left">
                                    <p>Showing 1–12 of 126 results</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select>
                                        <option value="">Low To High</option>
                                        <option value="">$0 - $55</option>
                                        <option value="">$55 - $100</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <?php
                                  foreach( $dssp as $sp) {
                                    extract($sp);
                                    $linksp="index.php?act=sanphamct&idsp=".$id_sp;
                                    $hinh= $img_path.$img_sp;
                                    
                                  
                                    echo ' 
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                        <div class="product__item__pic set-bg" data-setbg="'. $hinh.'">
                                            <ul class="product__hover">
                                                <li><a href="#"><img src="view/img/icon/heart.png" alt=""></a></li>
                                                <li><a href="#"><img src="view/img/icon/compare.png" alt=""> <span>Compare</span></a>
                                                </li>
                                                <li><a href="'.$linksp.'"><img src="view/img/icon/cart.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6>'.$name_sp.'</h6>
                                            <a href="'.$linksp.'" class="add-cart">Xem Chi Tiết Sản Phẩm</a>
                                          
                                            <h5>'.$price_sp.'</h5>
                                          
                                        </div>
                                    </div>
                                </div>
    
                                    ';
                                   
                                }
                            ?>
                        

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product__pagination">
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <span>...</span>
                                <a href="#">21</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->