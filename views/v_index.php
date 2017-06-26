<?php
require("v_header.php");
?>
 <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Sách bán chạy</div>
 


    <div>
        <table width="100%" class="productGrid">
        <?php if($productList) { $i=0;  foreach($productList as $product) {            
            if($i % 5 == 0) echo "<tr>";
            $i++;
        ?>
            
             <div class="feat_prod_box">
            
            	<div class="prod_img"><a href="?page=productDetail&id=<?=$product['id']?>"><img width="80px" height="100px "src="<?=$product['image']?>" alt="" title="" border="0" /></a></div>
                
                <div class="prod_det_box">
                	<div class="box_top" style="background:url(images/box_top.gif) no-repeat center bottom;"></div>
                    <div class="box_center" style="background:url(images/box_center.gif) repeat-y center;">
                    <div class="prod_title"><a href="?page=productDetail&id=<?=$product['id']?>"></a><?=$product["name"]?></div>
                    <p class="details"><?=$product['description']?></p>
                    <a href="?page=productDetail&id=<?=$product['id']?>" class="more">- Chi tiết -</a>
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom" style="background:url(images/box_bottom.gif) no-repeat center top;"></div>
                </div>    
            <div class="clear"></div>
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


    <div class="title"><span class="title_icon"><img src="images/bullet2.gif" alt="" title="" /></span>Sách mới</div> 
           
        <div style="clear: both;">
        <table width="100%" class="productGrid">
        <?php if($productNew) { $i=0;  foreach($productNew as $product) {            
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