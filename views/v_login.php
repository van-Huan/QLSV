<?php
require("v_header.php");
?>
<script>
function checkForm()
{
     var username = document.forms['register']["username"].value;
     var password = document.forms['register']["password"].value;
     var confirmPassword = document.forms['register']["confirm"].value;
     var email = document.forms['register']["email"].value;
     
     if(username == '')
     {
        alert('Bạn phải nhập đầy đủ thông tin người dùng');
        document.forms["register"]["username"].focus();
        return false;
     }
     else if(password == '')
     {
        alert('Bạn phải nhập mật khẩu');
        document.forms["register"]["password"].focus();
        return false;
     }
     else if(email == '')
     {
        alert('Bạn phải nhập email');
        document.forms["register"]["email"].focus();
        return false;
     }
     else if(password != confirmPassword)
     {
        alert('Mật khẩu xác nhận chưa khớp!');
        return false;
     }
     else return true;
  
}

</script>
    <form method="post" name="register" action="?page=login&action=login" onsubmit="return checkForm()">
   <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Tài khoản</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
            Đăng nhập để thỏa sức mua sách lấp đầy giỏ hàng của mình nhé! Cảm ơn quý khách!
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">Đăng nhập tài khoản của bạn</div>
                 <form name="register" action="#">          
                    <div class="form_row">
                    <label class="contact"><strong>Username:</strong></label>
                    <input name="username" type="text" class="contact_input" />
                    </div>  


                    <div class="form_row">
                    <label class="contact"><strong>Password:</strong></label>
                    <input name="password" type="password" class="contact_input" />
                    </div>                     

                    <div class="form_row">
                        <div class="terms">
                        <input type="checkbox" name="terms" />
                        Remember me
                        </div>
                    </div> 

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="Đăng nhập" style="background: url(images/register_bt.gif) no-repeat scroll center center transparent;" />
                    </div>   
                    
                  </form>     
                    
                </div>  
            
            </div>	

<?php
require("v_footer.php");
?>