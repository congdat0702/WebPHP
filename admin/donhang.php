<?php
include "menu.php";

?> 
<?php                                         
	$sql_lietke_dh = "SELECT * FROM tbl_giohang,tbl_taikhoan WHERE tbl_giohang.email=tbl_taikhoan.id ORDER BY tbl_giohang.id_giohang DESC"; // Sử dụng ORDER BY để xếp kết quả tra về theo một cột, nhiều cột với các tham số tăng dần ASC, giảm dần DESC.
	$query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<div class="main_add">
            
            <h3>Danh Sách Đơn Hàng</h3>
            <table>
                <tr>
                        <th>ID</th>
                        <th>Mã đơn hàng</th>
                        <th>Tên khách hàng</th>
                        <th>Email</th>
                        <th>Tình Trạng</th>                           
                        <th>Quản Lý</th>
                        <th>Xóa</th>
                    
                </tr>
                <?php
                        $i = 0;
                        while($row = mysqli_fetch_array($query_lietke_dh)){
  	                    $i++;
                    ?>
                <tr>
                <td><?php echo $i ?></td> 
                        <td><?php echo $row['ma'] ?></td>
                        <td> <?php echo $row['ho'] ?> <?php echo $row['ten'] ?></td>    
                                
                        <td><?php echo $row['email'] ?></td>  
                     
                       
                        <td>
                        <?php if($row['tinhtrang']==1){
    		                echo '<a href="xulydonhang.php?code='.$row['ma'].'">Cần Phê Duyệt</a>';
    	                    }else{
    		                echo 'Đã Duyệt';
    	                    }
    	                ?>
                        </td>                         
                        <td><a href="xemdonhang.php?code=<?php echo $row['ma'] ?>">Xem đơn hàng</a> </td>
                        <td><a href="xulydonhang.php?id_giohang=<?php echo $row['id_giohang'] ?>" onclick="return confirm('Bạn Có Chắc Chắn Muốn Xóa Không ?');">Xóa</a></td>
                </tr>
                <?php
                        }
                ?>
            </table>
        </div>
    