<?php
if (is_array($taikhoan)) {
    extract($taikhoan);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4">CẬP NHẬT TÀI KHOẢN </h1>
                    <form action="index.php?act=updatetaikhoan" method="post">
        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">VAI TRÒ</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="role" value="<?php if (isset($role) && ($role != "")) echo $role; ?>">
                            </div>
                        </div>
                        <input type="hidden" name="id_user" value="<?php if (isset($id_user) && ($id_user > 0)) echo $id_user; ?>">
                        <div class="form-group row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                                <input type="submit" class="btn btn-success" name="capnhat" value="CẬP NHẬT">
                                <input type="reset" class="btn btn-secondary" value="NHẬP LẠI">
                                <a href="index.php?act=taikhoan" class="btn btn-primary">DANH SÁCH</a>
                            </div>
                        </div>
                        <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
                    </form>
                </div>
            </div>
        </div>

        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>