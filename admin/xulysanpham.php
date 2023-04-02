
<?php
include('./config/config.php');

$tensanpham = $_POST['ten_sanpham'];
$giasp = $_POST['gia_sanpham'];
$soluong = $_POST['soluong'];
$hinhanh = $_FILES['anh_sanpham']['name'];
$hinhanh_tmp = $_FILES['anh_sanpham']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$danhmuc = $_POST['menu'];
if(isset($_POST['them'])){
	$sql_them = "INSERT INTO tbl_sanpham(ten_sanpham,gia_sanpham,soluong,anh_sanpham,id_menu) VALUE('".$tensanpham."','".$giasp."','".$soluong."','".$hinhanh."','".$danhmuc."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
	header('Location:quanlysanpham.php');
}elseif(isset($_POST['sua'])){
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
		
		$sql_update = "UPDATE tbl_sanpham SET ten_sanpham='".$tensanpham."',gia_sanpham='".$giasp."',soluong='".$soluong."',anh_sanpham='".$hinhanh."',id_menu='".$danhmuc."' WHERE id_sanpham='$_GET[id_sanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[id_sanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['anh_sanpham']);
		}

	}else{
		$sql_update = "UPDATE tbl_sanpham SET ten_sanpham='".$tensanpham."',gia_sanpham='".$giasp."',soluong='".$soluong."',anh_sanpham='".$hinhanh."',id_menu='".$danhmuc."' WHERE id_sanpham='$_GET[id_sanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
    header('Location:quanlysanpham.php');
}else{
	$id=$_GET['id_sanpham'];
	$sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('upload/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:quanlysanpham.php');
}

?>