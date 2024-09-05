<?php
if (is_array($bill)) {
    extract($bill);
}
?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4">CẬP NHẬT ĐƠN HÀNG</h1>
                <form action="index.php?act=updatebill" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Mã ĐƠN HÀNG</label>
                        <div class="col-sm-10">
                            <!-- <input type="text" class="form-control" name="bill_status" value="<?php if (isset($bill_status) && ($bill_status != "")) echo $bill_status; ?>"> -->
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="bill_status" value="<?php if (isset($bill_status) && ($bill_status != "")) echo $bill_status; ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-success" name="capnhat" value="CẬP NHẬT">
                            <input type="reset" class="btn btn-secondary" value="NHẬP LẠI">
                            <a href="index.php?act=listbill" class="btn btn-primary">DANH SÁCH</a>
                        </div>
                    </div>
                    <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?>
                </form>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
    </footer>
</div>