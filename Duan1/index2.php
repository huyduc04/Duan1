<?php 
 session_start();
 include "model/pdo.php";
include "model/taikhoan.php";


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
case 'dangky':
    if(isset($_POST['dangky'])&&($_POST['dangky'])){
        $email=$_POST['email'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        insert_taikhoan($user,$email,$pass);
        $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng!";
        header("Location: index2.php?act=dangnhap");

    }
    include "view/taikhoan/register.php";
    break;


    case 'dangnhap':
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
         
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $checkuser=checkuser($user,$pass);
            if(is_array($checkuser)) {
                $_SESSION['user']=$checkuser;
                // $thongbao="Bạn đã đăng nhập thành công!";
                header("Location: index.php");
            }else {
                $thongbao="Tài khoản không tồn tại. Vui lòng kiểm tra hoặc đăng ký!";
            }
        }
        include "view/taikhoan/login.php";
        break;

        case 'quenmk':
            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){            
                $email=$_POST['email'];   
                $checkemail=checkemail($email);
                if(is_array($checkemail)) {
                    $thongbao="Tên đăng nhập của bạn là: ".$checkemail['ten_user']."<br>";
                    $thongbao.=" Mật khẩu của bạn là: ".$checkemail['matkhau'];
                }else {
                    $thongbao="Email này không tồn tại!";
                }

            }
            include "view/taikhoan/quenmk.php";
            break;


            case 'capnhattk':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];
                    $thongbao="Cap nhat thanh cong";
                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header("Location: index2.php?act=capnhattk");
                    $thongbao="Cập nhật thành công";
                } 
                include "view/taikhoan/capnhattk.php";
                break;


        case 'thoat':
            session_unset();
            header("Location: index.php");
            break;
    
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


?>