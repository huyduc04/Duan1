  <!-- Shop Details Section Begin -->
  <section class="shop-details">
      <div class="product__details__pic">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <div class="product__details__breadcrumb">
                          <a href="./index.html">Home</a>
                          <a href="./shop.html">Shop</a>
                          <span>Product Details</span>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-lg-3 col-md-3">
                      <ul class="nav nav-tabs" role="tablist">
                          <!-- <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="view/img/shop-details/thumb-1.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="view/img/shop-details/thumb-2.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="view/img/shop-details/thumb-3.png">
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">
                                    <div class="product__thumb__pic set-bg" data-setbg="view/img/shop-details/thumb-4.png">
                                        <i class="fa fa-play"></i>
                                    </div>
                                </a>
                            </li> -->
                      </ul>
                  </div>
                  <div class="col-lg-6 col-md-9">
                      <div class="tab-content">

                          <?php
                            extract($onesp);
                            $img = $img_path . $img_sp;



                            ?>


                          <div class="tab-pane active" id="tabs-1" role="tabpanel">
                              <div class="product__details__pic__item">
                                  <img src="<?= $img ?>" alt="">
                              </div>
                          </div>

                          <!-- <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="view/img/shop-details/product-big-2.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="view/img/shop-details/product-big-3.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="view/img/shop-details/product-big.png" alt="">
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="view/img/shop-details/product-big-4.png" alt="">
                                    <a href="https://www.youtube.com/watch?v=8PJ3_p7VqHw&list=RD8PJ3_p7VqHw&start_radio=1" class="video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div> -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="product__details__content">
          <div class="container">
              <div class="row d-flex justify-content-center">
                  <div class="col-lg-8">
                      <div class="product__details__text">
                          <h4><?= $name_sp ?></h4>

                          <h3><?= $price_sp ?><span></span></h3>
                          <p><?= $mota_sp ?></p>
                          <div class="product__details__option">
                              <div class="product__details__option__size">
                                  <span>Size:</span>
                                  <script>
                                      function updateHiddenInput() {
                                          var selectedSize = document.querySelector('input[name="size_name"]:checked').value; // Lấy kích thước được chọn
                                          document.querySelector('input[name="hidden_size"]').value = selectedSize; // Cập nhật giá trị của input ẩn
                                      }
                                  </script>
                                  <form action="index.php?act=addtocart" method="post">

                                      <?php
                                        foreach ($one_size as $size) {
                                            extract($size);
                                            echo '<input type="radio" name="size_name" value="' . $size_name . '" onchange="updateHiddenInput()">' . $size_name;
                                        }
                                        ?>
                              </div>
                          </div>
                          <div class="product__details__cart__option">
                              <input type="hidden" name="id" value="<?= $id_sp ?>">
                              <input type="hidden" name="hidden_size">
                              <input type="hidden" name="name" value="<?= $name_sp ?>">
                              <input type="hidden" name="img" value="<?= $img_sp ?>">
                              <input type="hidden" name="price" value="<?= $price_sp ?>">
                              <div class="quantity">
                                  <div class="pro-qty">
                                      <input type="number" name="soluong" min="1" max="20" value="1">
                                  </div>
                              </div>
                              <input type="submit" class="primary-btn" name="addtocart" value="Thêm vào giỏ hàng">
                              </form>
                          </div>
                          <div class="product__details__btns__option">
                              <a href="#"><i class="fa fa-heart"></i> add to wishlist</a>
                              <a href="#"><i class="fa fa-exchange"></i> Add To Compare</a>
                          </div>
                          <div class="product__details__last__option">
                              <h5><span>Guaranteed Safe Checkout</span></h5>
                              <img src="view/img/shop-details/details-payment.png" alt="">
                              <ul>
                                  <li><span>Mã Giày:</span><?= $id_sp ?></li>
                                  <li><span>Loại Giày:</span><?= $id_dm ?></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>







              <div class="row">
                  <div class="col-lg-12">
                      <div class="product__details__tab">
                          <ul class="nav nav-tabs" role="tablist">
                              <!-- <li class="nav-item">
                                              <a class="nav-link active" data-toggle="tab" href="#tabs-5" role="tab">Bình Luận</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" data-toggle="tab" href="#tabs-6" role="tab">Customer
                                                  Previews(5)</a>
                                          </li>
                                          <li class="nav-item">
                                              <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Additional
                                                  information</a>
                                          </li> -->
                          </ul>
                          <div class="tab-content">
                              <div class="tab-pane active" id="tabs-5" role="tabpanel">


                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                                  <script>
                                      $(document).ready(function() {
                                          $("#binhluan").load("view/binhluan/binhluanform.php", {
                                              idpro: <?= $id ?>
                                          });

                                      });
                                  </script>
                                  <div id="binhluan">

                                  </div>


                              </div>
                          </div>
                          <div class="tab-pane" id="tabs-6" role="tabpanel">

                          </div>
                          <div class="tab-pane" id="tabs-7" role="tabpanel">

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
  </section>
  <!-- Shop Details Section End -->

  <!-- Related Section Begin -->
  <section class="related spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <h3 class="related-title">Giày Cùng Loại</h3>
              </div>
          </div>
          <div class="row">

              <?php

                foreach ($sp_cung_loai as $spcl) {
                    extract($spcl);
                    $img = $img_path . $img_sp;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id_sp;
                    echo '
                
                <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="' . $img . '">
                            <span class="label">New</span>
                            <ul class="product__hover">
                                <li><a href="#"><view/img src="view/img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><view/img src="view/img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><view/img src="view/img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6>' . $name_sp . '</h6>
                            <a href="' . $linksp . '" class="add-cart">Xem Chi Tiết Sản Phẩm</a>
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <h5>' . $price_sp . '</h5>
                            <div class="product__color__select">
                                <label for="pc-1">
                                    <input type="radio" id="pc-1">
                                </label>
                                <label class="active black" for="pc-2">
                                    <input type="radio" id="pc-2">
                                </label>
                                <label class="grey" for="pc-3">
                                    <input type="radio" id="pc-3">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                ';
                }

                ?>



          </div>
      </div>
  </section>
  <!-- Related Section End -->