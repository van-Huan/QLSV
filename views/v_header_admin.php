<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Store</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="wrap">

       <div class="header" style="background:url(images/header.jpg) no-repeat center;">
       		       
        <div id="menu">
            <ul>                                                                       
            <li><a href="?page=home">Trang chủ</a></li>
            <li><a href="?page=productList">Sách</a></li>
               <?php @session_start(); if(!empty($_SESSION['isAdmin']) and $_SESSION['isAdmin'] == 1) { ?>
                <li><a href="?page=admin">Quản trị</a></li>
                <?php } else { ?>
                <script>alert('Bạn không được phép vào trang này !'); window.location.href = "http://localhost/qls/index.php";</script>
                <?php } ?>
            
             <?php  if(!empty($_SESSION['login']) and $_SESSION['login'] == 1 ) {    ?>                    
                            <li><a >Xin chào bạn: <?=$_SESSION["username"]  ?></a></li>
                            <li><a href="?page=your-invoice" >Hàng đã mua</a></li>
                            <li><a href="?page=login&action=logout" >Đăng xuất</a></li>
                        <?php } else {    ?>  
                            <li><a href="?page=login&">Đăng nhập</a></li>
                            <li><a href="?page=register">Đăng ký</a></li> 
                        <?php  } ?> 
           
        
        
            <li><a href="details.html">Giá</a></li>
            </ul>
        </div>     
            
            
       </div> 
       
       
       <div class="center_content" style="background:url(images/center_bg.gif) repeat-y center;">
       	<div class="left_content">
    
       
  