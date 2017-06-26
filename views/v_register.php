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
        alert('Mật khẩu xác nhận chưa khớp !');
        return false;
     }
     else return true;
  
}

</script>

<form method="post" name="register" action="?page=register&action=insert" onsubmit="return checkForm()">
 <div class="title"><span class="title_icon"><img src="images/bullet1.gif" alt="" title="" /></span>Đăng ký</div>
        
        	<div class="feat_prod_box_details">
            <p class="details">
             Đăng ký cho mình một tài khoản để tận hưởng những tính năng của hệ thống.
            </p>
            
              	<div class="contact_form">
                <div class="form_subtitle">Tạo tài khoản</div>
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
                    <label class="contact"><strong>Confirm:</strong></label>
                    <input name="confirm" type="password" class="contact_input" />
                    </div>
                    
                    <div class="form_row">
                    <label class="contact"><strong>Email:</strong></label>
                    <input name="email" type="text" class="contact_input" />
                    </div>
                

                    <div class="form_row">
                        <div class="terms">
                        <input type="checkbox" name="terms" />
                        Tôi đồng ý với <a href="#"><br>Điều khoản &amp; quy định</br></a></div>
                    </div> 

                    
                    <div class="form_row">
                    <input type="submit" class="register" value="Đăng ký"  style="background: url(images/register_bt.gif) no-repeat scroll center center transparent;" />
                    </div>   
                  </form>     
                </div>  
            
          </div>	
            
    

<?php
require("v_footer.php");
?>