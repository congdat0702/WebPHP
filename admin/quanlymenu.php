<?php
include "menu.php";

?> 

<div class="main_add">
            <h3>Thêm Menu</h3>
            <form action="xulymenu.php" method="post">
                <div class="add_them">
                    <label for="ten_menu">Thêm Menu</label>
                    <input type="text" name="ten_menu" placeholder="Nhập Tên Menu ... " required>

                </div>
                <button name="them" type="submit">Thêm</button>
            </form>

            <?php
	            $sql_lietke_menu = "SELECT * FROM tbl_menu";
	            $query_lietke_menu = mysqli_query($mysqli,$sql_lietke_menu);
            ?>
            <h3>Danh Sách</h3>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Menu</th>
                    <th>Edit</th>
                </tr>
                <?php
                    $i = 0;
                    while($row = mysqli_fetch_array($query_lietke_menu)){
                	$i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $row['ten_menu'] ?></td>
                    <td>

                    <a href="suamenu.php?id_menu=<?php echo $row['id_menu'] ?>">Sửa</a>
                    <a href="xulymenu.php?id_menu=<?php echo $row['id_menu'] ?>">Xóa</a>

                    </td>

                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
