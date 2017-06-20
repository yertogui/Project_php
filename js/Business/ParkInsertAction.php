<?php

//CLASE DEL ACTION QUE INSERTA

include './NationalParkBusiness.php';

//obtener datos
$name = $_GET['txtPark'];
$description = $_GET['txtDescription'];
$location = $_GET['txtLocation'];
$contact = $_GET['txtContact'];
$latitude = $_GET['txtLatitude'];
$longitude = $_GET['txtLongitude'];

//validar de que venga algo
if (strlen($name) > 0 && strlen($description) > 0 && strlen($location) > 0 
        && strlen($latitude) > 0 && strlen($longitude) > 0) {
    
    $park = new NationalPark(0, $name, $description, $location, $contact,$latitude,$longitude);
    $parkBusiness = new NationalParkBusiness();

    $existsPark = $parkBusiness->getParkByName($name);
     if ($existsPark->name == '') { //no existe ese parque

            $result = $parkBusiness->insertPark($park);
            
            if($result == 1){
                $parkInserted=$parkBusiness->getParkByName($name);
            
                header("location: ../Presentation/insert_park.php?success=insert&id=$parkInserted->id");
            }else{
                header("location: ../Presentation/insert_park.php?error=not_inserted");
            }//end if/else
        
    } else {
        header("location: ../Presentation/insert_park.php?error=park_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/insert_park.php?error=empty_field");
}//end else
?>
