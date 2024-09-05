<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        .page-wrapper {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 20px;
        }

        .frmtitle {
            margin-bottom: 20px;
        }

        .frmtitle h1 {
            font-size: 2.5rem;
            color: #333;
        }

        .frmcontent {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            overflow: auto;
        }

        .frmdsloai table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .frmdsloai th,
        .frmdsloai td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        .frmdsloai th {
            background-color: #343a40;
            color: #fff;
        }

        .frmdsloai tbody tr:hover {
            background-color: #f8f9fa;
        }

        .frmdsloai input[type="button"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .frmdsloai input[type="button"]:hover {
            background-color: #cc0000;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="row mb-3">
                    <h1 class="display-4">DANH SÁCH ĐƠN HÀNG</h1>
                </div>

                <div class="row frmcontent">
                    <div class="row mb-3 frmdsloai">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>MÃ ĐƠN HÀNG</th>
                                    <th>KHÁCH HÀNG</th>
                                    <th>SỐ LƯỢNG ĐƠN HÀNG</th>
                                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                                    <th>NGÀY ĐẶT HÀNG</th>
                                    <th>THAO TÁC</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listbill as $bill) {
                                    extract($bill);
                                    $xoabill = "index.php?act=xoabill&id=" . $id;
                                    $suabill = "index.php?act=suabill&id=" . $id;
                                    $kh = $bill["bill_name"] . '
                                    <br>' . $bill["bill_email"] . '
                                    <br>' . $bill["bill_address"] . '
                                    <br>' . $bill["bill_tel"];
                                    $ttdh = get_ttdh($bill["bill_status"]);
                                    $countsp = loadall_cart_count($bill["id"]);
                                    echo '<tr>
                                        <td>HTD2004' . $bill['id'] . '</td>
                                        <td>' . $kh . '</td>
                                        <td>' . $countsp . '</td>
                                        <td><strong>' . $bill["total"] . '</strong>VNĐ</td>
                                        <td>' . $ttdh . '</td>
                                        <td>' . $bill["ngaydathang"] . '</td>
                                        <td>
                                            <a href="' . $suabill . '" class="btn btn-primary btn-sm">Sửa</a>
                                            <a href="' . $xoabill . '" class="btn btn-danger btn-sm">Xóa</a>
                                        </td>
                                    </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>