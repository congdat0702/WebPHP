<?php
include "menu.php";

?> 
<?php
	$sql_sua_menu = "SELECT * FROM tbl_menu WHERE id_menu='$_GET[id_menu]' LIMIT 1";
	$query_sua_menu = mysqli_query($mysqli,$sql_sua_menu);
?>
<div class="main_add">
            <h3>Sua Menu</h3>
            <form action="xulymenu.php?id_menu=<?php echo $_GET['id_menu'] ?>" method="post">
            <?php
 	            while($dong = mysqli_fetch_array($query_sua_menu)) {
 	        ?>
                <div class="add_them">
                    <label for="ten_menu">Sửa Menu</label>
                    <input type="text" name="ten_menu" placeholder="Nhập Tên Menu ... " value="<?php echo $dong['ten_menu'] ?>">

                </div>
                <button name="sua" type="submit">Sửa</button>
            <?php
                 }
            ?>    
            </form>
 
        </div>
    