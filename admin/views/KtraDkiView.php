<?php 
	//load file layout.php
	$this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách đăng kí</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Họ tên</th>
                    <th style="width:150px;">SDT</th>
                    <th style="width: 70px;">Địa Chỉ</th>
                    <th style="width:20px;">Chi Tiết</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->HoTen ?></td>
                    <td><?php echo $rows->SDT ?></td>
                    <td ><?php echo $rows->DiaChi ?></td>
                    <td style="text-align: center;">
                        <a href="index.php?controller=KtraDki&action=chitiet&id=<?php echo $rows->id; ?>" class="label label-success">Chi tiết</a>
                     </td>
                </tr>
                <input type="hidden" value="<?php echo $rows->id; ?>" name="id">
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
        </div>
    </div>
</div>