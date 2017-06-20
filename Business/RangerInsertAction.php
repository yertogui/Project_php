<?php

//CLASE DEL ACTION QUE INSERTA

include './RangerBusiness.php';
include './NationalParkBusiness.php';

//obtener datos
$name = $_GET['txtName'];
$Park = $_GET['txtPark'];
$parkID = $_GET['txtID'];
$username = $_GET['txtUser'];
$password = $_GET['txtPassword'];

$rangerBusiness = new RangerBusiness();
$parkBusiness = new NationalParkBusiness();

//validar de que venga algo
if (strlen($name) > 0 && strlen($Park) > 0 && strlen($username) > 0 && strlen($password) > 0
        && strlen($parkID) > 0) {
   
    if(is_numeric($parkID)){
        $ranger = new Ranger(0, $name, $Park, $username, $password);
    

        $existsRanger = $rangerBusiness->getRangerByUsername($username);
        $existsPark = $parkBusiness->getParkByName($Park);

        if ($existsRanger->username == '') { //no existe ese usuario

            if ($existsPark->name != '' && $existsPark->id == $parkID) { //Que si exista ese parque nacional

                $rangerInsert= new Ranger(0, $name, $existsPark->id, $username, $password);
                $result = $rangerBusiness->insertRanger($rangerInsert);

                session_start();

                $_SESSION['user']=$username;

                header("location: ../Presentation/Ranger_index.php?success=insert");
            }else{
                header("location: ../index.php?error=park_not_exists");
            }
        } else {
            header("location: ../index.php?error=ranger_exists");
        }//end else
    }else{
        header("location: ../index.php?error=number_format");
    }//end if /else
    
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../index.php?error=empty_field");
}//end else
?>