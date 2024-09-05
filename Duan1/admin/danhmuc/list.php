<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý loại hàng hóa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* Add your custom styles here, if needed */
    </style>
</head>

<body>

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="mt-4">QUẢN LÝ LOẠI HÀNG HÓA</h1>
                    <table class="table">
                        <thead>
                            <tr>
                                
                                <th>MÃ LOẠI</th>
                                <th>TÊN LOẠI</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                $suadm = "index.php?act=suadm&id_dm=" . $id_dm;
                                $xoadm = "index.php?act=xoadm&id_dm=" . $id_dm;
                                echo '
                                <tr>

                                    <td>' . $id_dm . '</td>
                                    <td>' . $name_dm . '</td>
                                    <td>
                                        <a href="' . $suadm . '" class="btn btn-primary">Sửa</a>
                                        <a href="' . $xoadm . '" class="btn btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            ';
                            } ?>
                        </tbody>
                    </table>
                    <div class="btn-group">
  
                        <a href="index.php?act=addm" class="btn btn-success">Nhập thêm</a>
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