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
        <title>National Parks - DELETE</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="../css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link href="../css/s3slider.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/validate.js"></script>
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
                    <h1>
                        Administrative Settings
                    </h1>
                </div>

               

            </div> <!-- end of site title bar -->
        </div> <!-- end of site title bar wrapper -->


    </head>
    <body>
      
        <div id="templatemo_menu_wrapper">

            <div id="templatemo_menu">
<ul>
                    <li><a href="Ranger_index.php" class="current fast">Profile</a></li>
                    <li><a href="Edit_profile.php" class="current fast">Edit Profile</a></li>
                    <li><a href="Edit_all.php">Edit Options</a></li>
                     <form method="POST" action="../Business/closeSessionRanger.php">
                    <input type="hidden" name="close_session" id="close_session">
                        <input  type="submit" class="bottom" name="close_session_ranger" id="close_session_ranger" value="Log Out">
                    
                </form>
                </ul>


            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">
                <h2>Delete National Park</h2>
                  <p>
                         <form action="../Business/ParkDeleteAction.php"   method="get">
                        <br>National Park`s name</br>
                        <input type="text" name="txtName" id="txtName" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorName" style="color: red">*</div>
                        <input type="submit" onclick="return validateName();" name="btnDeletePark" id="btnDeletePark" value="Delete" alt="Subscribe" class="submitbutton" />
                    
                         <?php
                               //para poder cambiar el color al texto y traer el error del url
                               if (isset($_GET['error'])) {
                                   if ($_GET['error'] == "empty_field") {
                                     ?> <p style="color: red">
                                       Empty fields.
                                                    </p>
                                                    <?php
                                     } else if ($_GET['error'] == "park_not_exists") {
                                     ?> <p style="color: red">
                                       The National Park does'nt exists.
                                                    </p>
                                                    <?php
                                         
                                  
                                      }else if ($_GET['error'] == "failed") {
                                     ?> <p style="color: red">
                                       The National Park couldn't be deleted.
                                                    </p>
                                                    <?php
                                         
                                  }//else
                                 } else {
                                    if (isset($_GET['success'])) {
                                      ?> <p style="color: #599BC5">
                                         The National Park was deleted.
                                         </p>
                                         <?php
                                         }//end if sucess
                                  }//end else 
                                            ?> 
                         </form>
                        
                    </p>


                 
                </div>

                <div class="cleaner"></div>
            </div> <!-- end of main column -->

                <div class="cleaner"></div>

            </div> <!-- end of content -->
<?php
        include 'footer.php';
}    ?>
  
</html>

<!--CODIGO JAVASCRIPT -->
<script type="text/javascript">

    //para ocultar los * al principio 
    document.getElementById('msgErrorName').style.visibility = "hidden"; 
</script>