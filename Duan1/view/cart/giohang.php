<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Các CSS của bạn ở đây */

        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
        }

        /* Breadcrumb Section */
        .breadcrumb-option {
            background-color: #f8f9fa;
            padding: 40px 0;
        }

        .breadcrumb__text h4 {
            font-size: 24px;
            color: #212529;
        }

        .breadcrumb__links a {
            color: #007bff;
        }

        /* Shopping Cart Section */
        .shopping-cart {
            padding: 80px 0;
        }

        .shopping__cart__table table {
            width: 100%;
            border-collapse: collapse;
        }

        .shopping__cart__table th,
        .shopping__cart__table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        .shopping__cart__table th {
            background-color: #f4f4f4;
        }

        .shopping__cart__table td.product__cart__item {
            display: flex;
            align-items: center;
        }

        .product__cart__item__pic {
            width: 80px;
            margin-right: 20px;
            overflow: hidden;
        }

        .product__cart__item__pic img {
            width: 100%;
            height: auto;
        }

        .product__cart__item__text h6 {
            font-size: 18px;
            margin-bottom: 5px;
            color: #212529;
        }

        .product__cart__item__text h5 {
            font-size: 20px;
            color: #e44d26;
        }

        .quantity__item {
            display: flex;
            align-items: center;
        }

        .pro-qty-2 input {
            width: 40px;
            padding: 8px;
            text-align: center;
            border: 1px solid #ced4da;
            margin: 0 10px;
        }

        .cart__price {
            font-size: 20px;
            color: #e44d26;
        }

        .cart__close {
            font-size: 24px;
            cursor: pointer;
            color: #868e96;
        }

        /* Continue Shopping and Update Cart Buttons */
        .continue__btn,
        .update__btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
            border-radius: 4px;
        }

        .update__btn {
            background-color: #343a40;
        }

        .continue__btn:hover,
        .update__btn:hover {
            background-color: #343a40;
        }

        /* Cart Discount and Total */
        .cart__discount,
        .cart__total {
            background-color: #f8f9fa;
            padding: 20px;
            margin-top: 30px;
            border: 1px solid #dee2e6;
        }

        .cart__discount h6,
        .cart__total h6 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #212529;
        }

        .cart__discount input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ced4da;
        }

        .cart__discount button {
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s ease-in-out;
            border: 1px solid #e44d26;
            border-radius: 4px;
        }

        .cart__discount button:hover {
            background-color: #343a40;
            border: 1px solid #343a40;
        }

        .cart__total ul {
            list-style: none;
            padding: 0;
        }

        .cart__total li {
            font-size: 18px;
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            color: #212529;
        }

        .cart__total a.primary-btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.3s ease-in-out;
            border-radius: 4px;
        }

        .cart__total a.primary-btn:hover {
            background-color: #343a40;
        }

        /* CSS cho nút TIẾP TỤC ĐẶT HÀNG */
        input[type="submit"] {
            display: inline-block;
            padding: 10px 20px;
            background-color: #e44d26;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #343a40;
        }

        /* CSS cho nút XÓA GIỎ HÀNG */
        input[type="button"] {
            display: inline-block;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="button"]:hover {
            background-color: #555;
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
                        <table>
                            <tbody>
                                <table class="table table-bordered">
                                    <?php viewcart(1); ?>
                                    <tr>
                                        <td colspan="4">
                                            <input type="submit" value="TIẾP TỤC ĐẶT HÀNG" class="btn btn-primary" onclick="location.href='index.php?act=bill'">
                                            <input type="button" value="XÓA GIỎ HÀNG" class="btn btn-danger" onclick="location.href='index.php?act=delcart'">
                                        </td>
                                    </tr>
                                </table>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#" class="btn ">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#" class="btn btn-dark"><i class="fa fa-spinner"></i> Update cart</a>
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
    <!-- Shopping Cart Section End -->

    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>