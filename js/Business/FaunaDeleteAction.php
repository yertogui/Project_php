<?php

//CLASE DEL ACTION QUE INSERTA

include './FaunaBusiness.php';
include './NationalParkBusiness.php';
//obtener datos
$faunaName = $_GET['txtFauna'];
$parkName = $_GET['txtPark'];

//validar de que venga algo
if (strlen($faunaName) > 0 && strlen($parkName) > 0) {
    
   $parkBusiness = new NationalParkBusiness();
    $faunaBusiness = new FaunaBusiness();

    $existPark = $parkBusiness->getParkByName($parkName);


    if ($existPark->name != '') { //Que existe ese parque
       

        $existFauna = $faunaBusiness->getFaunaByName($faunaName, $existPark->id);

        if ($existFauna->name != '') {//que ese elemento no exista en ese parque
            
            $result = $faunaBusiness->deleteFauna($faunaName, $existPark->id);

            header("location: ../Presentation/delete_fauna.php?success=delete");
        } else {
            header("location: ../Presentation/delete_fauna.php?error=fauna_not_exists");
        }//end else
    } else {
        header("location: ../Presentation/delete_fauna.php?error=park_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/delete_fauna.php?error=empty_field");
}//end else
?>
