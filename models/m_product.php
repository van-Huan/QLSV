<?php
class m_product
{
    function m_product()
    {
        include_once("m_database.php");        
    }
    
    function selectAllProductTypes()
    {
        $con = new database();
        $sql = "SELECT * FROM mis_product_types";
        $result = $con->select_all_query($sql);
        return $result;
    }
    
    function selectOneProductTypes($id)
    {
        $con = new database();
        $sql = "SELECT * FROM mis_product_types WHERE id=".$id;
        $result = $con->select_query($sql);
        return $result;
    }
    
    function insertProductType($name=null, $description=null, $image=null)
    {
        $con = new database();
        $sql = "INSERT INTO mis_product_types(`name`,`description`, `image`) values(";
        $sql .= "'".$name."',";
        $sql .= "'".$description."',";
        $sql .= "'".$image."')";
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function updateProductType($id, $name=null, $description=null, $image=null)
    {
        $con = new database();
        $sql = "UPDATE mis_product_types SET ";
        $sql .= "`name` = '".$name."',";
        $sql .= "`description` = '".$description."',";
        $sql .= "`image` = '".$image."'";
        $sql .= " WHERE id =".$id;

        $result = $con->execute_query($sql);
        return $result;
    }
    
    function deleteProductType($id)
    {
        $con = new database();
        $sql = "DELETE FROM mis_product_types WHERE id = ".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function selectAllProduct($productTypeId = null)
    {
        $con = new database();
        $sql = "SELECT * FROM mis_products WHERE 1";
        if($productTypeId != null)
        {
            $sql .= " AND productTypeId = ". $productTypeId;
        }
        $result = $con->select_all_query($sql);   
        return $result;
    }
    
    function selectTop($productTypeId = null)
    {
        $con = new database();
        $sql = "select *
                 from mis_products where id between 1 and 5";
        if($productTypeId != null)
        {
            $sql .= " AND productTypeId = ". $productTypeId;
        }
        
        $result = $con->select_all_query($sql);   
    
        return $result;
        
    }
    
      function selectNew($productTypeId = null)
    {
        $con = new database();
        $sql = "select *
                 from mis_products where id between 5 and 9";
        if($productTypeId != null)
        {
            $sql .= " AND productTypeId = ". $productTypeId;
        }
        
        $result = $con->select_all_query($sql);   
    
        return $result;
        
    }
    
    function selectOneProduct($productId)
    {
        $con = new database();      
        $sql = "SELECT * FROM mis_products WHERE id = ".$productId;
        $result = $con->select_query($sql);        
        return $result;
    }
    
    function insertProduct($name=null, $description=null, $image=null, $price=null, $quantity=null, $productTypeId)
    {
        $con = new database();
        @session_start();
        $sql = "INSERT INTO mis_products(`name`,`description`, `image`, `price`, `quantity`, `productTypeId`, `createdBy`) values(";
        $sql .= "'".$name."',";
        $sql .= "'".$description."',";
        $sql .= "'".$image."',";
        $sql .= "'".$price."',";
        $sql .= "'".$quantity."',";
        $sql .= "'".$productTypeId."',";
        $sql .= "'".$_SESSION['userId']."')";
        print_r($sql);
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function updateProduct($id, $name=null, $description=null, $image=null, $price=null, $quantity=null, $productTypeId)
    {
        $con = new database();
        @session_start();
        $sql = "UPDATE mis_products SET ";
        $sql .= "`name` = '".$name."',";
        $sql .= "`description` = '".$description."',";
        $sql .= "`price` = '".$price."',";
        $sql .= "`quantity` = '".$quantity."',";
        $sql .= "`lastModifiedBy` = '".$_SESSION['userId']."',";
        $sql .= "`productTypeId` = '".$productTypeId."',";
        $sql .= "`image` = '".$image."'";
        $sql .= " WHERE id =".$id;

        $result = $con->execute_query($sql);
        return $result;
    }
    
    function deleteProduct($id)
    {
        $con = new database();
        $sql = "DELETE FROM mis_products WHERE id = ".$id;
        $result = $con->execute_query($sql);
        return $result;
    }
    
    function addToCart($product = array())
    {
        @session_start();
        if($_SESSION['login'] == 1)
        {
            $_SESSION['cart']['products'][] = array(
                'id' => $product['id'],
                'name' => $product['name'],
                'price' => $product['price'],
                'add-quantity' => $product['add-quantity']
            );
            $_SESSION['cart']['buying-quantities'] += $product['add-quantity'];
            
            return true;
        }
        else
            return false;
    }
    
    function insertInvoice()
    {
        $con = new database();
        @session_start();
        if($_SESSION['cart']['buying-quantities'] > 0)
        {
            $invoiceCode = $_SESSION['userId']."-".time();
            $sql = "INSERT INTO mis_invoices(code, createdBy) VALUES(";
            $sql .= "'".$invoiceCode."',";
            $sql .= "'".$_SESSION['userId']."')";            
            
            if($con->execute_query($sql))
            {
                //Lấy ID của invoice vừa tạo:
                $sql1 = "SELECT id FROM mis_invoices WHERE code = '".$invoiceCode."'";
                $invoice = $con->select_query($sql1);
                
                //Tạo các chi tiết đơn hàng:
                $sql2 = "INSERT INTO mis_invoice_details(invoiceId, productId, quantity, price, createdBy) VALUES";
                $i = 0;
                foreach($_SESSION['cart']['products'] as $cart)
                {
                    $i++;
                    $sql2 .= "('".$invoice['id']."','".$cart['id']."','".$cart['add-quantity']."','".$cart['price']."','".$_SESSION['userId']."')";
                    if($i < sizeof($_SESSION['cart']['products']))
                    {
                        $sql2 .= ",";
                    }
                }
                if($con->execute_query($sql2))
                {
                    //Nếu thêm đơn hàng thành công thì phải hủy các session lưu đơn hàng tạm thời đi.
                    unset($_SESSION['cart']);
                    $_SESSION['cart']['products'] = array();
                    $_SESSION['cart']['buying-quantities'] = 0;
                    return true;
                }
                else return false;
                
                
            }
            
        }
    }
    function selectAllsearch($search)
    {
        $con = new database();
        $sql = "SELECT * from  mis_product where name LIKE '%".$search."%' ";
		
        $result = $con->select_all_query($sql);
        return $result;
    }
    function selectInvoiceByUser($userId)
    {
        $con = new database();
        $sql = "SELECT mis_invoices.*, sum(mis_invoice_details.price*mis_invoice_details.quantity) as total
        FROM mis_invoices INNER JOIN mis_invoice_details ON 
        mis_invoices.id = mis_invoice_details.invoiceId 
        WHERE mis_invoices.createdBy = ".$userId." GROUP BY mis_invoice_details.invoiceId";

        $result = $con->select_all_query($sql);
        return $result;

    }
    
    function selectInvoiceDetailByInvoice($invoiceId)
    {
        $con = new database();
        $sql = "SELECT mis_invoice_details.*, mis_products.name FROM mis_invoice_details
        INNER JOIN mis_products ON mis_invoice_details.productId = mis_products.id 
         WHERE invoiceId = ".$invoiceId;

        $result = $con->select_all_query($sql);
        return $result;

    }
    

}


?>