<?php
include "menu.php";

?> 
<?php
	$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham='$_GET[id_sanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<div class="main_add">
            <h3>Sửa Menu</h3>
            <?php
            while($row = mysqli_fetch_array($query_sua_sp)) {
            ?>
            <form action="xulysanpham.php?id_sanpham=<?php echo $row['id_sanpham'] ?>" method="post" enctype="multipart/form-data">
                <div class="add_them">
                    <label for="ten_menu">Sửa Tên Sản Phẩm</label>
                    <input type="text" name="ten_sanpham" placeholder="Nhập Tên Sản Phẩm ... " value="<?php echo $row['ten_sanpham'] ?>">
                </div>
                <div class="add_them">
                    <label for="anh_sanpham">Sửa Ảnh Sản Phẩm</label>
                    <input type="file" name="anh_sanpham">
                    <img src="upload/<?php echo $row['anh_sanpham'] ?>" width="150px">
                </div>
                <div class="add_them">
                    <label for="gia_sanpham">Sửa Giá Sản Phẩm</label>
                    <input type="text" name="gia_sanpham" placeholder="Nhập Giá Sản Phẩm ... " value="<?php echo $row['gia_sanpham'] ?>">
                </div>
                <div class="add_them">
                    <label for="soluong">Sửa Số Lượng Sản Phẩm</label>
                    <input type="text" name="soluong" placeholder="Nhập Số Lượng Sản Phẩm ... "value="<?php echo $row['soluong'] ?>">
                </div>
                <div class="add_them">
                    <label for="menu">Chọn Menu</label>
                    <select name="menu" id="">
                    <?php
	    		$sql_danhmuc = "SELECT * FROM tbl_menu ORDER BY id_menu DESC";
	    		$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    			if($row_danhmuc['id_menu']==$row['id_menu']){
	    		?>
	    		<option selected value="<?php echo $row_danhmuc['id_menu'] ?>"><?php echo $row_danhmuc['ten_menu'] ?></option>
	    		<?php
	    			}else{
	    		?>
	    		<option value="<?php echo $row_danhmuc['id_menu'] ?>"><?php echo $row_danhmuc['ten_menu'] ?></option>
	    		<?php
	    			}
	    		} 
	    		?>
                    </select>
                </div>
                <button name="sua" type="submit">Sửa</button>
            </form>

           <?php
            }
           ?>
            
        </div>
