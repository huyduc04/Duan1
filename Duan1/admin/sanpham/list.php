<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 frmtitle">
                    <h1>DANH SÁCH SẢN PHẨM</h1>
                </div>
            </div>
            <form action="index.php?act=listsp" method="post" class="form-inline mb-3">
                <div class="form-group mr-2">
                    <input type="text" name="kyw" class="form-control" placeholder="Tìm kiếm">
                </div>
                <div class="form-group mr-2">
                    <select name="iddm" class="form-control">
                        <option value="0" selected>Tất cả</option>
                        <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="' . $id_dm . '">' . $name_dm . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" name="listok" value="OK">
            </form>
            <div class="container-fluid">
                <div class="col-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                
                                <th>ID SẢN PHẨM</th>
                                <th>TÊN SẢN PHẨM</th>
                                <th>HÌNH</th>
                                <th>MÔ TẢ SẢN PHẨM</th>
                                <th>LOẠI GIÀY</th>
                            
                                <th>GIÁ</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&id=" . $id_sp;
                                $xoasp = "index.php?act=xoasp&id=" . $id_sp;
                                $hinhpath = "../upload/" . $img_sp;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" . $hinhpath . "' height='80'>";
                                } else {
                                    $hinh = " no photo";
                                }
                                echo '
                                <tr>
                                <td>' . $id_sp . '</td>
                                <td>' . $name_sp . '</td>
                                <td>' . $hinh . '</td>
                                <td><textarea readonly rows="4" class="form-control">' . $mota_sp . '</textarea></td>
                                <td>' . $id_dm . '</td>
                                
                            
                                <td>' . $price_sp . '</td>
                                <td>
                                    <a href="' . $suasp . '" class="btn btn-primary btn-sm">Sửa</a>
                                    <a href="' . $xoasp . '" class="btn btn-danger btn-sm">Xóa</a>
                                </td>
                            </tr>
                            ';
                         
                        }
                        ?>
                      
                    </tbody>
                </table>
            </div>
            <div class="col-12 mb-3">

                <a href="index.php?act=addsp" class="btn btn-primary">Nhập thêm</a>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>