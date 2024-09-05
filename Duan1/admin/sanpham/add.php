<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 frmtitle"> <!-- Changed class from "row" to "col-12" -->
                    <h1>THÊM MỚI SẢN PHẨM</h1>
                </div>
            </div>
            <div class="row frmcontent">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="col-md-6 mb-3"> <!-- Added "col-md-6" class for better responsiveness -->
                        Danh mục <br>
                        <select name="iddm" class="form-control"> <!-- Added "form-control" class for styling -->

                            <?php

                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $id_dm . '">' . $name_dm . '</option>';
                            }
                            ?>
                        </select>


                       
                       
                    </div>


                    <div class="col-md-6 mb-3">
                        size <br>
                        <div class="sanpham_size">
                        <input type="checkbox" name="sanpham_size[]" value="36" >36 <!-- Added "form-control" class for styling -->
                        <input type="checkbox" name="sanpham_size[]" value="37" >37 <!-- Added "form-control" class for styling -->
                        <input type="checkbox" name="sanpham_size[]" value="38" >38 <!-- Added "form-control" class for styling -->
                        <input type="checkbox" name="sanpham_size[]" value="39" >39 <!-- Added "form-control" class for styling -->
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp" class="form-control"> <!-- Added "form-control" class for styling -->
                    </div>
                    <div class="col-md-6 mb-3">
                        Giá <br>
                        <input type="text" name="giasp" class="form-control"> <!-- Added "form-control" class for styling -->
                    </div>
                    <div class="col-md-9 mb-3">
                        Hình <br>
                        <input type="file" name="hinh" class="form-control">

                        <!-- Added "form-control-file" class for styling -->
                    </div>
                    <div class="col-12 mb-3">
                        Mô tả <br>
                        <textarea name="mota" cols="30" rows="10" class="form-control"></textarea> <!-- Added "form-control" class for styling -->
                    </div>
                    <div class="col-12 mb-3">
                        <input type="submit" name="themmoi" value="THÊM MỚI" class="btn btn-primary"> <!-- Added "btn btn-primary" class for styling -->
                        <input type="reset" value="NHẬP LẠI" class="btn btn-secondary"> <!-- Added "btn btn-secondary" class for styling -->
                        <a href="index.php?act=listsp" class="btn btn-info">DANH SÁCH</a> <!-- Added "btn btn-info" class for styling -->
                    </div>
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>