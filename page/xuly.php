<?php
include "sendmail.php";
if(isset($_POST['dangky'])){ // isset kiểm tra biến nào đó đã được khởi tạo hay chưa
                             // $ _POST được sử dụng để thu thập các giá trị từ một biểu mẫu
      $ho = $_POST['ho'];// thu thập các giá trị từ > họ
      $email = $_POST['email'];
      $pass = md5($_POST['matkhau']);
      $name = $_POST['ten'];
    $select_users = mysqli_query($mysqli, "SELECT * FROM `tbl_taikhoan` WHERE email = '$email'") or die('query failed'); // lựa chọn đến bảng tài khoản ở bảng mail, hoặc thoát, 
 
    if(mysqli_num_rows($select_users) > 0){  //kieem tra tk ton tai hay chua
       $message[] = 'Tài khoản đã tồn tại!';
    }else{
         $ma = rand(1111,9999); // rand sẽ cho ra một số nguyên ngẫu nhiên
         $xacminh = "Chưa xác minh";
          mysqli_query($mysqli, "INSERT INTO `tbl_taikhoan`( email, ho, ten , matkhau,ma,xacminh) VALUES('$email', '$ho', '$name', '$pass','$ma','$xacminh')") or die  ('query failed'); // chèn đến bảng tài khoản và nhập họ tên 
          $mail->setFrom('truongkp703052001@gmail.com', 'Web_thietbidientu');
          $mail->addAddress((String)$email);  // thêm địa chỉ mail
          $mail->isHTML(true); 
          $mail->Subject = 'Mã Xác Minh'; //subject là 1 loại có thể quan sát, cho phép đa hướng đến giá trị  và nhiều người quan sát
          $mail->Body = "Mã xác minh của bạn là : $ma";
          $mail->send(); //  gửi đến mail của bạn
          header('location:check.php');
       
    }
 
 }
        ?>
        <?php 

if(isset($_POST['dangnhap'])){

   $email = $_POST['email'];
   $pass = md5($_POST['matkhau']);
    
    $select_users = mysqli_query($mysqli, "SELECT * FROM `tbl_taikhoan` WHERE email = '$email' AND matkhau = '$pass'") or die('query failed');
 
    if(mysqli_num_rows($select_users) > 0){    // lấy dữ liệu từ người dùng
       $row = mysqli_fetch_assoc($select_users);
       $ma = 0;
       if($ma == $row['ma']){
         $_SESSION['ho'] = $row['ho']; // $_SESSION lưu trữ thông tin
         $_SESSION['ten'] = $row['ten'];
         $_SESSION['email'] = $row['email'];
         $_SESSION['id'] = $row['id'];
         header('location:../index.php');
       }else{
          echo "<script>alert('tài khoản chưa xác thực mời bạn xác thực')</script>";
         echo "<script>window.location='check.php'</script>";
       }
    }else{
       $message[] = 'Email hoạc mật khẩu không chính xác!';
    }
 
 }
 if(isset($_POST['xacthuc'])){
    $otp = $_POST['otp'];
   $xacminh = "Đã xác minh";
   $check = mysqli_query($mysqli,"SELECT * FROM tbl_taikhoan WHERE ma = '$otp'");
   $CountOtp = mysqli_num_rows($check);   // Checbox là một công cụ giúp lấy thông tin người dùng từ một tùy chọn riêng biệt thường dùng để xác nhận thông tin nào đó
   if($CountOtp > 0){
      mysqli_query($mysqli,"UPDATE tbl_taikhoan SET ma = 0, xacminh = '$xacminh' WHERE ma = '$otp'");
      header('location:dangnhap.php');

   }else{
      $message[] = 'Mã xác minh không chính xác!';
   }
 }
?>