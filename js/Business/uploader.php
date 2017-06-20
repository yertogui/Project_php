<?php

include './NationalParkBusiness.php';

$parkName = $_POST['txtPark'];

$parkBusiness = new NationalParkBusiness();

$park = $parkBusiness->getParkByName($parkName);

if($park->name != ''){//el parque si existe
    //Codigo para subir imagenes
    $target_path = "../gallery/parksHeader/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

    if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
        rename($target_path, "../gallery/parksHeader/" . $park->id . ".jpg");
        header("location: ../Presentation/insert_park.php?success=image_inserted");
    } else{
        
        header("location: ../Presentation/insert_park.php?error=image_not_inserted");
    }//end if/else
}else{
    header("location: ../Presentation/insert_park.php?error=park_not_exists");
}//end if/else

?>
