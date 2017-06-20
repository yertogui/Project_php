<?php
//CLASE DEL ACTION QUE INSERTA

include './RangerBusiness.php';

//obtener datos
$user = $_GET['txtUser'];
$password = $_GET['txtPassword'];

//validar de que venga algo
if (strlen($user) > 0 && strlen($password) > 0) {

    $rangerBusiness = new RangerBusiness();

    $existsRanger = $rangerBusiness->getRangerByUsername($user);
    if ($existsRanger->name != '') { //no existe ese usuario
        if ($existsRanger->password == $password) {

            $result = $rangerBusiness->deleteRanger($user);
            ?>
            <form method="POST" action="./closeSessionRanger.php">
                <input type="hidden" name="close_session" id="close_session">

            </form>
            <?php
            header("location: ../index.php?success=deleted");
        } else {
            header("location: ../Presentation/delete_profile.php?error=incorrect_password");
        }//end else
    } else {
        header("location: ../Presentation/delete_profile.php?error=user_not_exists");
    }//end else
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/delete_profile.php?error=empty_field");
}//end else
?>
