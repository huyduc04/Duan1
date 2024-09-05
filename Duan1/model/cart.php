<?php
    function viewcart($del)
    {
        if($del==1) {
            $xoasp_th ='<th>Thao Tác</th>';
            $xoasp_td2='<td></td>';
        } else{
                $xoasp_th='';
                $xoasp_td2='';
            }
        echo '
        <tr>
        <th>Hình</th>
        <th>Sản Phẩm</th>
        <th>Đơn Giá</th>
        <th>Số Lượng</th>
        <th>Size</th>
        <th>Thành Tiền</th>
        '.$xoasp_th.'
    
    </tr>
        ';
        $tong = 0;
        $i = 0;
        global $img_path;
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = $img_path.$cart[2];
            $ttien = $cart[3] * $cart[4];
            $tong += $ttien;
            if($del==1) {
            $xoasp_td = ' <td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a> </td>';
        } else{
                $xoasp_td='';
            }
            echo '
           
    
            <tr>
         
            <td><img src="' . $hinh . '" alt="" height="100px"></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            <td>' . $cart[6] . '</td>
            <td>' . $ttien . '</td>
            ' . $xoasp_td . '
        </tr>
            ';
            $i += 1;
        }
        echo '
        <tr>
     
     
        <td colspan="4">Tổng đơn hàng</td>
        <td>' . $tong . '</td>
        '.$xoasp_td2.'
      
    </tr>
        ';
    }


    function bill_chi_tiet($listbill)
{
    $tong = 0;
    $i = 0;
    global $img_path;
   
    echo '
    <tr>
    <th>Hình</th>
    <th>Sản Phẩm</th>
    <th>Đơn Giá</th>
    <th>Số Lượng</th>
    <th>Size</th>
    <th>Thành Tiền</th>
  

</tr>
    ';

    foreach ($listbill as $cart) {
        $hinh = $img_path.$cart['img'];
        $tong += $cart['thanhtien'];
        //echo "<pre>";
     //var_dump($cart);
        echo '
       

        <tr>
     
        <td><img src="' . $hinh . '" alt="" height="80px"></td>
        <td>' . $cart['name'] . '</td>
        <td>' . $cart['price'] . '</td>
        <td>' . $cart['soluong'] . '</td>
        <td>' . $cart['size'] . '</td>
        <td>' . $cart['thanhtien'] . '</td>
       
      
    </tr>
        ';
        $i += 1;
    }
    echo '
    <tr>
 
 
    <td colspan="4">Tổng đơn hàng</td>
    <td>' . $tong . '</td>

  
</tr>
    ';
}




function tongdonhang() {
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
      
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
      

}
return $tong;
}


function insert_bill($iduser,$name,$email,$address,$tel,$pttt,$ngaydathang,$tongdonhang) {
    $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser,','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill,$size) {
    $sql="insert into cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill,size) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill','$size')";
    return pdo_execute($sql);
}

function loadone_bill($id) {
    $sql="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill) {
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return $bill;
}
    

function loadall_cart_count($idbill) {
    $sql="select * from cart where idbill=".$idbill;
    $bill=pdo_query($sql);
    return sizeof($bill);
}

    
    function loadall_thongke() {
        $sql="select danhmuc.id_dm as madm,danhmuc.name_dm as tendm, count(sanpham.id_sp) as countsp, min(sanpham.price_sp) as minprice, max(sanpham.price_sp) as maxprice, avg(sanpham.price_sp) as avgprice";
        $sql.=" from sanpham left join danhmuc on danhmuc.id_dm=sanpham.id_dm";
        $sql.=" group by danhmuc.id_dm order by danhmuc.id_dm desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }

    function loadall_bill($iduser) {

        $sql="select * from bill where 1";
        if($iduser>0) $sql.=" AND iduser=".$iduser;

        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }


    function get_ttdh($n) {
        switch ($n){
            case '0':
                $tt="Đơn hàng mới";
                break;

            case '1':
                $tt="Đang xử lý";
                break;

            case '2':
                $tt="Đang giao hàng";
                break;

            case '3':
                $tt="Hoàn tất";
                break;



            default: 
                $tt="Đơn hàng mới";

                break;
        }
        return $tt;
    }
    function get_pttt($n) {
        switch ($n){
            case '1':
                $tt="Trả tiền khi nhận hàng";
                break;

            case '2':
                $tt="Thanh toán VNPAY";
                break;

          



            default: 
                $tt="Đơn hàng mới";

                break;
        }
        return $tt;
    }


    function delete_bill($id) {
        $sql="delete from bill where id=".$id;
        pdo_execute($sql);
    }


    function update_bill($id,$status) {
        $sql="update bill set bill_status='".$status."' where id=".$id;
        pdo_execute($sql);
    }
?>