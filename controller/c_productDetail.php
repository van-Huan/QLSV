<?php
include("./models/m_product.php");
include("./models/m_function.php");
$models = new m_product();
$productTypes = $models->selectAllProductTypes();




if(!empty($_GET["id"]))
{
    $productId = $_GET["id"];
    $product = $models->selectOneProduct($productId);
    require("./views/v_productDetail.php");
}
else
{
    require("./views/v_index.php");
}



?>