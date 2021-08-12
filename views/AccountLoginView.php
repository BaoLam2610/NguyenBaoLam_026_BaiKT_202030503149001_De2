<?php 
  //load LayoutTrangTrong.php
  $this->layoutPath = "Layout.php";
 ?>
<div class="template-customer">
          <h1>Đăng nhập tài khoản</h1>
          <?php if(isset($_GET["notify"])&&$_GET["notify"]=="success"): ?>
            <p style="color:red;">Đăng ký thành công</p>
          <?php else: ?>
            <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
          <?php endif; ?>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=loginPost">
                  <p class="title"><span>Đăng nhập tài khoản</span></p>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="Email" required="">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="MatKhau" required="">
                  </div>
                  <input type="submit" class="button" value="Đăng nhập">
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><span>Tạo tài khoản mới</span></p>
                <p>Đăng ký tài khoản để đăng ký tiêm chủng vaccine.</p>
                <a href="index.php?controller=account&action=register" class="button">Đăng ký</a> </div>
            </div>
          </div>
        </div>