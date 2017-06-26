<?php
require("v_header.php");
?>


    </table>
<div class="crumb_nav">
            <a href="?page=index">Trang chủ</a> &gt;&gt; <span><?=$product["name"]?></span>
            </div>
            <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span><?=$product["name"]?></div>
        
        	<div class="feat_prod_box_details">
            
            	<div class="prod_img"><a href="#"><img src="<?=$product['image']?>" width="120px" height="150px" alt="" title="" border="0" /></a>
                <br /><br />
                
                </div>
                
                <div class="prod_det_box">
                	<div class="box_top" style="background: url(images/box_top.gif) no-repeat scroll center bottom transparent;"></div>
                    <div class="box_center" style="background: url(images/box_center.gif) repeat-y scroll center center transparent;">
                    <div class="prod_title">Thông tin chi tiết</div>
                    <p class="details"><?=$product["description"]?>                   </p>
                    <div class="price"><strong>Giá:</strong> <span class="red"><?=$product["price"]?></span></div>
                    <div class="price"><strong>Trạng thái: </strong><?php if($product["quantity"] > 0) echo "Còn hàng"; else echo "Hết hàng"; ?></div>
                    <form method="post" action="?page=your-cart&action=add-to-cart" >
                        <td class="add-to-cart">                
                        <strong>Số lượng:</strong> <input width="250px" type="text" name="product[add-quantity]" value="1" /> <!-- Truyền biến với mảng trong HTML -->
                        <input type="submit" class="add-to-cart-submit" value="Đặt sách" />
            
                        </td>
                        <input type="hidden" name="product[id]" value="<?=$product["id"]?>" />
                        <input type="hidden" name="product[price]" value="<?=$product["price"]?>" />
                        <input type="hidden" name="product[name]" value="<?=$product["name"]?>" />
                    </form>  
                    <div class="clear"></div>
                    </div>
                    
                    <div class="box_bottom" style="background:url(images/box_bottom.gif) no-repeat center top;"></div>
                </div>    
            <div class="clear"></div>
            </div>	
            
              
            
    
<?php
require("v_footer.php");
?>