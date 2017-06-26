
<?php
if(empty($_GET["page"]))
{
    require("controller/c_index.php");
}
else
{
    $page = $_GET["page"];
    switch($page)
    {
        case "productList":
            require("controller/c_productList.php");
            break;
        case "productDetail":
            require("controller/c_productDetail.php");
            break;
        case "register":
            require("controller/c_register.php");
            break;
        case "login":
            require("controller/c_login.php");
            break;
        case "admin";
            require("controller/c_admin.php");
            break;
        case "productTypeAdmin";
            require("controller/c_productTypeAdmin.php");
            break;
        case "productAdmin";
            require("controller/c_productAdmin.php");
            break;
        case "userAdmin";
            require("controller/c_userAdmin.php");
            break;
        case "newsAdmin";
            require("controller/c_newsAdmin.php");
            break;
        case "your-cart";
            require("controller/c_your-cart.php");
            break;
        case "your-invoice";
            require("controller/c_your-invoice.php");
            break;
        case "invoiceDetail";
            require("controller/c_invoiceDetail.php");
            break;
            
        case "Timkiem";
            require("controller/c_Timkiem.php");
            break;
        
        default:
            require("controller/c_hotProductList.php");
    }
}



?>
