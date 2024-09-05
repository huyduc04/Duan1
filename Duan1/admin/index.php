<?php
   include "../model/pdo.php";
   include "../model/danhmuc.php";
   include "../model/sanpham.php";
   include "../model/taikhoan.php";
   include "../model/binhluan.php";
   include "../model/cart.php";
    include "header.php";
    include "boxleft.php";


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        // danh mục
        case 'addm':
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
            
            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)) {
                delete_danhmuc($_GET['id_dm']);
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadm':
            if(isset($_GET['id_dm'])&&($_GET['id_dm']>0)) {
               $dm=loadone_danhmuc($_GET['id_dm']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id_dm'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhật thành công";
            }
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            // sản PHẨM

            case 'addsp':
                // kiểm tra người dùng có click vào nút add ko
                // echo "<pre>";
                // var_dump($_POST); 

                if(isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                    $iddm=$_POST['iddm'];
                    $sanpham_size=$_POST['sanpham_size'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]); 
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                       // echo "Sorry, there was an error uploading your file.";
                    }
                   // var_dump($sanpham_size); 
                     
                    $id_sp = insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                
                       
                    foreach ($sanpham_size as $size) {
                        
                        insert_size($id_sp,$size);
                    }


                    $thongbao="Thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/add.php";
                break;
            case 'listsp':
                if(isset($_POST['listok'])&&($_POST['listok'])) {
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];

                }else {
                    $kyw='';
                    $iddm=0;
                }
                //$listsize=loadall_size();
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;
            case 'xoasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                    delete_sanpham($_GET['id']);
                }
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)) {
                   $sanpham=loadone_sanpham($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "sanpham/update.php";
                break;
            case 'updatesp':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                    $iddm=$_POST['iddm'];
                    $id=$_POST['idsp'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]); 
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                       // echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                    } else {
                       // echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh); 
                    $thongbao="Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham("",0);
                include "sanpham/list.php";
               
                break;

                case 'taikhoan':
                    $listtaikhoan=loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;

                    case 'dsbl':
                        $listbinhluan=loadall_binhluan(0);
                        include "binhluan/list.php";
                        break;

                    case 'xoabl':
                        if(isset($_GET['id'])&&($_GET['id']>0)) {
                            delete_binhluan($_GET['id']);
                        }
                        $listbinhluan=loadall_binhluan(0);
                        include "binhluan/list.php";
                        break;


// tài khoản

                        case 'xoatk':
                            if(isset($_GET['id_user'])&&($_GET['id_user']>0)) {
                                delete_taikhoan($_GET['id_user']);
                            }
                            $listtaikhoan=loadall_taikhoan();
                            include "taikhoan/list.php";
                            break;
                            case 'suatk':
                                if(isset($_GET['id_user'])&&($_GET['id_user']>0)) {
                                   $taikhoan=loadone_taikhoan($_GET['id_user']);
                                }
                                include "taikhoan/update.php";
                                break;
                                case 'updatetaikhoan':
                                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                                        $role=$_POST['role'];
                                        $id_user=$_POST['id_user'];
                                        update_taikhoan_role($id_user,$role);
                                        $thongbao="Cập nhật thành công";
                                    }
                                    $listtaikhoan=loadall_taikhoan();
                                    include "taikhoan/list.php";
                                    break;





                                // thống kê

                    case 'listtk':
                        $listthongke=loadall_thongke();
                        include "thongke/list.php";
                        break;
                    case 'bieudotk':
                        $listthongke=loadall_thongke();
                        include "thongke/bieudotk.php";
                        break;

                       
                        case 'listbill':
                            
                            $listbill=loadall_bill(0);
                            include "bill/listbill.php";
                            break;

                            case 'xoabill':
                                if(isset($_GET['id'])&&($_GET['id']>0)) {
                                    delete_bill($_GET['id']);
                                }
                                $listbill=loadall_bill(0);
                                include "bill/listbill.php";
                                break;




                                case 'suabill':
                                    if(isset($_GET['id'])&&($_GET['id']>0)) {
                                       $bill=loadone_bill($_GET['id']);
                                    }
                                    include "bill/update.php";
                                    break;
                                case 'updatebill':
                                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                                        $status=$_POST['bill_status'];
                                        $id=$_POST['id'];
                                        update_bill($id,$status);
                                        $thongbao="Cập nhật thành công";
                                    }
                                    $listbill=loadall_bill(0);
                                    include "bill/listbill.php";
                                    break;







        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>
