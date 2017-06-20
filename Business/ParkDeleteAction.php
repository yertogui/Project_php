<?php

//CLASE DEL ACTION QUE INSERTA

include './NationalParkBusiness.php';
include './FaunaBusiness.php';
include './FloraBusiness.php';
include './ParkElementBusiness.php';
include './RangerBusiness.php';

//obtener datos
$name = $_GET['txtPark'];

//validar de que venga algo
if (strlen($name) > 0 ) {
    
    $parkBusiness = new NationalParkBusiness();

    $existsPark = $parkBusiness->getParkByName($name);
     if ($existsPark->name != '') { //no existe ese usuario
         
         $result = $parkBusiness->deletePark($name);//borrar el parque 
         if($result == 1){//el parque se borro de la BD
            //hay que borrar todos los elementos, flora y fauna del parque
            $elementBusiness = new ParkElementBusiness();
            $faunaBusiness = new FaunaBusiness();
            $floraBusiness = new FloraBusiness();
            $rangerBusiness = new RangerBusiness();
            
            $resultE = $elementBusiness->deleteAllParkElements($existsPark->id);
            $resultR = $rangerBusiness->deleteAllParkRangers($existsPark->id);
            $resultFl = $floraBusiness->deleteAllParkFlora($existsPark->id);
            $resultFa = $faunaBusiness->deleteAllParkFauna($existsPark->id);
            
            
            header("location: ../Presentation/delete_park.php?success=deleted");
         }else{
             header("location: ../Presentation/delete_park.php?error=failed");
         }
            
        
    } else {
        header("location: ../Presentation/delete_park.php?error=park_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/delete_park.php?error=empty_field");
}//end else
?>
