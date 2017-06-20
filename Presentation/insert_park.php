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
        <title>National Parks - INSERT</title>
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
                        <a href="#">Administrative Settings
                        </a>
                    </h1>
                </div>



            </div> <!-- end of site title bar -->
        </div> <!-- end of site title bar wrapper -->
<?php
global $idParkImage;

?>
       
    </head>
    <body>

        <div id="templatemo_menu_wrapper">

            <div id="templatemo_menu">


                <ul>
                    <li><a href="Ranger_index.php" class="current fast">Profile</a></li>
                    <li><a href="Edit_profile.php" class="current fast">Edit Profile</a></li>
                    <li><a href="Edit_all.php">Edit Options</a></li>
                </ul>

            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">
                <h2>Insert National Park</h2>
                <p>
                    <form action="../Business/ParkInsertAction.php" method="get">
                        <br>National Park name</br>
                        <input type="text" name="txtPark" id="txtPark" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)"/>
                        <div id="msgErrorName" style="color: red">*</div>
                        <br>Location</br>
                        <input type="textarea" name="txtLocation" id="txtLocation" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorLocation" style="color: red">*</div> 
                        <br>Contact</br>
                        <input type="textarea" name="txtContact" id="txtContact" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorContact" style="color: red">*</div> 
                        <br>Latitude</br>
                        <input type="textarea" name="txtLatitude" id="txtLatitude" size="20" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorLatitude" style="color: red">*</div> 
                        <br>Longitude</br>
                        <input type="textarea" name="txtLongitude" id="txtLongitude" size="20" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorLongitude" style="color: red">*</div> 
                        <br>Description</br>
                        <textarea row="150" cols="30" name="txtDescription" id="txtDescription"></textarea>
                        <div id="msgErrorDescription" style="color: red">*</div> 
                        <input type="submit" onclick="return validateFieldsIP();" name="btnInsertPark" id="btnInsertPark" value="Insert" alt="Subscribe" class="submitbutton" />

                        <?php
                        //para poder cambiar el color al texto y traer el error del url
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "empty_field") {
                                ?> <p style="color: red">
                                    Empty fields.
                                </p>
                                <?php
                            } else if ($_GET['error'] == "park_exists") {
                                ?> <p style="color: red">
                                    The National Park exists.
                                </p>
                                <?php
                            }//else
                        } else {
                            if (isset($_GET['success'])) {
                                ?> <p style="color: #599BC5">
                                    The National Park was inserted.
                                </p>
                                <?php
                                    $idParkImage=$_GET['$id'];
                            }//end if sucess
                        }//end else 
                        ?> 
                    </form>

                </p>




                <div class="cleaner"></div>
            </div> <!-- end of main column -->

            <!-- Para subir imagenes-->
            <div id="side_column">                                          
                <div class="cleaner_h20"></div>                
                <div class="side_column_box">                
                    You can also upload a main picture to the park <br><br>


                                <form enctype="multipart/form-data" action="../Business/uploader.php"  method="POST">
                                    <br>National Park name:</br>
                                    <input type="text" name="txtPark" id="txtPark" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                                    <div id="msgErrorName" style="color: red">*</div>
                                    <input name="uploadedfile" type="file" />
                                    <input type="submit" onclick="return validateName();" value="Upload" />
                                
                                   <?php
                        //para poder cambiar el color al texto y traer el error del url
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "empty_field") {
                                ?> <p style="color: red">
                                    Empty fields.
                                </p>
                                <?php
                            } else if ($_GET['error'] == "image_exist") {
                                ?> <p style="color: red">
                                    The image already exists.
                                </p>
                                <?php
                            } else if ($_GET['error'] == "not_inserted") {
                                ?> <p style="color: red">
                                    The image doesn't inserted.
                                </p>
                                <?php
                            } else if ($_GET['error'] == "first_park") {
                                ?> <p style="color: red">
                                    You need first insert the National Park.
                                </p>
                                <?php
                            }//else
                        } else {
                            if (isset($_GET['success'])) {
                                ?> <p style="color: #599BC5">
                                    The Image was uploaded.
                                </p>
                                <?php
                            
                            }//end if sucess
                        }//end else 
                        ?> 
                                
                                
                                </form>
                                </div>

                                </div> <!-- end of content -->
                                <?php
                                include 'footer.php';
} ?>
          
</html>

<!--CODIGO JAVASCRIPT -->
<script type="text/javascript">

    
    
    //para ocultar los * al principio 
    document.getElementById('msgErrorName').style.visibility = "hidden"; 
    document.getElementById('msgErrorLocation').style.visibility = "hidden"; 
    document.getElementById('msgErrorLatitude').style.visibility = "hidden"; 
    document.getElementById('msgErrorLongitude').style.visibility = "hidden"; 
    document.getElementById('msgErrorContact').style.visibility = "hidden"; 
    document.getElementById('msgErrorDescription').style.visibility = "hidden"; 
    
    
  

</script>