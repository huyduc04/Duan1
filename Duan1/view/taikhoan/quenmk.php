<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
        body {
            color: #fff;
            background-image: url(./upload/z4899751480754_a1fbc28d17e9a35b1a27eaddbd89674e.jpg);
            background-size: cover;
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background-color: rgba(0, 0, 0, 7);
            border: 1px solid #fff;
            opacity: 0.9;
        }

        .card-header {
            background-color: #d9534f;
            color: #fff;
        }

        .custom-reset-btn {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .custom-reset-btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .custom-submit-btn {
            background-color: #d9534f;
            border-color: #d9534f;
            color: #fff;
        }

        .custom-submit-btn:hover {
            background-color: #ac2925;
            border-color: #8a1f19;
        }

        a.custom-link {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        a.custom-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">QUÊN MẬT KHẨU</h2>
                    </div>

                    <div class="card-body">
                        <form action="index2.php?act=quenmk" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" placeholder="Nhập email của bạn" required>
                                </div>
                            </div>
                        

                            <div class="row justify-content-center">
                                <input type="submit" value="Gửi" name="guiemail" class="btn btn-primary custom-reset-btn">
                                <input type="reset" value="Nhập lại" class="btn btn-secondary custom-submit-btn">
                                <a href="index2.php?act=dangnhap" class="custom-link">Quay Về Đăng Nhập</a>
                            </div>
                        </form>
                        <h2 class="thongbao">
                            <?php

                            if (isset($thongbao) && $thongbao != "") {
                                echo  $thongbao;
                            }

                            ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>