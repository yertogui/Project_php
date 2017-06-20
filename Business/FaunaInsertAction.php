<?php

//CLASE DEL ACTION QUE INSERTA

include './FaunaBusiness.php';
include './NationalParkBusiness.php';

//obtener datos
$faunaName = $_GET['txtFauna'];
$description = $_GET['txtDescription'];
$park = $_GET['txtPark'];

//validar de que venga algo
if (strlen($faunaName) > 0 && strlen($description) > 0 && strlen($park) > 0) {

    $parkBusiness = new NationalParkBusiness();
    $faunaBusiness = new FaunaBusiness();

    $existsPark = $parkBusiness->getParkByName($park);


    if ($existsPark->name != '') { //Que existe ese parque
        $fauna = new Fauna(0, $faunaName, $description, $existsPark->id);

        $existsFauna = $faunaBusiness->getFaunaByName($faunaName);

        if ($existsFauna->name == '') {//que ese elemento no exista en ese parque
            
            $result = $faunaBusiness->insertFauna($fauna);

            header("location: ../Presentation/insert_fauna.php?success=insert");
        } else {
            header("location: ../Presentation/insert_fauna.php?error=fauna_exists");
        }//end else
    } else {
        header("location: ../Presentation/insert_fauna.php?error=park_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/insert_fauna.php?error=empty_field");
}//end else
?>
