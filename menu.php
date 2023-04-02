<section class="top">
    <div class="container">
        <div class="row">
            <div class="top-logo">
                <a href="index.php"><img src="./img/1.jpg" alt=""></a>
            </div>
            <div class="top-menu-items">
                <ul class="dropdown"> 
                    <li class="dropbtn"><a href="./page/sanpham.php">Sản Phẩm</a>   
                        <ul class="top-menu-item">
                            <div class="dropdown-content">
                                <?php while($row = mysqli_fetch_array($query_lietke_menu)) { ?>
                                    <li><a href="./page/sanpham.php"><?php echo $row['ten_menu'] ?></a></li>
                                <?php } ?>  
                            </div>
                        </ul>
                    </li>
                    <li><a href="page/tintuc.php">Tin tức</a></li>
                    <li><a href="page/gioithieu.php">Giới Thiệu</a></li>
                    <li><a href="page/giohang.php">Giỏ Hàng</a></li>
                </ul>
            </div>
            <div class="top-menu-icons">
                <ul>
                    <li>
                        <form action="page/timkiem.php" method="POST">
                            <input type="text" placeholder="Nhập thông tin cần tìm" name="tukhoa">
                            <button name="timkiem" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            <?php if(isset($_SESSION['email'])){ ?>
                <div class="top-menu-login">
                    <ul>
                        <li><a href=""><?php echo $_SESSION['ho'] ?> <?php echo $_SESSION['ten'] ?></a></li>
                        <li><span>|</span></li>
                        <li><a href="page/logout.php">Đăng Xuất</a></li>
                    </ul>
                </div>
            <?php } else { ?>
                <div class="top-menu-login">
                    <ul>
                        <li><a href="page/dangky.php">Đăng Ký</a></li>
                        <li><span>|</span></li>
                        <li><a href="page/dangnhap.php">Đăng Nhập</a></li>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
