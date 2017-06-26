<?php
require("v_header.php");
?>

       <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>My cart</div>
        
        	<div class="feat_prod_box_details">
            
            <table class="cart_table">
            	<tr class="cart_title">
         	          <td>STT</td>
                    <td>Hàng hóa</td>
                    <td>Số lượng</td>
                    <td>Đơn giá</td>
                    <td>Thành tiền</td>               
                </tr>
                <?php
    
                if($_SESSION['cart']['buying-quantities'] > 0) {
                 $carts = $_SESSION['cart']['products'];
                    $i = 1;
                    foreach($carts as $cart)
                    {        
                ?>
                <tr class="<?php echo ($i%2 == 0)?"odd":"even";   ?>">
                    <td><?=$i++ ?></td>
                    <td><?=$cart['name'] ?></td>
                    <td><?=$cart['add-quantity'] ?></td>
                    <td><?=$cart['price'] ?></td>
                    <td><?=$cart['add-quantity']*$cart['price']?></td>
                </tr>
                <?php }  ?>     
            	
            
            </table>
             <a class="purchase" href="?page=your-cart&action=insertInvoice">Mua hàng !</a>


            <?php } else {
            ?>
            Bạn chưa mua sản phẩm nào !
            
            <?php }  ?>
            
            <a href="#" class="continue">&lt; continue</a>
            <a href="#" class="checkout">checkout &gt;</a>
            
            </div>	
       
        <div class="clear"></div>
        </div>




<?php
require("v_footer.php");
?>