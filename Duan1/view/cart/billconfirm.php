<!-- Shopping Cart Section End -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Your custom styles -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .breadcrumb-option {
            background-color: #fff;
            padding: 20px 0;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .breadcrumb-option h4 {
            color: #333;
            margin-bottom: 0;
        }

        .breadcrumb__links a {
            color: #007bff;
            text-decoration: none;
        }

        .shopping-cart {
            padding: 40px 0;
        }

        .boxtitle {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            font-size: 18px;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .boxcontent {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .billform table {
            width: 100%;
            margin-top: 20px;
        }

        .billform table td {
            padding: 10px;
            border: 1px solid #dee2e6;
        }

        .cart table {
            width: 100%;
            margin-top: 20px;
        }

        .cart table th,
        .cart table td {
            padding: 10px;
            border: 1px solid #dee2e6;
            text-align: center;
        }

        .continue__btn,
        .update__btn {
            margin-top: 20px;
        }

        .cart__discount,
        .cart__total {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin-top: 20px;
        }

        .cart__discount input {
            width: 70%;
            padding: 8px;
            margin-right: 10px;
        }

        .cart__discount button {
            padding: 8px;
        }

        .order-info {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .order-info li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        .order-info li span {
            color: #007bff;
            font-weight: bold;
        }

        .continue__btn a {
            background-color: #ff0000;
            /* Red background color */
            color: #fff;
            /* White text color */
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .continue__btn a:hover {
            background-color: #cc0000;
            /* Darker red on hover */
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
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">


                            <div class="boxtitle">CẢM ƠN</div>
                            <div class="row boxcontent" style="text-align:center">
                                <h2>Cảm ơn quý khách</h2>

                            </div>
                            <?php
                            if (isset($bill) && (is_array($bill))) {
                                extract($bill);
                                $pttt = get_pttt($bill['bill_pttt']);
                            }
                            ?>
                            <div class="">
                                <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
                                <div class="row boxcontent">
                                    <ul class="order-info">
                                        <li>Mã đơn hàng:HTD2004<?= $bill['id']; ?></li>
                                        <li> -Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                                        <li> -Tổng đơn hàng: <?= $bill['total']; ?>VNĐ</li>
                                        <li> -Phương thức thanh toán: <?= $pttt ?></li>
                                    </ul>
                                </div>



                            </div>

                            <div class="">
                                <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                                <div class="row boxcontent billform" style="text-align:center">

                                    <table>


                                        <tr>
                                            <td>Người đặt hàng</td>
                                            <td><?= $bill['bill_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ</td>
                                            <td><?= $bill['bill_address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?= $bill['bill_email']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Điện thoại</td>
                                            <td><?= $bill['bill_tel']; ?></td>
                                        </tr>


                                    </table>







                                </div>
                            </div>

                            <div class="">
                                <div class="boxtitle">CHI TIẾT GIỎ HÀNG</div>
                                <div class="row boxcontent cart">
                                    <table>
                                        <!-- <tr>
                                        <th>STT</th>
                                        <th>Hình</th>
                                        <th>Sản Phẩm</th>
                                        <th>Đơn Giá</th>
                                        <th>Số Lượng</th>
                                        <th>Thành Tiền</th>
                                     
                                    </tr> -->
                                        <?php
                                        bill_chi_tiet($billct);
                                        ?>
                                    </table>
                                </div>
                            </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
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

    <!-- Bootstrap JS and Popper.js (if needed) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Your custom scripts -->
    <script>
        // Add your custom scripts here
    </script>
</body>

</html>