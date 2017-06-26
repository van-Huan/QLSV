<?php
require("v_header.php");
?>
   <div class="crumb_nav">
            <a href="?page=index">Trang chủ</a> &gt;&gt; Danh mục sách
            </div>
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Danh mục sách</div>
    <div style="clear:both">
        <table width="100%" class="productGrid">
        <?php if($productList) { $i=0;  foreach($productList as $product) {            
            if($i % 5 == 0) echo "<tr>";
            $i++;
        ?>
         
           
           <div class="new_products">
           
                    <div class="new_prod_box">
                        <a href="?page=productDetail&id=<?=$product['id']?>"><?=$product["name"]?></a>
                        <div class="new_prod_bg" style="background:url(images/new_prod_box.gif) no-repeat center;">
                        <a href="?page=productDetail&id=<?=$product['id']?>"><img src="<?=$product['image']?>" width="60px" height="100px"alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
           </div>
            
            
        <?php 
            if($i % 5 == 0) echo "</tr>";
        }
        } else { 
            echo "Chưa có sản phẩm nào !";
            }
        ?>


        </table>    
    </div>


<?php
require("v_footer.php");
?>