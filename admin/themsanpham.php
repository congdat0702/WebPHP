<?php
include "menu.php";
?>
<style>
    .btn-them-san-pham {
  background-color: #4CAF50; /* Màu nền */
  color: white; /* Màu chữ */
  padding: 10px 15px; /* Kích thước nút */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px; /* Bo góc nút */
}
.btn-them-san-pham:hover {
  background-color: #3e8e41; /* Màu nền khi rê chuột vào */
}
h3 {
  background-color: #f2f2f2;
  color: #333;
  padding: 10px;
}
table {
  border-collapse: collapse;
  width: 100%;
  margin: 10px 0;
}

th, td {
  text-align: left;
  padding: 8px;
}

th {
  background-color: #4CAF50;
  color: white;
}

td {
  background-color: #f2f2f2;
  color: #333;
}   
    </style>
<h3>Thêm Sản Phẩm</h3>
            <form action="xulysanpham.php" method="post" enctype="multipart/form-data">
                <div class="add_them">
                    <label for="ten_menu">Thêm Tên Sản Phẩm</label>
                    <input type="text" name="ten_sanpham" placeholder="Nhập Tên Sản Phẩm ... " required>
                </div>
                <div class="add_them">
                    <label for="anh_sanpham">Thêm Ảnh Sản Phẩm</label>
                    <input type="file" name="anh_sanpham">
                </div>
                <div class="add_them">
                    <label for="gia_sanpham">Thêm Giá Sản Phẩm</label>
                    <input type="text" name="gia_sanpham" placeholder="Nhập Giá Sản Phẩm ... " required>
                </div>
                <div class="add_them">
                    <label for="soluong">Thêm Số Lượng Sản Phẩm</label>
                    <input type="text" name="soluong" placeholder="Nhập Số Lượng Sản Phẩm ... " required>
                </div>
                <div class="add_them">
                    <label for="menu">Chọn Menu</label>
                    <select name="menu" id="">
                    <?php
	    		        $sql_danhmuc = "SELECT * FROM tbl_menu ORDER BY id_menu DESC";
	    		        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	    		        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
	    		        ?>
	    		            <option value="<?php echo $row_danhmuc['id_menu'] ?>"><?php echo $row_danhmuc['ten_menu'] ?></option>
	    		        <?php
	    		        } 
	    		        ?>
                    </select>
                </div>
                <button name="them" type="submit">Thêm</button>
            </form>
            <?php
	            $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_menu WHERE tbl_sanpham.id_menu=tbl_menu.id_menu ORDER BY id_sanpham DESC";
	            $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
            ?>
