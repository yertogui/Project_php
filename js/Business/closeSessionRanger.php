<?php

if(isset($_POST['close_session'])){
    session_start();
    session_destroy();
     header("location: ../index.php");
}
?>
