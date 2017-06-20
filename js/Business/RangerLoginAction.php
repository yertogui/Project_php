<?php

//CLASE DEL ACTION QUE INSERTA

include './RangerBusiness.php';

//obtener datos
$user = $_GET['txtLoginUser'];
$password = $_GET['txtLoginPassword'];

//validar de que venga algo
if (strlen($user) > 0 && strlen($password) > 0) {
    //$id,$name,$idPark, $username, $password
    $rangerBusiness = new RangerBusiness();

    $existsRanger = $rangerBusiness->getRangerByUsername($user);
    
    if ($existsRanger->username != '') { //existe ese usuario
        if ($existsRanger->password == $password) { //Que las contraseñas sean iguales
            
            session_start();
            
            $_SESSION['user']=$existsRanger->username;
            
            header("location: ../Presentation/Ranger_index.php?success=login&user=$user");
        } else {
            header("location: ../index.php?error=incorrect_password");
        }
    } else {
        header("location: ../index.php?error=ranger_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../index.php?error=empty_field");
}//end else
?>
