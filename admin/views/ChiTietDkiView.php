<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <input onclick="history.go(-1);" type="button" value="Back" class="btn btn-danger">
    </div>    
    <div class="panel panel-primary">
        <div class="panel-heading">Orders detail</div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <td><?php echo $data->HoTen; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Ngày sinh</th>
                    <td><?php echo $data->NgaySinh; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Địa chỉ</th>
                    <td><?php echo $data->DiaChi; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Điện thoại</th>
                    <td><?php echo $data->SDT; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Số CMND</th>
                    <td><?php echo $data->CMND; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Số BHYT</th>
                    <td><?php echo $data->BHYT; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Thời gian tiêm</th>
                    <td><?php echo $data->TgTiem; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Nơi tiêm</th>
                    <td><?php echo $data->NoiTiem; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Nhóm ưu tiên</th>
                    <td><?php echo $data->NhomUuTien; ?></td>
                </tr>           
        </div>
    </div>
</div>