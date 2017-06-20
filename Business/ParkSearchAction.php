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
        header("location: ../Presentation/update_park.php?park=" .
                $result->name . "&location=" .
                $result->location . "&contact=" .
                $result->contact . "&id=" .
                $result->id . "&description=" .
                $result->description);
    } else {
        header("location: ../Presentation/update_park.php?error=not_exist");
    }
}  else {
        header("location: ../Presentation/update_park.php?error=empty_field");
    }
?>
