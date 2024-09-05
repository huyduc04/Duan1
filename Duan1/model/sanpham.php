<?php 

    function insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm) {
        $sql="insert into sanpham(name_sp,price_sp,img_sp,mota_sp,id_dm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        return pdo_execute_return_lastInsertId($sql);
    }


    function insert_size($id_sp,$size_name) {
        $sql="insert into size_giay(id_sp,size_name) values('$id_sp','$size_name')";
        return pdo_execute($sql);
    }



    function delete_sanpham($id) {
        $sql="delete from sanpham where id_sp=".$id;
        pdo_execute($sql);
    }

    function loadall_sanpham_top3() {
        $sql="select * from sanpham where 1 order by luotxem desc limit 0,3"; 
       
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home() {
        $sql="select * from sanpham where 1 order by id_sp desc limit 0,9"; 
       
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_hot() {
        $sql="select * from sanpham where 1 order by id_sp desc limit 0,8"; 
       
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
   

    function loadall_sanpham($kyw="",$iddm=0) {
        $sql="select * from sanpham where 1"; 
        if($kyw!="") {
            $sql.=" and name_sp like '%".$kyw."%'";
        }
        if($iddm>0) {
            $sql.=" and id_dm ='".$iddm."'";
        }
        $sql.=" order by id_sp desc";
        $listsanpham=pdo_query($sql);
        
        return $listsanpham;
    }

    function load_ten_dm($iddm) {
        if($iddm>0) {
            $sql="select * from danhmuc where id_dm=".$iddm;
            $dm=pdo_query_one($sql);
            extract($dm);
         
        }
    
    }
    function loadone_sanpham($id) {
        $sql="select * from sanpham where id_sp=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function loadone_size($id) {
        $sql="select * from size_giay where id_sp=".$id;
        $sp=pdo_query($sql);
        return $sp;
    }

    // function loadall_size() {
    //     $sql="select * from size_giay order by id_sp desc";
    //     $listsize=pdo_query($sql);
    //     return $listsize;
    // }

    function load_sanpham_cungloai($id) {
        $sql="select * from sanpham where id_sp <> ".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh) {
        if($hinh!="")
            $sql="update sanpham set id_dm='".$iddm."',name_sp='".$tensp."',price_sp='".$giasp."',mota_sp='".$mota."',img_sp='".$hinh."' where id_sp=".$id;
        else
            $sql="update sanpham set id_dm='".$iddm."',name_sp='".$tensp."',price_sp='".$giasp."',mota_sp='".$mota."' where id_sp=".$id;

        pdo_execute($sql);
    }
?>