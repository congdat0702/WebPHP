<?php
include "./header.php";
include "./menu.php";
?>
<div class="category-1">
    <div class="auth-froms">               
    <div class="auth-fromse">
        <div class="auth-fromse-1">
            <p>Xác thực tài khoản</p>
        </div>
        <?php include 'xuly.php' ?>
        <?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
        <form action="" method="post">
            <div class="auth-fromse-2">
                <ul>
                    <p>Mã xác thực</p>
                    <input type="text" name="otp" class="auth-fromse2__input-1" placeholder="Nhập mã xác thực ...">
                </ul>
                <div class="auth-fromse-2-submit">
                    <button name="xacthuc" type='submit'>
                    Xác thực
                    </button>
                   
                </div>
            </div>
        </form>
        
</div>
<?php

include "../footer.php";
?>