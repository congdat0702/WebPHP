<?php
include "menu.php";

?> 
<?php
$code = $_GET['code'];
$sql_lietke_dh = "SELECT * FROM tbl_chitietgiohang,tbl_sanpham WHERE tbl_chitietgiohang.id_sanpham=tbl_sanpham.id_sanpham AND tbl_chitietgiohang.ma='".$code."' ORDER BY tbl_chitietgiohang.ma DESC";
$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<div class="main_add">
            
            <h3>Đơn Hàng</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Tên Thực Đơn</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>                      
                    <th>Thành Tiền</th>
                    
                </tr>
                <?php
                    $i = 0;
                     $tongtien = 0;
                     while($row = mysqli_fetch_array($query_lietke_dh)){
                      $i++;
                      $thanhtien = $row['gia_sanpham']*$row['soluongmua'];
                      $tongtien += $thanhtien ;
                ?>
                <tr>
                    <td name="ID"><?php echo $i ?></td>
                    <td name="Mã Đơn Hàng"><?php echo $row['ma'] ?></td>
                    <td name="Tên Thực Đơn"><?php echo $row['ten_sanpham'] ?></td>            
                    <td name="Số Lượng"><?php echo $row['soluongmua'] ?></td>  
                    <td name="Đơn Giá"><?php echo number_format($row['gia_sanpham'],0,',','.') ?><sup style="color: red;">đ</sup></td>                         
                    <td name="Thành Tiền"><?php echo number_format($thanhtien,0,',','.') ?><sup style="color: red;">đ</sup></td>
                </tr>
                <?php
                        }
                ?>
                <tr>
                      <td colspan="6" name="Tổng Tiền">
                      <p>Tổng Tiền : <?php echo number_format($tongtien,0,',','.') ?><sup style="color: red;">đ</sup></p>
                           
                       </td>
                </tr> 
            </table>
            <div class = "xemdonhang">
            <button><a href="donhang.php">Quay Lại</a></button>
            </div>
        </div>
