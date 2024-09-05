<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê danh sách theo loại</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .page-wrapper {
            margin: 20px;
        }

        .frmtitle {
            background-color: #d9534f;
            padding: 10px;
            text-align: center;
            color: #fff;
        }

        .frmcontent {
            margin-top: 20px;
        }

        .frmsloai table {
            width: 100%;
        }

        .frmsloai th,
        .frmsloai td {
            text-align: center;
            padding: 10px;
        }

        .frmsloai th {
            background-color: #5bc0de;
            color: #fff;
        }

        .frmsloai tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row frmtitle">
            <h1>THỐNG KÊ DANH SÁCH THEO LOẠI</h1>
        </div>
        <div class="row frmcontent">
            <div class="frmsloai">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>MÃ DANH MỤC</th>
                            <th>LOẠI HÀNG</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ CAO NHẤT</th>
                            <th>GIÁ THẤP NHẤT</th>
                            <th>GIÁ TRUNG BÌNH</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listthongke as $thongke) {
                            extract($thongke);

                            echo
                            '<tr>
                                    <td>' . $madm . '</td>
                                    <td>' . $tendm . '</td>
                                    <td>' . $countsp . '</td>
                                    <td>' . $maxprice . '</td>
                                    <td>' . $minprice . '</td>
                                    <td>' . $avgprice . '</td>
                                </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>