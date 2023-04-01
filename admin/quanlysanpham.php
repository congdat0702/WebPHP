<?php
include "menu.php";
?>
<style>
    .btn-them-san-pham {
  display: inline-block;
  padding: 8px 20px;
  font-size: 16px;
  font-weight: bold;
  text-decoration: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

    </style>
<div class="main_add">
<a href="themsanpham.php" class="btn-them-san-pham">Thêm sản phẩm</a>
<?php
	            $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_menu WHERE tbl_sanpham.id_menu=tbl_menu.id_menu ORDER BY id_sanpham DESC";
	            $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
            ?>
<h3>Danh Sách</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>ảnh sản phẩm</th>
                    <th>giá sản phẩm</th>
                    <th>số lượng</th>
                    <th>Menu</th>
                    <th>Edit</th>
                </tr>
                <?php
                    $i = 0;
                     while($row = mysqli_fetch_array($query_lietke_sp)){
  	                $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['ten_sanpham'] ?></td>
                    <td>
                        <img src="upload/<?php echo $row['anh_sanpham'] ?>" alt="" width="150px">
                    </td>
                    <td><?php echo $row['gia_sanpham'] ?></td>
                    <td><?php echo $row['soluong'] ?></td>
                    <td><?php echo $row['ten_menu'] ?></td>
                    <td>
                    <a href="suasanpham.php?id_sanpham=<?php echo $row['id_sanpham'] ?>"
                            onClick="return confirm('Bạn có thực sự muốn sửa ?');">Sửa</a>
                        <a href="xulysanpham.php?id_sanpham=<?php echo $row['id_sanpham'] ?>"
                            onClick="return confirm('Bạn có thực sự muốn xóa ?');">Xóa</a>

                       <a href="suasanpham.php?id_sanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
                        <a href="xulysanpham.php?id_sanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a>  
                    </td>
                </tr>
                <?php
                     }
                ?>
            </table>
        </div>