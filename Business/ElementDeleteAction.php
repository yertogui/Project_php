<?php

//CLASE DEL ACTION QUE INSERTA

include './ParkElementBusiness.php';
include './NationalParkBusiness.php';
//obtener datos
$elementName = $_GET['txtElement'];
$parkName = $_GET['txtPark'];

//validar de que venga algo
if (strlen($elementName) > 0 && strlen($parkName) > 0) {
    
   $parkBusiness = new NationalParkBusiness();
    $elementBusiness = new ParkElementBusiness();

    $existPark = $parkBusiness->getParkByName($parkName);


    if ($existPark->name != '') { //Que existe ese parque
       

        $existElement = $elementBusiness->getElementByName($existPark->id, $elementName);

        if ($existElement->name == $elementName) {//que ese elemento no exista en ese parque
            
            $result = $elementBusiness->deleteParkElement($elementName, $existPark->id);

            header("location: ../Presentation/delete_element.php?success=delete");
        } else {
            header("location: ../Presentation/delete_element.php?error=element_not_exists");
        }//end else
    } else {
        header("location: ../Presentation/delete_element.php?error=park_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/delete_element.php?error=empty_field");
}//end else
?>
