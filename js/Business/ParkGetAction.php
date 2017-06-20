<?php

//CLASE DEL ACTION DEL ACTUALIZAR
include './NationalParkBusiness.php';

//obtener datos
$namePark = $_GET['txtPark'];

//validar de que venga algo
if (strlen($namePark) > 0 ) {
    
    $parkBusiness = new NationalParkBusiness();
    $result = $parkBusiness->getParkByName($namePark);
    
    if (strlen($result->name) != NULL) {
        header("location: ../Presentation/National_Park_Index.php?park=" .
                $result->name . "&location=" .
                $result->location . "&contact=" .
                $result->contact . "&id=" .
                $result->id . "&description=" .
                $result->description . "&latitude=".
                $result->latitude . "&longitude=" .
                $result->longitude);
    } else {
        header("location: ../index.php?error=not_exist");
    }
}  else {
        header("location: ../index.php?error=empty_field");
    }
?>
