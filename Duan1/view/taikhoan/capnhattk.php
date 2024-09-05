<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            background-color: rgba(0, 0, 0, 0.7);
            border: 1px solid #fff;
            opacity: 0.9;
            border-radius: 2px;
        }

        .card-header {
            background-color: #d9534f;
            color: #fff;
            text-align: center;
            padding: 15px 0;
            border-radius: 10px 10px 0 0;
            border-bottom: 1px solid #fff;
            /* Thêm đường viền dưới cho card-header */
        }

        .btn-primary {
            background-color: #d9534f;
            border-color: #d9534f;
        }

        .btn-primary:hover {
            background-color: #c9302c;
            border-color: #ac2925;
        }

        .btn-primary:focus,
        .btn-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(217, 83, 79, 0.5);
        }

        .btn-primary:disabled {
            background-color: #d9534f;
            border-color: #d9534f;
        }

        .btn-primary:not(:disabled):not(.disabled):active,
        .btn-primary:not(:disabled):not(.disabled).active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #ac2925;
            border-color: #8a1f19;
        }

        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 0.2rem rgba(217, 83, 79, 0.5);
        }

        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }

        .btn-custom:hover {
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
                        <h2>Cập nhật tài khoản</h2>
                    </div>
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <div class="card-body">
                        <form action="index2.php?act=capnhattk" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="email" value="<?= $gmail ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user" value="<?= $ten_user ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pass">Mật khẩu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="pass" value="<?= $matkhau ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="address" value="<?= $diachi ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Số Điện Thoại</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="tel" value="<?= $sdt ?>">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-primary btn-block" name="capnhat" value="Cập Nhật">
                                    <input type="hidden" class="btn btn-primary btn-block" name="id" value="<?= $id_user ?>">

                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-secondary btn-block btn-custom"><a href="index.php" class="text-white">Quay Lại Website</a></button>

                                </div>

                            </div>


                        </form>


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