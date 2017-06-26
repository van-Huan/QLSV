<?php
include("./models/m_timkiem.php");

$models = new m_phim();

	 $q=$_POST['search'];
          
    $search = $models->selectAllsearch($q);
          

    require("./views/v_timkiem.php");
	
	
?>