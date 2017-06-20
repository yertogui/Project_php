<?php

include './NationalParkBusiness.php';

//obtener datos
$namePark=$_GET['txtName']; //variable global desde el php
$location=$_GET['txtLocation'];
$contact=$_GET['txtContact'];
$description=$_GET['txtDescription'];
$id = $_GET['hdnID'];

if($_GET['btnSearhUpdatePark']){ //se presiono el boton Search
    //buscar el parque y traer la informacion
    //validar de que venga algo
    if (strlen($namePark) > 0 ) {

        $parkBusiness = new NationalParkBusiness();
        $currentPark = $parkBusiness->getParkByName($namePark);

        if (strlen($currentPark->name) != NULL) {
            header("location: ../Presentation/update_park.php?park=" .
                    $currentPark->name . "&location=" .
                    $currentPark->location . "&contact=" .
                    $currentPark->contact . "&id=" .
                    $currentPark->id . "&description=" .
                    $currentPark->description);
        } else {
            header("location: ../Presentation/update_park.php?error=not_exist");
        }//end if else
    }  else {
            header("location: ../Presentation/update_park.php?error=empty_field");
        }//end if/else
    
}else if($_GET['btnUpdatePark']){
    if (strlen($namePark) > 0 && strlen($contact) > 0 && 
            strlen($description) > 0 && strlen($location) > 0) {
        $parkBusiness = new NationalParkBusiness();
        $park = new NationalPark($id, $namePark, $description, $location, $contact);
        
        $result = $parkBusiness->updatePark($park);
        if($result == 1){
            header("location: ../Presentation/update_park.php?update=sucess");
        }else{
            header("location: ../Presentation/update_park.php?update=failed");
        }
        
    } else {
        //es para devolverlo si no inserta todos los datos
        header("location: ../Presentation/update_park.php?error=empty_field");
    }//end if/else
}//end if else
    

    

?>