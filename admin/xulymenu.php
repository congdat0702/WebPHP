<?php
include('./config/config.php');

$tenmenu = $_POST['ten_menu'];

if(isset($_POST['them'])){
	$sql_them = "INSERT INTO tbl_menu(ten_menu) VALUE('".$tenmenu."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:quanlymenu.php');
}elseif(isset($_POST['sua'])){
	//sua
	$sql_update = "UPDATE tbl_menu SET ten_menu='".$tenmenu."' WHERE id_menu='$_GET[id_menu]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:quanlymenu.php');
}else{

	$id=$_GET['id_menu'];
	$sql_xoa = "DELETE FROM tbl_menu WHERE id_menu='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:quanlymenu.php');
}

?>