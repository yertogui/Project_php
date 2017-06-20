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
        <title>National Parks - UPDATE</title>
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

        <?php
        include '../Business/NationalParkBusiness.php';
        global $name;
        global $contact;
        global $location;
        global $description;
        global $id;
        ?>
    </head>
    <body>

        <div id="templatemo_menu_wrapper">

            <div id="templatemo_menu">

                <ul>
                    <li><a href="Ranger_index.php" class="current fast">Index</a></li>
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
                <h2>Update National Park</h2>
                
                <!-- Formulario para actualizar un parque nacional-->
                <p>
                    <form action="../Business/ParkUpdateAction.php" method="get">
                        
                         <?php 
                          
                          $name=$_GET['park'];
                          $location=$_GET['location'];
                          $contact=$_GET['contact'];
                          $description=$_GET['description'];
                          $id = $_GET['id'];
                         ?>           

                        <input type="hidden" name="hdnID" id="hdnID" value="<?php echo $id ?>" />
                        <br>Park Name:</br>
                        <input type="textarea" name="txtName" id="txtName" size="100" value="<?php echo $name ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorName" style="color: red">* Obligatory</div>
                        <input type="submit" onclick="return validateName();" name="btnSearhUpdatePark" id="btnSearhUpdatePark" value="Search" alt="Subscribe" class="submitbutton" />
  
                                        
                        <br>Description</br>
                        <input type="textarea" name="txtDescription" id="txtDescription" size="100" value="<?php echo $description ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorDescription" style="color: red">* Obligatory</div>
                        <br>Location</br>
                        <input type="textarea" name="txtLocation" id="txtLocation" size="100" value="<?php echo $location ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorLocation" style="color: red">* Obligatory</div>
                        <br>Contact</br>
                        <input type="textarea" name="txtContact" id="txtContact" size="100" value="<?php echo $contact ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorContact" style="color: red">* Obligatory</div>
                         <input type="submit" onclick="return validateFieldsUP();" name="btnUpdatePark" id="btnUpdatePark" value="update" alt="Subscribe" class="submitbutton" />
                         
                          <?php
                                    
                                    //para poder cambiar el color al texto y traer el error del url
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == "empty_field") {
                                            ?> <div style="color: red">
                                                Empty fields.
                                            </div>
                                            <?php
                                        } else if ($_GET['error'] == "not_exist") {
                                            ?> <div style="color: red">
                                                The park doesn't exists.
                                            </div>
                                            <?php
                                        }
                            } else {
                                if (isset($_GET['success'])) {
                                            ?><br> <div style="color: #599BC5">
                                                    The park was updated.
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
          
</html>

<!--CODIGO JAVASCRIPT -->
<script type="text/javascript">

    //para ocultar los * al principio 
    document.getElementById('msgErrorName').style.visibility = "hidden"; 
    document.getElementById('msgErrorDescription').style.visibility = "hidden"; 
    document.getElementById('msgErrorLocation').style.visibility = "hidden"; 
    document.getElementById('msgErrorContact').style.visibility = "hidden"; 

</script>
		