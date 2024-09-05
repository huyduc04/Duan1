<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body,
        h1,
        h2,
        h3,
        p,
        table {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            /* Use a common font for better compatibility */
            background-color: #f4f4f4;
            /* Set a light background color */
            color: #333;
            /* Set default text color */
        }

        .page-wrapper {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            /* Set a white background for the page */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Add a subtle box shadow */
            border-radius: 8px;
            /* Add a rounded border */
            padding: 20px;
        }

        .container-fluid {
            width: 100%;
        }

        .frmtitle {
            margin-bottom: 20px;
        }

        .frmtitle h1 {
            font-size: 24px;
            color: #333;
        }

        .frmcontent {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            /* Add a rounded border to the form content */
            overflow: auto;
            /* Add overflow to prevent table from overflowing */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            /* Increase padding for better spacing */
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            /* Add a light background color to table headers */
        }

        input[type="button"] {
            background-color: #ff0000;
            color: #fff;
            padding: 8px 16px;
            /* Adjust button padding for better appearance */
            cursor: pointer;
            border: none;
            border-radius: 4px;
            /* Add a slight border radius to buttons */
        }

        input[type="button"]:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row frmtitle">
                <h1>DANH SÁCH BÌNH LUẬN</h1>
            </div>
            <div class="">
                <form action="#" method="post">
                    <div class="row mb10 frmsloai">
                        <table>
                            <tr>
                               
                                <th>ID</th>
                                <th>NỘI DUNG</th>
                                <th>ID KHÁCH HÀNG</th>
                                <th>ID SẢN PHẨM</th><th>NGÀY BÌNH LUẬN</th>
                                <th>THAO TÁC</th>
                            
                            </tr>

                            <?php foreach ($listbinhluan as $binhluan) {
                                extract($binhluan);
                                $xoabl = "index.php?act=xoabl&id=" . $id_bl;
                                echo '
                                <tr>
                                   
                                    <td>' . $id_bl . '</td>
                                    <td>' . $noidung_bl . '</td>
                                    <td>' . $id_user . '</td>
                                    <td>' . $id_sp . '</td>
                                    <td>' . $date_bl . '</td>
                                    <td><a href="' . $xoabl . '"> <input type="button" value="Xóa"> </a></td>
                                </tr>
                                ';
                            }

                            ?>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>