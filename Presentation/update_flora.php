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
        <title>National Parks - UPDATE FLORA</title>
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
                    <h1>
                       Administrative Settings
                           
                    </h1>
                </div>

             

            </div> <!-- end of site title bar -->
        </div> <!-- end of site title bar wrapper -->

        <?php
        include '../Business/FloraBusiness.php';
        global $name;
        global $idPark;
        global $parkName;
        global $description;
        global $id;
        global $abundance;
        global $floweringPeriod;
        ?>
    </head>
    <body>

        <div id="templatemo_menu_wrapper">

            <div id="templatemo_menu">

                <ul>
                    <li><a href="Ranger_index.php" class="current fast">Profile</a></li>
                    <li><a href="Edit_profile.php" class="current fast">Edit Profile</a></li>
                    <li><a href="Edit_all.php">Edit options</a></li>
                </ul>

            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">
                <h2>Update Flora</h2>
                
                <!-- Formulario para actualizar la fauna de un parque -->
                <p>
                    <form action="../Business/FloraUpdateAction.php" method="get">
                        
                       <?php 
                         
                          $name=$_GET['flora'];
                          $idPark=$_GET['idPark'];
                          $parkName = $_GET['parkName'];
                          $description=$_GET['description'];
                          $id = $_GET['id'];
                          $abundance=$_GET['abundance'];
                          $floweringPeriod= $_GET['floweringPeriod'];;
                         ?>           

                        <input type="hidden" name="hdnID" id="hdnID" value="<?php echo $id ?>" />
                        <input type="hidden" name="hdnParkID" id="hdnParkID" value="<?php echo $idPark ?>" />
                        <br>Name:</br>
                        <input type="textarea" name="txtName" id="txtName" size="100" value="<?php echo $name ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>Park's Name:</br>
                        <input type="textarea" name="txtParkName" id="txtParkName" size="100" value="<?php echo $parkName ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <input type="submit" name="btnSearchFlora" id="btnSearchFlora" value="Search" alt="Subscribe" class="submitbutton" />

                        <br>Description: </br>
                        <input type="textarea" name="txtDescription" id="txtDescription" size="100" value="<?php echo $description ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>Abundance: </br>
                        <input type="textarea" name="txtAbundance" id="txtAbundance" size="100" value="<?php echo $abundance ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>Flowering Period: </br>
                        <input type="textarea" name="txtPeriod" id="txtPeriod" size="100" value="<?php echo $floweringPeriod ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <input type="submit" name="btnUpdateFlora" id="btnUpdateFauna" value="Update" alt="Subscribe" class="submitbutton" />
                         
                          <?php
                                    
                                    //para poder cambiar el color al texto y traer el error del url
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == "empty_field") {
                                            ?> <div style="color: red">
                                                Empty fields.
                                            </div>
                                            <?php
                                        } else if ($_GET['error'] == "not_exists") {
                                            ?> <div style="color: red">
                                                This Flora doesn't exists.
                                            </div>
                                            <?php
                                        }else if ($_GET['error'] == "park_not_founded") {
                                            ?> <div style="color: red">
                                                The National Park doesn't exists.
                                            </div>
                                            <?php
                                        }
                            } else {
                                if (isset($_GET['success'])) {
                                            ?><br> <div style="color: #599BC5">
                                                    This Flora was updated.
                                                </div>
                                 <?php
                                 
                                } 
                                        }
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
}?>