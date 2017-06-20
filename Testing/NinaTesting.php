<?php

include '../Business/FloraBusiness.php';
include '../Business/NationalParkBusiness.php';
   $floraBusiness = new FloraBusiness();


 
    
$park = new NationalParkBusiness();

$park1 = new NationalPark(60, "Parque", "prueba", "costa rica", "3874932", "", "");
$park->insertPark($nationalPark);

?>
		