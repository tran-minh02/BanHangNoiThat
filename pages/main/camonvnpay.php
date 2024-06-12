
<?php
        
    if(isset($_GET['vnp_Amount'])){
	include('admin/config/config.php');
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_order = $_SESSION['code_order'];
	$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',4)";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);
		}
	}
  unset($_SESSION['cart']);
}
?>

<hr >

<div class="container mt-5 mb-5">
	<h3 class="tieude mb-3 mt-5">Thanh toán VNPAY thành công. Cảm ơn bạn đã đặt hàng, chúng tôi sẽ gửi sản phẩm đến bạn trong thời gian sớm nhất.</h3>
	<hr>
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://file.hstatic.net/1000281824/file/1_6724198653724f4dbefef57864d3988c.jpg" class="d-block w-100" alt="1">
    </div>
    <div class="carousel-item">
      <img src="https://file.hstatic.net/1000281824/file/my_new_project_02_19040f3dc25b4ca3b5691edee57eda68.jpg" class="d-block w-100" alt="2">
    </div>
    <div class="carousel-item">
      <img src="https://file.hstatic.net/1000281824/file/13_7462c7eb9c7040c98c0cc776220d00e3.jpg" class="d-block w-100" alt="3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</div>


        
 