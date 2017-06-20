<?php

include './RangerBusiness.php';
include './NationalParkBusiness.php';

//obtener datos
$nameUser = $_GET['txtUserName']; //variable global desde el php
$name = $_GET['txtName'];
$password = $_GET['txtPassword'];
$passwordNew = $_GET['txtPasswordNew'];
$park = $_GET['txtPark'];
$id = $_GET['hdnID'];

if ($_GET['btnSearhUpdateRanger']) { //se presiono el boton Search
    //buscar el parque y traer la informacion
    //validar de que venga algo
    if (strlen($nameUser) > 0) {

        $rangerBusiness = new RangerBusiness();
        $currentRanger = $rangerBusiness->getRangerByUsername($nameUser);

        if (strlen($currentRanger->name) != NULL) {
            $parkBusiness = new NationalParkBusiness();
            $parkB = $parkBusiness->getParkById($currentRanger->idPark);

            header("location: ../Presentation/update_ranger.php?name=" .
                    $currentRanger->name . "&user=" .
                    $currentRanger->username . "&password=" .
                    $currentRanger->password . "&park=" .
                    $parkB->name . "&id=" .
                    $currentRanger->id );
        } else {
            header("location: ../Presentation/update_ranger.php?error=ranger_not_exist");
        }//end if else
    } else {
        header("location: ../Presentation/update_ranger.php?error=empty_field");
    }//end if/else
} else if ($_GET['btnUpdateRanger']) {
    
    if (strlen($nameUser) > 0 && strlen($name) > 0 &&
            strlen($password) > 0 &&strlen($passwordNew) > 0 && strlen($park) > 0) {

        $rangerBusiness = new RangerBusiness();
        $existRanger = $rangerBusiness->getRangerByUsername($nameUser);

        $parkBusiness = new NationalParkBusiness();
        $existPark = $parkBusiness->getParkByName($park);

        if ($existPark->name != '') {
            
            if($existRanger->username != ''){
                
                if($existRanger->password == $password){
            $ranger = new Ranger($id, $name, $existPark->id, $existRanger->username, $passwordNew);

            $result = $rangerBusiness->updateRanger($ranger);
            
            if ($result == 1) {
                header("location: ../Presentation/update_ranger.php?update=sucess");
            } else {
                header("location: ../Presentation/update_ranger.php?update=failed");
            }
            
            
        } else {
            //es para devolverlo si no inserta todos los datos
            header("location: ../Presentation/update_ranger.php?error=incorrect_password");
        }
        } else {
            //es para devolverlo si no inserta todos los datos
            header("location: ../Presentation/update_ranger.php?error=ranger_not_exist");
        }
        } else {
            //es para devolverlo si no inserta todos los datos
            header("location: ../Presentation/update_ranger.php?error=park_not_exist");
        }
    } else {
        //es para devolverlo si no inserta todos los datos
        header("location: ../Presentation/update_ranger.php?error=empty_field");
    }//end if/else
}//end if else
?>