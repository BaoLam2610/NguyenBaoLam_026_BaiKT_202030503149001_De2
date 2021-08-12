<?php 
  //load LayoutTrangTrong.php
$this->layoutPath = "Layout.php";
?>
<form method="POST" action="index.php?controller=DkiTiem&action=dangky">
  <div class="form-row">
    <div class="name">Họ và tên</div>
    <div class="value">
      <div class="input-group-desc">
        <input class="input--style-5" type="text" name="HoTen" placeholder="họ và tên">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="name">Ngày sinh</div>
    <div class="value">
      <div class="input-group-desc">
        <input class="input--style-5" type="date" name="NgaySinh" placeholder="Ngày sinh">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="name">Số điện thoại</div>
    <div class="value">
      <div class="input-group-desc">
        <input class="input--style-5" type="text" name="SDT" placeholder="số điện thoại">
      </div>
    </div>
  </div>
  <div class="form-row m-b-55">
    <div class="name"></div>
    <div class="value">
      <div class="row row-space">
        <div class="col-2">
          <div class="input-group-desc">
            <input class="input--style-5" type="text" name="CMND" placeholder="số CMND" >
          </div>
        </div>
        <div class="col-2">
          <div class="input-group-desc">
            <input class="input--style-5" type="text" name="BHYT" placeholder="Số Thẻ BHYT">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="name">Địa chỉ</div>
    <div class="value">
      <div class="input-group-desc">
        <input class="input--style-5" type="text" name="DiaChi" placeholder="Địa chỉ">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="name">Thời gian tiêm</div>
    <div class="value">
      <div class="form-group">
        <select name="TgTiem"  style="height: 50px;" class="input--style-5"  class="form-control" >
          <?php foreach ($tgTiem as $value): ?>
            <option><?php echo $value->ThoiGian; ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row ">
    <div class="name">Nơi tiêm</div>
    <div class="value">
      <div class="form-group">
        <select name="NoiTiem"  style="height: 50px;" class="input--style-5"  class="form-control" >
          <?php foreach ($diaDiemTiem as $value): ?>
            <option><?php echo $value->DiaDiemTiem; ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>
  </div>
  <div class="form-row ">
    <div class="name">Nhóm ưu tiên</div>
    <div class="value">
      <div class="form-group">
        <select name="NhomUuTien" style="height: 50px;" class="input--style-5"  class="form-control" >
          <?php foreach ($nhomUuTien as $value): ?>
            <option><?php echo $value->DoiTuong; ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>
  </div>

</div>
<div class="form-row m-b-55">
  <div class="value">
    <div class="row row-space">
      <div class="col-12">
        <div class="input-group-desc">
          <button class="btn btn--radius-2 btn--red" type="submit">Register</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>