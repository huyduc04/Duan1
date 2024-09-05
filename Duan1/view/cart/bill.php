<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <style>
        .btn-danger {
            background-color: #ff0000;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #cc0000;
        }

        .continue__btn .btn-danger:hover {
            background-color: #ff0000;
        }
    </style>

</head>

<body>

    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <form onsubmit="return confirm('Đồng Ý Đặt Hàng')" action="index.php?act=billconfirm" method="post">
                            <div class="mb-3">
                                <h3>THÔNG TIN ĐẶT HÀNG</h3>
                            </div>
                          

                            <div class="table-responsive">
                                <table class="table">
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        $name = $_SESSION['user']['tentaikhoan'];
                                        $address = $_SESSION['user']['diachi'];
                                        $email = $_SESSION['user']['gmail'];
                                        $tel = $_SESSION['user']['sdt'];
                                    } else {
                                        $name = "";
                                        $address = "";
                                        $email = "";
                                        $tel = "";
                                    }
                                    ?>

                                    <tr>
                                        <td>Người đặt hàng</td>
                                        <td><input type="text" class="form-control" name="name" value="<?= $name ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td><input type="text" class="form-control" name="address" value="<?= $address ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><input type="text" class="form-control" name="email" value="<?= $email ?>"></td>
                                    </tr>
                                    <tr>
                                        <td>Điện thoại</td>
                                        <td><input type="text" class="form-control" name="tel" value="<?= $tel ?>"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="mb-3">
                                <h3 class="boxtitle">PHƯƠNG THỨC THANH TOÁN</h3>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="redirect"  value="1" checked>
                                    <label class="form-check-label" for="pttt1">Trả tiền khi nhận hàng</label>
                                
                                </div>
                             
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="redirect"  value="2">
                                    <label class="form-check-label"  for="pttt3">Thanh toán VNPAY</label>
                          
                                </div>
                            </div>



                            <table class="table">
                                <thead>
                                    <tr>
                                        <h3>DANH SÁCH ĐẶT HÀNG</h3>
                                        <?php viewcart(0);
                                        ?>
                                    </tr>
                                </thead>
                            </table>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" name="dongydathang" value="ĐỒNG Ý ĐẶT HÀNG">
                            </div>
                        </form>
                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#" class="btn btn-danger">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#" class="btn btn-secondary"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div> -->
                </div>
                <?php 
include "boxright.php";
?>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>