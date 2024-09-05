<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách tài khoản của admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .page-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container-fluid {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .frmtitle {
            margin-bottom: 20px;
        }

        .frmtitle h1 {
            color: #343a40;
        }

        .frmcontent {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dee2e6;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f8f9fa;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        input[type="checkbox"] {
            margin-top: 4px;
        }

        .btn-toolbar {
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 800px;
            margin-left: auto;
            margin-left: 0.5cm;
        }

        .table {
            margin-right: 0;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row frmtitle">
                <div class="col-md-12">
                    <h1>DANH SÁCH TÀI KHOẢN</h1>
                </div>
            </div>
            <div class="row frmcontent">
                <form action="#" method="post" class="form-container">
                    <div class="row mb-3 frmsloai">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>MÃ TK</th>
                                    <th>TÊN NGƯỜI DÙNG</th>
                                    <th>TÊN ĐĂNG NHẬP</th>
                                    <th>MẬT KHẨU</th>
                                    <th>EMAIL</th>
                                    <th>ĐỊA CHỈ</th>
                                    <th>ĐIỆN THOẠI</th>
                                    <th>VAI TRÒ</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listtaikhoan as $taikhoan) {extract($taikhoan);
                                    $xoatk = "index.php?act=xoatk&id_user=" . $id_user;
                                    $suatk = "index.php?act=suatk&id_user=" . $id_user;
                                    echo '
                                <tr>
                                <td>' . $id_user . '</td>
                                <td>' . $ten_user . '</td>
                                <td>' . $tentaikhoan . '</td>
                                <td>' . $matkhau . '</td>
                                <td>' . $gmail . '</td>
                                <td>' . $diachi . '</td>
                                <td>' . $sdt . '</td>
                                <td>' . $role . '</td>
                                <td>
                                    <a href="' . $suatk . '" class="btn btn-primary">Sửa</a>
                                    <a href="' . $xoatk . '" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                                ';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                  
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>