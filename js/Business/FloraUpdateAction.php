<?php


include '../Business/FloraBusiness.php';
include '../Business/NationalParkBusiness.php';

//obtener datos
$name=$_GET['txtName']; //variable global desde el php
$parkName=$_GET['txtParkName'];
$description=$_GET['txtDescription'];
$id = $_GET['hdnID'];
$idPark = $_GET['hdnParkID'];
$abundance = $_GET['txtAbundance'];
$period = $_GET['txtPeriod'];


$floraBusiness = new FloraBusiness();
$parkBusiness = new NationalParkBusiness();
if($_GET['btnSearchFlora']){ //se presiono el boton Search
    
    //validar de que venga algo
    if (strlen($name) > 0 && strlen($parkName) > 0) {

        //buscar el parque y traer el ID
        $park = $parkBusiness->getParkByName($parkName);
        
        if(strlen($park->name) != NULL){//significa que el parque existe
            //buscar la flora que se va a actualizar para traer los datos
            $currentFlora = $floraBusiness->getFloraByName($name, $park->id);
            
            if(strlen($currentFlora->name) != NULL){//la fauna si existe en ese parque
                header("location: ../Presentation/update_flora.php?flora=" .
                    $currentFlora->name . "&idPark=" .
                    $park->id . "&parkName=" .
                    $park->name . "&id=" .
                    $currentFlora->id . "&description=" .
                    $currentFlora->description . "&abundance=" .
                    $currentFlora->abundance . "&floweringPeriod=" .
                    $currentFlora->floweringPeriod);
            }else{
                header("location: ../Presentation/update_flora.php?error=not_exists");
            }//end if/else
        }else{
            header("location: ../Presentation/update_flora.php?error=park_not_founded");
        }//end if/else
        
    }  else {
            header("location: ../Presentation/update_flora.php?error=empty_field");
        }//end if/else
    
}else if($_GET['btnUpdateFlora']){
    if (strlen($name) > 0 && strlen($description) > 0 && strlen($parkName) > 0 
        && strlen($abundance) > 0 && strlen($period) > 0) {//campos llenos
        
        $updatedFlora = new Flora($id, $name, $abundance, $period, $description, $idPark);
        
        $result = $floraBusiness->updateFlora($updatedFlora);
        if($result == 1){
            header("location: ../Presentation/update_flora.php?update=sucess");
        }else{
            header("location: ../Presentation/update_flora.php?update=failed");
        }
        
    } else {
        //es para devolverlo si no inserta todos los datos
        header("location: ../Presentation/update_flora.php?error=empty_field");
    }//end if/else
}//end if else
?>
