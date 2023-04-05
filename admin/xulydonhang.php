<?php
include('config/config.php');
if(isset($_GET['code'])){
    $code_cart = $_GET['code'];
    $sql_update ="UPDATE tbl_giohang SET tinhtrang=0 WHERE ma='".$code_cart."'";
    $query = mysqli_query($mysqli,$sql_update);
    header('Location:donhang.php');
} else{

    $id=$_GET['id_giohang'];
    $sql_xoa = "DELETE FROM tbl_giohang WHERE id_giohang='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('Location:donhang.php');
}
?>