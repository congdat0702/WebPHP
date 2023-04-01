<?php
include "./header.php";
include "./menu.php";
?>
<div class="category-1">
    <div class="auth-froms">               
    <div class="auth-fromse">
        <div class="auth-fromse-1">
            <p>Đăng Ký Tài Khoản</p>
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
                    <p>Họ</p>
                    <input type="text" name="ho" class="auth-fromse2__input-1" placeholder="Nhập họ của bạn ...">
                </ul>
                <ul>
                    <p>Tên</p>
                    <input type="text" name="ten" class="auth-fromse2__input-2" placeholder="Nhập tên của bạn ...">
                </ul>
                <ul>
                   <p>Email</p>
                    <input type="email" name="email" class="auth-fromse2__input-3" placeholder="Nhập email của bạn ...">
                </ul>
                <ul>
                    <p>Mật Khẩu</p>
                    <input type="password" name="matkhau" class="auth-fromse2__input-4" placeholder="Nhập mật khẩu của bạn ...">
                </ul>
                <div class="auth-fromse-2-submit">
                    <button name="dangky" type='submit'>
                    Đăng Kí
                    </button>
                   
                </div>
            </div>
        </form>
        <div class="auth-fromse-3">
           <a href="">Trở về</a>
        </div>
</div>
<?php


include "./footer.php";

include "./footer.php";

?>