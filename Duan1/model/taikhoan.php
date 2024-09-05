<?php
     function insert_taikhoan($user,$email,$pass) {
        $sql="insert into user(ten_user,gmail,matkhau) values('$user','$email','$pass')";
        pdo_execute($sql);
    }

    function checkuser($user,$pass) {
        $sql="select * from user where ten_user='".$user."' AND matkhau='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id,$user,$pass,$email,$address,$tel) {
       
            $sql="update user set ten_user='".$user."',matkhau='".$pass."',gmail='".$email."',diachi='".$address."',sdt='".$tel."' where id_user=".$id;

        pdo_execute($sql);
    }

    function checkemail($email) {
        $sql="select * from user where gmail='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function loadall_taikhoan() {
        $sql="select * from user order by id_user desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function delete_taikhoan($id) {
        $sql="delete from user where id_user=".$id;
        pdo_execute($sql);
    }



    function loadone_taikhoan($id) {
        $sql="select * from user where id_user=".$id;
        $taikhoan=pdo_query_one($sql);
        return $taikhoan;
    }
    function update_taikhoan_role($id_user,$role) {
        $sql="update user set role='".$role."' where id_user=".$id_user;
        pdo_execute($sql);
    }
?>