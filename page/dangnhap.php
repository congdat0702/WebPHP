
<?php
include "./header.php";
include "./menu.php";
?>
<div class="category-2">
        <div class="auth-from-1">
            <p>
                Đăng nhập
                </p>
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
        <div class="auth-froms-1">
            <div class="auth-froms-a">

                <form action="" method="post">
                    <div class="auth-froms-a-1">
                        <li>Bạn đã là khách hàng</li>
                        <p></p>
                         <ul>
                             <p>Email</p>
                             <input type="email" name="email" class="auth-froms-a-1__input-1" placeholder="Nhập email của bạn ...">
                         </ul>
                         <ul>
                             <p>Mật Khẩu</p>
                             <input type="password" name="matkhau" class="auth-froms-a-1__input-2" placeholder="nhập mật khẩu của bạn ...">
                         </ul>
                         <ul class="auth-froms-a-1-submit">
                           
                            <button name="dangnhap" type="submit">Đăng nhập</button>
                         </ul>
                         <a class="auth-froms-a-1-chu2" href="">Quên mật khẩu</a>
                         
                     </div>
                </form>
                     

            </div>
            <div class="auth-froms-b">
                <div class="auth-froms-b-1">
                    <p>Bạn là khách hàng mới</p>
                </div>
                <div class="auth-froms-b-2">
                    <p>Tạo một tài khoản chỉ với hai thông tin và bạn sẽ có thể xử lý đơn đặt hàng của mình nhanh hơn và tìm hiểu về các xu hướng và chương trình khuyến mãi mới nhất qua email!</p>
                    <ul class="auth-froms-b-2-chu1">
                        <a href="dangky.php">Đăng kí ngay</a>
                     </ul>  
                    <p>Đăng nhập hoặc tạo tài khoản với</p> 
                    <ul class="auth-froms-b-2-chu2">
                        <a href="">Facebook</a>
                     </ul> 
                     <ul class="auth-froms-b-2-chu3">
                        <a href="">Google</a>
                     </ul> 
                </div>

            </div>
        </div>
    </div> 
    <?php

include "../footer.php";
?>