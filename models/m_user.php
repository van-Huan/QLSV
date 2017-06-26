<?php
class m_users
{
    function m_users()
    {
        include_once('m_database.php');
    }
    
    function selectAll()
    {
        $con = new database();
        $sql = "SELECT * FROM mis_users";
        $result = $con->select_all_query($sql);
        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
    
    function insert($username, $password, $email)
    {
        $con = new database();
        $sql = 'SELECT * FROM mis_users WHERE username ="'.$username.'" or email ="'.$email.'"';
        $result = $con->select_all_query($sql);
        if(!$result)
        {
            $sql1 = "INSERT INTO mis_users(`username`, `password`, `email`) values(";
            $sql1 .= "'".$username."',";
            $sql1 .= "'".md5($password)."',";
            $sql1 .= "'".$email."')";
            $result = $con->execute_query($sql1);
            return true;
        }
        else
        {
            return false;
        }  
    }
    
    function login($username, $password)
    {
        $con = new database();
        $sql = 'SELECT * FROM mis_users WHERE username = "'.$username.'" and password = "'.md5($password).'"';
        $result = $con->select_query($sql);
        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }
}
 ?>