<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
  <link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
  <link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
  <link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
  <link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
  <link rel="license" href="https://colorlib.com/etc/regform/colorlib-regform-5/vendor/mdi-font/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="https://colorlib.com/etc/regform/colorlib-regform-5/vendor/font-awesome-4.7/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/regform/colorlib-regform-5/vendor/datepicker/daterangepicker.css">
  <link rel="license" href="https://colorlib.com/etc/regform/colorlib-regform-5/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/regform/colorlib-regform-5/css/main.css">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">PMMNM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Trang chủ</a></li>
      <li><a href="index.php?controller=DkiTiem&action=checkout">Đăng ký tiêm</a></li>
      <li>
        <?php if(isset($_SESSION["nguoidung"]) == false): ?>
        <a href="index.php?controller=account&action=login">Đăng nhập</a>&nbsp; &nbsp;
        <?php else: ?>
          <a href="index.php?controller=account&action=logout">Đăng xuất</a>
        <?php endif; ?>
      </li>
      
    </ul>
  </div>
</nav>
  
<div class="container">
  <!-- main -->
    <?php echo $this->view; ?> 
  <!-- end main -->
</div>

</body>
</html>
