<?php

include '../Business/ParkElementBusiness.php';
include '../Business/NationalParkBusiness.php';

//obtener datos
$name=$_GET['txtName']; //variable global desde el php
$parkName=$_GET['txtParkName'];
$description=$_GET['txtDescription'];
$id = $_GET['hdnID'];
$idPark = $_GET['hdnParkID'];


$elementBusiness = new ParkElementBusiness;
$parkBusiness = new NationalParkBusiness();
if($_GET['btnSearhElement']){ //se presiono el boton Search
    
    //validar de que venga algo
    if (strlen($name) > 0 ) {

        //buscar el parque y traer el ID
        $park = $parkBusiness->getParkByName($parkName);
        
        if(strlen($park->name) != NULL){//significa que el parque existe
            
            $currentElement = $elementBusiness->getElementByName($park->id, $name);
            
            if(strlen($currentElement->name) != NULL){//el elemento si existe en ese parque
                header("location: ../Presentation/update_element.php?element=" .
                    $currentElement->name . "&idPark=" .
                    $park->id . "&parkName=" .
                    $park->name . "&id=" .
                    $currentElement->id . "&description=" .
                    $currentElement->description);
            }else{
                header("location: ../Presentation/update_element.php?error=not_exists");
            }//end if/else
        }else{
            header("location: ../Presentation/update_element.php?error=park_not_founded");
        }//end if/else
        
    }  else {
            header("location: ../Presentation/update_element.php?error=empty_field");
        }//end if/else
    
}else if($_GET['btnUpdatePark']){
    if (strlen($name) > 0 && strlen($description) > 0 && strlen($parkName) > 0) {
        $updatedElement = new ParkElement($id, $name, $description, $idPark);
        
        $result = $elementBusiness->updateParkElement($updatedElement);
        if($result == 1){
            header("location: ../Presentation/update_element.php?update=success");
        }else{
            header("location: ../Presentation/update_element.php?update=failed");
        }
        
    } else {
        //es para devolverlo si no inserta todos los datos
        header("location: ../Presentation/update_park.php?error=empty_field");
    }//end if/else
}//end if else
?>
