<?php
 session_start();
 if(!isset($_SESSION['dangnhap'])){
 	header('Location:login.php');
 } 
?>
<div style="text-align:center;">
    <?php include "menu.php"; ?>
</div>


<div class="main_bot">
            <h1>Chào Mừng Bạn Đến Với Trang Admin</h1>
                <img src="image/datquang1.jpg" alt="Image description" width="600" height="500" style="display: block; margin: auto;">

        </div>
     