<?php

//CLASE DEL ACTION QUE INSERTA

include './FloraBusiness.php';
include './NationalParkBusiness.php';

//obtener datos
$floraName = $_GET['txtFlora'];
$description = $_GET['txtDescription'];
$abundance = $_GET['txtAbundance'];
$floweringPeriod = $_GET['txtFloweringPeriod'];
$park = $_GET['txtPark'];

//validar de que venga algo
if (strlen($floraName) > 0 && strlen($abundance) > 0 && strlen($floweringPeriod) > 0
        && strlen($description) > 0 && strlen($park) > 0 ) {

    $parkBusiness = new NationalParkBusiness();
    $floraBusiness = new FloraBusiness();

    $existsPark = $parkBusiness->getParkByName($park);


    if ($existsPark->name != '') { //Que existe ese parque
        $flora = new Flora(0, $floraName, $abundance, $floweringPeriod, $description, $existsPark->id);

        $existsFlora = $floraBusiness->getFloraByName($floraName);

        if ($existsFlora->name == '') {//que ese elemento no exista en ese parque
            
            $result = $floraBusiness->insertFlora($flora);

            header("location: ../Presentation/insert_flora.php?success=insert");
        } else {
            header("location: ../Presentation/insert_flora.php?error=flora_exists");
        }//end else
    } else {
        header("location: ../Presentation/insert_flora.php?error=park_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/insert_flora.php?error=empty_field");
}//end else
?>