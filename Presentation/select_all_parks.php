      <?php 
session_start();

if(empty($_SESSION['user'])){
  session_start();
  session_destroy();
   header("location: ../index.php?error=session_open");
}else{
    

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>National Parks </title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link href="../css/s3slider.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/s3Slider.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#slider').s3Slider({
                    timeOut: 3000
                });
            });
        </script>

        <script language="javascript" type="text/javascript">
            function clearText(field)
            {
                if (field.defaultValue == field.value)
                    field.value = '';
                else if (field.value == '')
                    field.value = field.defaultValue;
            }
        </script>
        
        <div id="templatemo_site_title_bar_wrapper">

            <div id="templatemo_site_title_bar">
                <div id="site_title">
                   
                </div>

                <ul id="top_menu">
                    <li class="first"><a href="#">Profile</a></li>
                    <li><a href="#">Edit Profile</a></li>
                    <li><a href="#">Edit Parks Information</a></li>
                    <li><a href="#">Exit</a></li>
                </ul>

            </div> <!-- end of site title bar -->
        </div> <!-- end of site title bar wrapper -->


    </head>
    <body>
      
        <div id="templatemo_menu_wrapper">

            <div id="templatemo_menu">

                <ul>
                    <li><a href="Ranger_index.php" class="current fast">Profile</a></li>
                    <li><a href="Edit_profile.php" class="current fast">Edit Profile</a></li>
                    <li><a href="Edit_park.php">Edit Parks</a></li>
                    <li><a href="#">Edit Gallery</a></li>
                    <li><a href="index.php">Exit</a></li>
                </ul>

            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">
                <h2>List of National Parks</h2>
                  <p>
                    </p>


                 
                </div>

                <div class="cleaner"></div>
            </div> <!-- end of main column -->

                <div class="cleaner"></div>

            </div> <!-- end of content -->
<?php
        include './Presentation/footer.php';
}  ?>
          
