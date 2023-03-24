<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin.css">
    <title>Document</title>
</head>
<body>
 <div class="login_form">
        
<form action="" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
   
    <hr>
    <label for="email"><b>User</b></label>
    <input type="text" placeholder="Nhập username" name="username" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Nhập Password" name="password" required>
    <div class="clearfix">
      <button name="dangnhap" type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
 </div>
</body>
</html>