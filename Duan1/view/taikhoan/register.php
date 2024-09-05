<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng ký</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            background-color: rgba(0, 0, 0, 0.7);
            border: 1px solid #fff;
            opacity: 0.9;
        }

        .card-header {
            background-color: #d9534f;
            color: #fff;
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

        .btn-primary.disabled,
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
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Đăng ký</h2>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" onsubmit="return validateForm()">
                            <div class="form-group">
                                <label for="username">Tên đăng nhập</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user" id="username" placeholder="Nhập tên người dùng của bạn" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Địa chỉ email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Nhập địa chỉ email của bạn" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Mật khẩu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" name="pass" class="form-control" id="password" placeholder="Nhập mật khẩu của bạn" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Xác nhận mật khẩu</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Xác nhận mật khẩu của bạn" required>
                                </div>
                                <small id="passwordHelp" class="form-text text-danger"></small>
                            </div>

                            <input type="submit" name="dangky" value="Đăng Ký" class="btn btn-primary btn-block">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var passwordHelp = document.getElementById("passwordHelp");

            if (password !== confirmPassword) {
                passwordHelp.textContent = alert("Mật khẩu và xác nhận mật khẩu không khớp nhau!!!");
                return false;
            } else {
                passwordHelp.textContent = "";
                return true;
            }
        }
        // window.onload = function() {
        //     alert("Tuấn bốc phét :))))");
        // };
    </script>
</body>

</html>