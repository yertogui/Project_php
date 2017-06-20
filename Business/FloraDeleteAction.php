<?php

//CLASE DEL ACTION QUE INSERTA

include './FloraBusiness.php';
include './NationalParkBusiness.php';
//obtener datos
$floraName = $_GET['txtFlora'];
$parkName = $_GET['txtPark'];

//validar de que venga algo
if (strlen($floraName) > 0 && strlen($parkName) > 0) {
    
   $parkBusiness = new NationalParkBusiness();
    $floraBusiness = new FloraBusiness();

    $existPark = $parkBusiness->getParkByName($parkName);


    if ($existPark->name != '') { //Que existe ese parque
       

        $existFlora = $floraBusiness->getFloraByName($floraName, $existPark->id);

        if ($existFlora->name != '') {//que ese elemento no exista en ese parque
            
            $result = $floraBusiness->deleteFlora($floraName, $existPark->id);

            header("location: ../Presentation/delete_flora.php?success=delete");
        } else {
            header("location: ../Presentation/delete_flora.php?error=fauna_not_exists");
        }//end else
    } else {
        header("location: ../Presentation/delete_flora.php?error=park_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/delete_flora.php?error=empty_field");
}//end else
?>
