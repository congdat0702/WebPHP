<?php
include "./header.php";
include "./menu.php";
?>
<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_menu WHERE tbl_sanpham.id_menu=tbl_menu.id_menu AND tbl_sanpham.ten_sanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>

 <!-- -SLlDER----->

    <!-- --------------------------Cartegory -->
    <section class="cartegory">
        <div class="container">
            <div class="cartegory-top row">
                <h3><a href="../index.php">Trang chủ</a></h3> <span>⟶ </span> <h3><a href="./sanpham.php">Sản Phẩm</a></h3><span>⟶ </span> <h3><?php echo $_POST['tukhoa']; ?></a></h3>
            </div>
        </div>
        <div class="container"> 
            <div class="row">
                
            <?php 
            include "menu_left.php";
            ?>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p>Các Sản Phẩm</p>
                    </div>
                    
                     <div class="cartegory-right-content row">
                     <?php
					while($row_pro = mysqli_fetch_array($query_pro)){ 
					?>
                        <div class="cartegory-right-content-item">
                           <a href="chitiet.php?id=<?php echo $row_pro['id_sanpham'] ?>"> <img src="../admin/upload/<?php echo $row_pro['anh_sanpham'] ?>" alt="">
                            <h1><?php echo $row_pro['ten_sanpham'] ?></h1>
                            <p><?php echo number_format($row_pro['gia_sanpham'],0,',','.') ?><sup>đ</sup></p>
                            </a>
                        </div>
                        <?php
					} 
					?>
                </div>
                    
            </div>
        </div>
    </section>
    <?php

include "../footer.php";
?>