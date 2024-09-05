<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật loại hàng hóa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <?php 
                if (is_array($sanpham)) {
                    extract($sanpham);
                }
                $hinhpath = "../upload/" . $img_sp;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    $hinh = " no photo";
                }
            ?>

            <div class="row">
                <div class="col-12 frmtitle">
                    <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
                </div>
                <div class="row frmcontent">
                    <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                        <div class="col-md-6 mb-3">
                            <select name="iddm" class="form-control">
                                <option value="0" selected>Tất cả</option>
                                <?php 
                                    foreach ($listdanhmuc as $danhmuc) {
                                        if ($id_dm == $danhmuc['id_dm']) $s = "selected"; else $s = "";
                                        echo '<option value="' . $danhmuc['id_dm'] . '" ' . $s . ' class="form-control">' . $danhmuc['name_dm'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            Tên sản phẩm <br>
                            <input type="text" name="tensp" value="<?=$name_sp?>" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            Giá <br>
                            <input type="text" name="giasp" value="<?=$price_sp?>" class="form-control">
                        </div>
                        <div class="col-md-8 mb-3">
                            Hình <br>
                            <div class="custom-file">
                                <input type="file" name="hinh" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">No File Chosen</label>
                            </div>
                            <?=$hinh?>
                        </div>
                        <div class="col-12 mb-3">
                            Mô tả <br>
                            <textarea name="mota" cols="30" rows="10" class="form-control"><?=$mota_sp?></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <input type="hidden" name="idsp" value="<?=$id_sp?>">
                            <input type="submit" name="capnhat" value="CẬP NHẬT" class="btn btn-primary">
                            <input type="reset" value="NHẬP LẠI" class="btn btn-secondary">
                            <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH" class="btn btn-info"></a>
                        </div>

                        <?php
                            if(isset($thongbao) && ($thongbao != "")) echo $thongbao;
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>