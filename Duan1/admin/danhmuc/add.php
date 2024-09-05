<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới loại hàng hóa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4">THÊM MỚI LOẠI HÀNG HÓA</h1>
                </div>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addm" method="post">
                    <div class="col-md-12 mb-3">
                        <label for="maloai">Mã loại</label>
                        <input type="text" class="form-control" name="maloai" disabled>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="tenloai">Tên loại</label>
                        <input type="text" class="form-control" name="tenloai">
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="submit" class="btn btn-success" name="themmoi" value="THÊM MỚI">
                        <input type="reset" class="btn btn-secondary" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm" class="btn btn-primary">DANH SÁCH</a>
                    </div>

                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>

</body>

</html>