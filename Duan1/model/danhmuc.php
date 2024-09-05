<?php 

    function insert_danhmuc($tenloai) {
        $sql="insert into danhmuc(name_dm) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id) {
        $sql="delete from danhmuc where id_dm=".$id;
        pdo_execute($sql);
    }

    function loadall_danhmuc() {
        $sql="select * from danhmuc order by id_dm desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
 

    function loadone_danhmuc($id) {
        $sql="select * from danhmuc where id_dm=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id,$tenloai) {
        $sql="update danhmuc set name_dm='".$tenloai."' where id_dm=".$id;
        pdo_execute($sql);
    }
?>