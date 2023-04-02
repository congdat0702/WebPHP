<?php
	            $sql_lietke_menu = "SELECT * FROM tbl_menu";
	            $query_lietke_menu = mysqli_query($mysqli,$sql_lietke_menu);
            ?>
<div class="cartegory-left">
                   <div id="menu">
                             <ul>
                             <?php
                   
                   while($row = mysqli_fetch_array($query_lietke_menu)){
                   
                   ?>
                                    <li><a href="sanphammenu.php?id=<?php echo $row['id_menu'] ?>"><?php echo $row['ten_menu'] ?></a></li>
                                    

                                    <?php
                   }
                                    ?>
                                </ul>
                            </div>
                </div>