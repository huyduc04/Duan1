<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/taikhoan.php";

$idpro = $_REQUEST['idpro'];
$dsbl = loadall_binhluan($idpro);

date_default_timezone_set('Asia/Ho_Chi_Minh');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chức năng bình luận</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }

        .row {
            margin-bottom: 20px;
        }

        .boxtitle {
            font-size: 24px;
            font-weight: bold;
            background-color: #343a40;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .boxcontent2 {
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .binhluan {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .binhluan table,
        .binhluan table th,
        .binhluan table td {
            border: 1px solid #ced4da;
        }

        .binhluan th,
        .binhluan td {
            padding: 10px;
            text-align: left;
        }

        .binhluan th:nth-child(1),
        .binhluan td:nth-child(1) {
            width: 20%;
        }

        .binhluan th:nth-child(2),
        .binhluan td:nth-child(2) {
            width: 50%;
        }

        .binhluan th:nth-child(3),
        .binhluan td:nth-child(3) {
            width: 30%;
        }

        .binhluanform {
            margin-top: 20px;
            text-align: center;
        }

        .binhluanform input[type="text"] {
            width: 60%;
            padding: 10px;
            margin-right: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
        }

        .binhluanform input[type="submit"] {
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .binhluanform span {
            font-size: 14px;
            color: red;
            display: block;
            margin-top: 5px;
        }
    </style>
</head>

<body>

    <div class="row mb">
        <div class="boxtitle">BÌNH LUẬN</div>
        <div class="boxcontent2 binhluan">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID Khách hàng</th>
                        <th>Nội dung bình luận</th>
                        <th>Ngày bình luận</th>
                    </tr>
                </thead>
               
                <?php
                foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr>';echo '<td>' .$id_user. '</td>';
                    echo '<td><textarea name="" id="" readonly cols="100" rows="3">' . $noidung_bl . '</textarea></td>';
                    echo '<td>' . $date_bl . '</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>

        <div class="boxfooter binhluanform">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <?php
                if (isset($_SESSION['user'])) {
                    extract($_SESSION['user']);
                ?>
                    <input type="text" name="noidung" placeholder="Nhập bình luận...">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                <?php
                } else {
                    echo '<span style="color: red;">Vui lòng đăng nhập để bình luận về sản phẩm này!</span>';
                }
                ?>
            </form>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noidung = $_POST['noidung'];
            $idpro = $_POST['idpro'];
            $iduser = $_SESSION['user']['id_user'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noidung, $iduser, $idpro, $ngaybinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>
</body>

</html>