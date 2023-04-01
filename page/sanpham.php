<?php
include "../header.php";
include "../menu.php";
?>
<?php
	            $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_menu WHERE tbl_sanpham.id_menu=tbl_menu.id_menu ORDER BY id_sanpham DESC";
	            $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
            ?>
<!-- SLlDER--->

    <!-- --------------------------Cartegory -->
    <section class="cartegory">
        <div class="container">
            <div class="cartegory-top row">
                
            </div>
        </div>
        <div class="container"> 
            <div class="row">
            <?php 
            include "menu_left.php";
            ?>
                <div class="cartegory-right row">
                    <div class="cartegory-right-top-item">
                        <p>Tất Cả Sản Phẩm</p>
                    </div>
                    
                    
                     <div class="cartegory-right-content row">
                     <?php
					while($row_pro = mysqli_fetch_array($query_lietke_sp)){ 
					?>
                      

                        <div class="cartegory-right-content-item">
                            
                        <img src="../admin/upload/<?php echo $row_pro['anh_sanpham'] ?>" alt="">
                        <h1><?php echo $row_pro['ten_sanpham'] ?></h1>
                        <p><?php echo number_format($row_pro['gia_sanpham'],0,',','.') ?><sup>đ</sup></p>
                           <a href="chitiet.php?id=<?php echo $row_pro['id_sanpham'] ?>">
                            <button name="" type="submit">MUA HÀNG</button>
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