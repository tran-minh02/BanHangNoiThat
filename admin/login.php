<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admin</title>
	<link rel="shortcut icon" type="image/png" href="modules/admin.png"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style-admin1.css">
	<link rel="stylesheet" href="fonts/themify-icons.css">

</head>
<body>
<!-- <div class="logo">
	<img src="../images/logo-1.png" alt="" class="img-logo">
</div>
<div class="slider">
	<img src="../images/vi.jpg" alt="" class="img-slider">
</div>
<div class="dangky-form">
	<form action="" autocomplete="off" method="POST" class="dangky">
	<h3>Đăng nhập Admin</h3>
	<input type="text" name="username" class="input" placeholder="Username">
	<input type="password" name="password" class="input" placeholder="Password">
	<input type="submit" name="dangnhap" value="Đăng nhập" class="btn">

	</form>

</div> -->
	<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"> <img src="modules/logo.svg" alt="" style="width:200px; margin-top:60px"></i>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form  style="width: 23rem;    margin-top: -400px;" action="" autocomplete="off" method="POST" class="dangky">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Đăng Nhập Admin</h3>

            <div class="form-outline mb-4">
              <input type="text" id="form2Example18" class="form-control form-control-lg" name="username">
              <label class="form-label" for="form2Example18">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="password">
              <label class="form-label" for="form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <input type="submit" name="dangnhap" value="Đăng nhập" class="btn">
            </div>
          </form>

        </div>

      </div>
      <div class="col-sm-5 px-0 d-none d-sm-block mt-3">
        <img style="width:50%" src="modules/logo1.jpg"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>




