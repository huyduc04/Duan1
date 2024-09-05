let dangKyThanhVien = document.getElementById('dangkyThanhVien');
let arrForm = ["password", "confirmPassword"];
function Validate_2() {
    let data = {};
    let kiemTra = false;
    for (let i = 0; i < arrForm.length; i++) {
        let thongTinNhap = document.getElementById(arrForm[i]);
        let thongBaoLoi = document.querySelector(".error-" + arrForm[i]);
        thongBaoLoi.innerHTML = "";
        

        let pass = document.getElementById('password');
        let repass = document.getElementById('confirmPassword');
        if (pass.value != repass.value) {
            document.querySelector(".error-repass").innerHTML = "Mật khẩu nhập lại không đúng";
            kiemTra = true;
        }

     
   


        data[arrForm[i]] = thongTinNhap.value;
    }
    if (!kiemTra) {
        return data;
    }
    return false;
}