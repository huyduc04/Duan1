
<?php
session_start();

include "model/pdo.php";

include "model/danhmuc.php";
include "model/sanpham.php";
include "model/cart.php";


include "view/header.php";
include "global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$dsdm = loadall_danhmuc();
$spnew = loadall_sanpham_home();
$spnew2 = loadall_sanpham_hot();
$top3 = loadall_sanpham_top3();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

            // Sản Phẩm

        case 'sanpham':

            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
            } else {
                $iddm = 0;
            }
            $dssp = loadall_sanpham($kyw, $iddm);
            $tendm = load_ten_dm($iddm);

            include "view/sanpham.php";

            break;
        case 'shop':


            include "view/shop.php";

            break;

        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $one_size =loadone_size($id);
                $sp_cung_loai = load_sanpham_cungloai($id);


                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }

            break;

            //Tài khoản

        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $size = $_POST['size_name'];
                $soluong =  $_POST['soluong'];
                $ttien = $soluong * $price;
                $spadd = [$id, $name, $img, $price, $soluong, $ttien,$size];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/giohang.php";
            break;


        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('Location: index.php?act=giohang');
            //include "view/cart/giohang.php";
            break;
        case 'giohang':
            include "view/cart/giohang.php";
            break;

        case 'bill':
            include "view/cart/bill.php";
            break;

        case 'blog':
            include "view/blog.php";
            break;
        case 'blog_detais':
            include "view/blog_detais.php";
            break;

        case 'billconfirm':

            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) $iduser = $_SESSION['user']['id_user'];
                else $id = 0;
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['redirect'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
                //tạo bill
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);

                // insert into cart: $session['mycart] & $idbill

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id_user'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4],$cart[5], $idbill, $cart[6]);
                }
                // xóa session cart

           


            if (isset($_POST['redirect'])) {
                $selectedValue = $_POST['redirect'];
            
                if ($selectedValue == '1') {
                   
                } elseif ($selectedValue) {
                    
                    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
                    $vnp_Returnurl = "http://localhost:81/shopquanao-temaplet/index.php?act=mybill";
                    $vnp_TmnCode = "0ZNDSXHK";//Mã website tại VNPAY 
                    $vnp_HashSecret = "BCRDXDPMCSTITKYOHXWFDSHBNAPUKJYE"; //Chuỗi bí mật
                    
                    $vnp_TxnRef = "HTD2004".rand(00,999) ; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
                    $vnp_OrderInfo = 'Nội dung thanh toán';
                    $vnp_OrderType = 'billpayment';
                    $vnp_Amount = $tongdonhang * 100;
                    $vnp_Locale = 'vn';
                    $vnp_BankCode = 'NCB';
                    $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //127.0.0.1
                    //Add Params of 2.0.1 Version
                    //$vnp_ExpireDate = $_POST['txtexpire'];
                    //Billing
                    // $vnp_Bill_Mobile = $_POST['txt_billing_mobile'];
                    // $vnp_Bill_Email = $_POST['txt_billing_email'];
                    // $fullName = trim($_POST['txt_billing_fullname']);
                    // if (isset($fullName) && trim($fullName) != '') {
                    //     $name = explode(' ', $fullName);
                    //     $vnp_Bill_FirstName = array_shift($name);
                    //     $vnp_Bill_LastName = array_pop($name);
                    // }
                    // $vnp_Bill_Address=$_POST['txt_inv_addr1'];
                    // $vnp_Bill_City=$_POST['txt_bill_city'];
                    // $vnp_Bill_Country=$_POST['txt_bill_country'];
                    // $vnp_Bill_State=$_POST['txt_bill_state'];
                    // // Invoice
                    // $vnp_Inv_Phone=$_POST['txt_inv_mobile'];
                    // $vnp_Inv_Email=$_POST['txt_inv_email'];
                    // $vnp_Inv_Customer=$_POST['txt_inv_customer'];
                    // $vnp_Inv_Address=$_POST['txt_inv_addr1'];
                    // $vnp_Inv_Company=$_POST['txt_inv_company'];
                    // $vnp_Inv_Taxcode=$_POST['txt_inv_taxcode'];
                    // $vnp_Inv_Type=$_POST['cbo_inv_type'];
                    $inputData = array(
                        "vnp_Version" => "2.1.0",
                        "vnp_TmnCode" => $vnp_TmnCode,
                        "vnp_Amount" => $vnp_Amount,
                        "vnp_Command" => "pay",
                        "vnp_CreateDate" => date('YmdHis'),
                        "vnp_CurrCode" => "VND",
                        "vnp_IpAddr" => $vnp_IpAddr,
                        "vnp_Locale" => $vnp_Locale,
                        "vnp_OrderInfo" => $vnp_OrderInfo,
                        "vnp_OrderType" => $vnp_OrderType,
                        "vnp_ReturnUrl" => $vnp_Returnurl,
                        "vnp_TxnRef" => $vnp_TxnRef
            
                        // "vnp_ExpireDate"=>$vnp_ExpireDate,
                        
                        // "vnp_Bill_Mobile"=>$vnp_Bill_Mobile,
                        // "vnp_Bill_Email"=>$vnp_Bill_Email,
                        // "vnp_Bill_FirstName"=>$vnp_Bill_FirstName,
                        // "vnp_Bill_LastName"=>$vnp_Bill_LastName,
                        // "vnp_Bill_Address"=>$vnp_Bill_Address,
                        // "vnp_Bill_City"=>$vnp_Bill_City,
                        // "vnp_Bill_Country"=>$vnp_Bill_Country,
                        // "vnp_Inv_Phone"=>$vnp_Inv_Phone,
                        // "vnp_Inv_Email"=>$vnp_Inv_Email,
                        // "vnp_Inv_Customer"=>$vnp_Inv_Customer,
                        // "vnp_Inv_Address"=>$vnp_Inv_Address,
                        // "vnp_Inv_Company"=>$vnp_Inv_Company,
                        // "vnp_Inv_Taxcode"=>$vnp_Inv_Taxcode,
                        // "vnp_Inv_Type"=>$vnp_Inv_Type
                    );
                    
                    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                        $inputData['vnp_BankCode'] = $vnp_BankCode;
                    }
                    // if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
                    //     $inputData['vnp_Bill_State'] = $vnp_Bill_State;
                    // }
                    
                    //var_dump($inputData);
                    ksort($inputData);
                    $query = "";
                    $i = 0;
                    $hashdata = "";
                    foreach ($inputData as $key => $value) {
                        if ($i == 1) {
                            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                        } else {
                            $hashdata .= urlencode($key) . "=" . urlencode($value);
                            $i = 1;
                        }
                        $query .= urlencode($key) . "=" . urlencode($value) . '&';
                    }
                    
                    $vnp_Url = $vnp_Url . "?" . $query;
                    if (isset($vnp_HashSecret)) {
                        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                    }
                    $returnData = array('code' => '00'
                        , 'message' => 'success'
                        , 'data' => $vnp_Url);
                        if (isset($_POST['redirect'])) {
                            header('Location: ' . $vnp_Url);
                            die();
                        } else {
                            echo json_encode($returnData);
                        }
                        // vui lòng tham khảo thêm tại code demo
                } else {
                    echo "Giá trị không hợp lệ";
                }
            }}




            $_SESSION['cart'] = [];
            $bill = loadone_bill($idbill);
            $billct = loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
 

            


        case 'mybill':
            $listbill = loadall_bill($_SESSION['user']['id_user']);
            include "view/cart/mybill.php";

            break;
        case 'contact':
   
            include "view/contact.php";

            break;





        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}


include "view/footer.php";
?>
