<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../admin.css">
        <title>ADMIN</title>
    </head>
    <?php
        if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
            unset($_SESSION['dangnhap']);
            header('Location:login.php');
        }
    ?>
    <?php
        include "config/config.php";
    ?>
    <body>
        <div class="main">
            <div class="main_top">
                <img src="./cap.png" alt="">
                <h1>Trang Admin</h1>
            </div>
            <div class="main_mid">
            <li><a href="index.php?dangxuat=1"> Đăng xuất:<?php if(isset($_SESSION['dangnhap'])){ echo $_SESSION['dangnhap'];} ?></a></li>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="quanlymenu.php">Quản Lý Menu</a></li>
                <li><a href="quanlysanpham.php">Quản Lý Sản Phẩm</a></li>
                <li><a href="donhang.php">Quản Lý Đơn Hàng</a></li>
                
            </div>