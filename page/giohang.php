
<?php
include "./header.php";
include "./menu.php";
?>
<div class="category-1">
    <div class="auth-froms">               
    <div class="auth-fromse">
        <div class="auth-fromse-1">
            <p>Giỏ Hàng</p>
        </div>
        <div class="giohang">
            <table>
                <tr>
                    <th>Tên</th>
                    <th>Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Giá</th>
                    <th>Hủy</th>
                </tr>
                <?php
        if(isset($_SESSION['cart'])){
  	   
  	    $tongtien = 0;
  	    foreach($_SESSION['cart'] as $cart_item){
  		    $thanhtien = $cart_item['soluong']*$cart_item['gia_sanpham'];
  		    $tongtien+=$thanhtien;
  		   
    ?>
                <tr>
                    <td><?php echo $cart_item['ten_sanpham']; ?></td>
                    <td><img src="../admin/upload/<?php echo $cart_item['anh_sanpham']; ?>" alt="" width="150px">
                    
                    <td>
                        <a href="themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>
                        <?php echo $cart_item['soluong']; ?>
                        <a href="themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
                        
                    </td>
                    <td><?php echo number_format($cart_item['gia_sanpham'],0,',','.') ?><sup style="color:red">đ</sup></td>
                    <td><a class="huy_giohang" href="themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">X</a></td>
                </tr>
                <?php
          }
                ?>
                
                <tr>
                    <td colspan="5">
                        <p>Tổng Tiền : <?php echo number_format($tongtien,0,',','.') ?><sup style="color: red;">đ</sup></p>
                        
                         <?php
                                if(isset($_SESSION['email'])){
                            ?>
                             <button><a href="thanhtoan.php">Thanh Toán</a></button>
                               
                            <?php
                            }else{
                            ?>
                                <button><a href="dangnhap.php">Đăng Nhập</a></button>
                                
                            <?php
                                }
                            ?>
                    </td>
                </tr>
                <?php	
                            }else{ 
                        ?>
                <tr>
                    <td colspan="5">
                        <h2>Giỏ hàng trống</h2>
                    </td>
                </tr>
                <?php
                            }
                ?>
            </table>
        </div>
        
</div>
<?php

include "../footer.php";
?>