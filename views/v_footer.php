
 
<div class="clear"></div>
        </div><!--end of left content-->
        
        <div class="right_content">
        	<div class="languages_box">
            <span class="red">Languages:</span>
            <a href="#" class="selected"><img src="images/gb.gif" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/fr.gif" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/de.gif" alt="" title="" border="0" /></a>
            </div>
                <div class="currency">
                <span class="red">Currency: </span>
                <a href="#">GBP</a>
                <a href="#">EUR</a>
                <a href="#" class="selected">USD</a>
                </div>
                
                
              <div class="cart">
                  <div class="title">
                  <span class="title_icon"><img src="images/cart.gif" alt="" title="" /></span>
                  <?php @session_start(); if(!empty($_SESSION['login']) and $_SESSION['login'] == 1) { ?>
           			 <a href="?page=your-cart">Giỏ hàng <?=$_SESSION['cart']['buying-quantities'] ?> </a>
                    <?php } ?></div>
                  <div class="home_cart_content">
                  </div>
                  
              
              </div>
                       
            	
        
        
             <div class="title"><span class="title_icon"><img src="images/bullet3.gif" alt="" title="" /></span>Giới thiệu về trang web</div> 
             <div class="about">
             <p>
             <img src="images/about.gif" alt="" title="" class="right" />
             Trang web được xây dựng nhằm mục đích phục vụ nhu cầu mua bán sách ngày càng tăng cao của khách hàng. Việc truy cập trang sẽ làm cho khách hàng dễ dàng tiện lợi trong việc lựa chọn sách.
             </p>
             
             </div>
             
             <div class="right_box">
             
             	<div class="title"><span class="title_icon"><img src="images/bullet4.gif" alt="" title="" /></span>Sách khuyến mãi</div> 
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb1.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb2.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>                    
                    
                    <div class="new_prod_box">
                        <a href="details.html">product name</a>
                        <div class="new_prod_bg">
                        <span class="new_icon"><img src="images/promo_icon.gif" alt="" title="" /></span>
                        <a href="details.html"><img src="images/thumb3.gif" alt="" title="" class="thumb" border="0" /></a>
                        </div>           
                    </div>              
             
             </div>
             
             <div class="right_box">
             
             	<div class="title"><span class="title_icon"><img src="images/bullet5.gif" alt="" title="" /></span>Thể loại</div> 
                
                <ul class="list">
              
			<?php foreach($productTypes as $type) { ?>
                        <li><a href="?page=productList&typeId=<?=$type['id']?>"><?=$type["name"]?></a></li>            
                    <?php } ?>
			                                             
                </ul>
                
             	<div class="title"><span class="title_icon"><img src="images/bullet6.gif" alt="" title="" /></span>Tác giả</div> 
                
                <ul class="list">
                <li><a href="#">Vô Danh</a></li>
                <li><a href="#">Kim Dung</a></li>
                <li><a href="#">Akira Tojirama</a></li>
                <li><a href="#">Fujiko</a></li>
                <li><a href="#">GoSho</a></li>
                <li><a href="#">Connan Doyles</a></li>
                <li><a href="#">Đào Hải</a></li>                        
             </div>         
             </ul>   
        
        </div><!--end of right content-->
        
        
       
       
       <div class="clear"></div>
       </div><!--end of center content-->
       
              
       <div class="footer">
       	<div class="left_footer"><img src="images/footer_logo.gif" alt="" title="" /><br /> <a href="http://csscreme.com/freecsstemplates/" title="free templates"><img src="images/csscreme.gif" alt="free templates" title="free templates" border="0" /></a></div>
        <div class="right_footer">
        <a href="?page=home">Trang chủ</a>
        <a href="#">Giới thiệu</a>
        <a href="#">Dịch vụ</a>
        <a href="#">Đăng kí</a>
        <a href="#">Liên hệ</a>
       
        </div>
        
       
       </div>
    

</div>

</body>
</html>