<?php

include '../Business/FaunaBusiness.php';
include '../Business/NationalParkBusiness.php';

//obtener datos
$name=$_GET['txtName']; //variable global desde el php
$parkName=$_GET['txtParkName'];
$description=$_GET['txtDescription'];
$id = $_GET['hdnID'];
$idPark = $_GET['hdnParkID'];


$faunaBusiness = new FaunaBusiness();
$parkBusiness = new NationalParkBusiness();
if($_GET['btnSearchFauna']){ //se presiono el boton Search
    
    //validar de que venga algo
    if (strlen($name) > 0 && strlen($parkName) > 0) {

        //buscar el parque y traer el ID
        $park = $parkBusiness->getParkByName($parkName);
        
        if(strlen($park->name) != NULL){//significa que el parque existe
            //buscar la fauna que se va a actualizar para traer los datos
            $currentFauna = $faunaBusiness->getFaunaByName($name, $park->id);
            
            if(strlen($currentFauna->name) != NULL){//la fauna si existe en ese parque
                header("location: ../Presentation/update_fauna.php?fauna=" .
                    $currentFauna->name . "&idPark=" .
                    $park->id . "&parkName=" .
                    $park->name . "&id=" .
                    $currentFauna->id . "&description=" .
                    $currentFauna->description);
            }else{
                header("location: ../Presentation/update_fauna.php?error=not_exists");
            }//end if/else
        }else{
            header("location: ../Presentation/update_fauna.php?error=park_not_founded");
        }//end if/else
        
    }  else {
            header("location: ../Presentation/update_fauna.php?error=empty_field");
        }//end if/else
    
}else if($_GET['btnUpdateFauna']){
    if (strlen($name) > 0 && strlen($description) > 0 && strlen($parkName) > 0) {
        $updatedFauna = new Fauna($id, $name, $description, $idPark);
        
        $result = $faunaBusiness->updateFauna($updatedFauna);
        if($result == 1){
            header("location: ../Presentation/update_fauna.php?update=sucess");
        }else{
            header("location: ../Presentation/update_fauna.php?update=failed");
        }
        
    } else {
        //es para devolverlo si no inserta todos los datos
        header("location: ../Presentation/update_fauna.php?error=empty_field");
    }//end if/else
}//end if else
?>
