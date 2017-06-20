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
  <script type="text/javascript">
function validate(){
	if(document.getElementById('txtPasswordNew').value.length < 5) {
		alert('The password must be at least 5 characters.');
		}else{
		document.getElementById('rangerUpdate').submit();
	}
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
                    <li><a href="Ranger_index.php" class="current fast">Index</a></li>
                    <li><a href="Edit_profile.php" class="current fast">Edit Profile</a></li>
                    <li><a href="Edit_all.php">Edit Options</a></li>
                    <li><a href="#">Edit Gallery</a></li>
                    <li><a href="../index.php">Exit</a></li>
                </ul>

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
                    <li><a href="Ranger_index.php" class="current fast">Profile</a></li>
                    <li><a href="Edit_profile.php" class="current fast">Edit Profile</a></li>
                    <li><a href="Edit_all.php">Edit Options</a></li>
                </ul>

            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">
                <h2>Update National Park</h2>
                
                <!-- Formulario para actualizar un parque nacional-->
                <p>
                    <form action="../Business/RangerUpdateAction.php" method="get" id="rangerUpdate">
                        
                         <?php 
                          
                          $id=$_GET['id'];
                          $name=$_GET['name'];
                          $user=$_GET['user'];
                          $password=$_GET['password'];
                          $park=$_GET['park'];
                         ?>           

                        <input type="hidden" name="hdnID" id="hdnID" value="<?php echo $id; ?>" />
                        <br>User Name:</br>
                        <input type="textarea" name="txtUserName" id="txtName" size="100" value="<?php echo $user; ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <input type="submit" name="btnSearhUpdateRanger" id="btnSearhUpdatePark" value="Search" alt="Subscribe" class="submitbutton" />
  
                                        
                        <br>Name</br>
                        <input type="textarea" name="txtName" id="txtDescription" size="100" value="<?php echo $name; ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>New Password</br>
                        <input type="password" name="txtPasswordNew" id="txtPasswordNew" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>National Park</br>
                        <input type="textarea" name="txtPark" id="txtContact" size="100" value="<?php echo $park ?>" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />

                         <br>Your Password</br>
                        <input type="password" name="txtPassword" id="txtLocation" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        
                         <input type="submit" name="btnUpdateRanger" id="btnUpdatePark" value="update" alt="Subscribe" class="submitbutton" />
                         
                          <?php
                                    
                                    //para poder cambiar el color al texto y traer el error del url
                                    if (isset($_GET['error'])) {
                                        if ($_GET['error'] == "empty_field") {
                                            ?> <div style="color: red">
                                                Empty fields.
                                            </div>
                                            <?php
                                        } else if ($_GET['error'] == "park_not_exist") {
                                            ?> <div style="color: red">
                                                The National Park doesn't exists.
                                            </div>
                                            <?php
                                                                                
                                        } else if ($_GET['error'] == "ranger_not_exist") {
                                            ?> <div style="color: red">
                                                The Ranger doesn't exists.
                                            </div>
                                            <?php
                                        
                                        } else if ($_GET['error'] == "incorrect_password") {
                                            ?> <div style="color: red">
                                                The Password is incorrect.
                                            </div>
                                            <?php
                                        }
                                        
                                        
                            } else {
                                if ($_GET['update'] == "sucess") {
                                            ?><br> <div style="color: #599BC5">
                                                    The Ranger was updated.
                                                </div>
                                 <?php
                                 
                                }elseif ($_GET['update'] == "failed"){
                                   ?><br> <div style="color: #599BC5">
                                                    The Ranger does'nt updated.
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