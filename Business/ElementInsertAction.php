<?php

//CLASE DEL ACTION QUE INSERTA

include './ParkElementBusiness.php';
include './NationalParkBusiness.php';

//obtener datos
$elementName = $_GET['txtNameElement'];
$description = $_GET['txtDescription'];
$park = $_GET['txtPark'];

//validar de que venga algo
if (strlen($elementName) > 0 && strlen($description) > 0 && strlen($park) > 0) {

    $parkBusiness = new NationalParkBusiness();
    $elementBusiness = new ParkElementBusiness();

    $existsPark = $parkBusiness->getParkByName($park);


    if ($existsPark->name != '') { //Que existe ese parque
        $element = new ParkElement(0, $elementName, $description, $existsPark->id);

        $existsElement = $elementBusiness->getElementByName($existsPark->id, $elementName);

        if ($existsElement->name == '') {//que ese elemento no exista en ese parque
            
            $result = $elementBusiness->insertParkElement($element);

            header("location: ../Presentation/insert_element.php?success=insert");
        } else {
            header("location: ../Presentation/insert_element.php?error=element_exist");
        }//end else
    } else {
        header("location: ../Presentation/insert_element.php?error=park_not_exist");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/insert_element.php?error=empty_field");
}//end else
?>
