<?php
		session_start();
        include('../admin/config/config.php');
	//them so luong
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_sanpham']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] + 1;
				if($cart_item['soluong']<=9){
					
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_sanpham']); //  Array lưu trữ các giá trị, dữ liệu liên quan
				}else{
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_thucdon']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:giohang.php');
	}
	//tru so luong
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){ // Foreach  duyệt các phần tử của mảng
			if($cart_item['id']!=$id){
				$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_sanpham']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] - 1;
				if($cart_item['soluong']>1){
					
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_sanpham']);
				}else{
					$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_sanpham']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:giohang.php');
	}
	//xoa san pham
	if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia_sanpham'=>$cart_item['gia_sanpham'],'anh_sanpham'=>$cart_item['anh_sanpham']);
			}

		$_SESSION['cart'] = $product;
		header('Location:giohang.php');
		}
	}
	//xoa tat ca
	// if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
	// 	unset($_SESSION['cart']);
	// 	header('Location:../../index.php?quanly=giohang');
	// }
	//them sanpham vao gio hang
	if(isset($_POST['themgiohang'])){
		//session_destroy();
		$id=$_GET['id_sanpham'];
		$soluong=1;
		$sql ="SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."'";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('ten_sanpham'=>$row['ten_sanpham'],
			'id'=>$id,'soluong'=>$soluong,
			'gia_sanpham'=>$row['gia_sanpham'],
			'anh_sanpham'=>$row['anh_sanpham']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],
						'id'=>$cart_item['id'],'soluong'=>$soluong+1,
						'gia_sanpham'=>$cart_item['gia_sanpham'],
						'anh_sanpham'=>$cart_item['anh_sanpham']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('ten_sanpham'=>$cart_item['ten_sanpham'],
						'id'=>$cart_item['id'],
						'soluong'=>$cart_item['soluong'],
						'gia_sanpham'=>$cart_item['gia_sanpham'],
						'anh_sanpham'=>$cart_item['anh_sanpham']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:giohang.php');
		
	}
	
	
	
?>