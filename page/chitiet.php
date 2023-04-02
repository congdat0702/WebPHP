<?php
include "./header.php";
include "./menu.php";
?>
<?php
	$sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_menu WHERE tbl_sanpham.id_menu=tbl_menu.id_menu AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<section class="product">
        <div class="container">
            <div class="product-top row">            </div>
            <form action="themgiohang.php?id_sanpham=<?php echo $row_chitiet['id_sanpham'] ?>" method="POST" enctype="multipart/form-data">
            
            <div class="product-content row">
                <div class="product-content-left row">
                    <div class="product-content-left-big-img">
                        <img src="../admin/upload/<?php echo $row_chitiet['anh_sanpham'] ?>" alt="">
                    </div>  
                </div>
                
                <div class="product-content-right">
                    <div class="product-content-right-product-name">
                        <h1><?php echo $row_chitiet['ten_sanpham'] ?></h1>
                    </div>
                    <div class="product-content-right-product-price">
                        <p><?php echo number_format($row_chitiet['gia_sanpham'],0,',','.') ?><sup>đ</sup></p>
                        
                    </div>
                  
                    
                    <div class="quantity">
                        <p style="font-weight: bold;">Số lượng hiện có: <?php echo $row_chitiet['soluong'] ?></p>
                        
                    </div>
                    <div class="product-content-right-product-button">
                        <button name="themgiohang"  type="submit"><i class="fas fa-shopping-cart"></i> <p>ĐẶT MUA</p></button>
                    </div>
                    <div class="product-content-right-product-icon">
                        <div class="product-content-right-product-icon-item">
                            <i class="fas fa-phone-alt"></i> <p>Hotline : 0912367898</p><br>
                        </div>
                    </div>  
                    </div>
                </div>

            </div>
    </form>
        </div>

    </section>
    <?php
    }
    ?>
    <?php

include "../footer.php";
?>