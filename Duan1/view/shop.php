    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Sản phẩm</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Trang chủ</a>
                            <span>Sản phẩm</span>
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
                        <p>Hiển thị 1–12 trong 126 kết quả</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="shop__product__option__right">
                        <p>Sắp xếp theo giá:</p>
                        <select>
                            <option value="">Thấp đến cao</option>
                            <option value="">0 - 100.000 VNĐ</option>
                            <option value="">100.000 - 500.000 VNĐ</option>
                            <option value="">500.000 - 1.000.000 VNĐ</option>
                            <option value="">10.000.000 - 25.000.000 VNĐ</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <!-- <a href=""  src="view/img/icon/cart.png></a> -->
            <?php
            foreach ($spnew as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=" . $id_sp;
                $linkdonhang = "index.php?act=addtocart";
                $hinh = $img_path . $img_sp;


                echo ' 
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="product__item">
                                    <form action="index.php?act=addtocart" method="post">
                                        <div class="product__item__pic set-bg" data-setbg="' . $hinh . '">
                                            <ul class="product__hover">
                                                <li><a href="#"><img src="view/img/icon/heart.png" alt=""></a></li>
                                                <li><a href="#"><img src="view/img/icon/compare.png" alt=""> <span>Compare</span></a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6>' . $name_sp . '</h6>
                                            <a href="' . $linksp . '" class="add-cart">Xem Chi Tiết Sản Phẩm</a>
                                        
                                            <h5>' . $price_sp . '</h5>
                                           
                                        </div>
                                       
                                        <input type="hidden" name="soluong" value="1">
                                        <input type="hidden" name="id" value="' . $id_sp . '">
                                        <input type="hidden" name="name" value="' . $name_sp . '">
                                        <input type="hidden" name="img" value="' . $img_sp . '">
                                        <input type="hidden" name="price" value="' . $price_sp . '">
                                       

                                    </form>
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