<?php
	session_start();
	include('../admin/config/config.php');
	$email = $_SESSION['id'];
	$code_order = rand(0,9999);
	$insert_cart = "INSERT INTO tbl_giohang(email,ma,tinhtrang) VALUE('".$email."','".$code_order."',1)";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if($cart_query){
		//them gio hang chi tiet
		foreach($_SESSION['cart'] as $key => $value){
			$id_sanpham = $value['id'];
			$soluong = $value['soluong'];
			$insert_order_details = "INSERT INTO tbl_chitietgiohang(id_sanpham,ma,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
			mysqli_query($mysqli,$insert_order_details);
		}
	}
	unset($_SESSION['cart']);
	echo '<script>alert("Đặt Hàng Thành Công");</script>';
    echo '<script>window.location="../index.php"</script>';


?>