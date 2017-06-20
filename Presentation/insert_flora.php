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
                </ul>

            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">
                    <h2>Insert Flora</h2>
                  <p>
                         <form action="../Business/FloraInsertAction.php" method="get">
                        <br>National Park's Flora</br>
                        <input type="text" name="txtFlora" id="txtNameElement" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>Description</br>
                        <textarea row="60" cols="30" name="txtDescription" id="txtDescription"></textarea>
                        <br>Abundance</br>
                        <input type="textarea" name="txtAbundance" id="txtAbundance" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>Flowering Period</br>
                        <input type="textarea" name="txtFloweringPeriod" id="txtFloweringPeriod" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>National Park's name</br>
                        <input type="textarea" name="txtPark" id="txtPark" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        
                        <input type="submit" name="btnInsertFlora" id="btnInsertFlora" value="Insert" alt="Subscribe" class="submitbutton" />
                    
                         <?php
                               //para poder cambiar el color al texto y traer el error del url
                               if (isset($_GET['error'])) {
                                   if ($_GET['error'] == "empty_field") {
                                     ?> <p style="color: red">
                                       Empty fields.
                                                    </p>
                                                    <?php
                                     } else if ($_GET['error'] == "flora_exists") {
                                     ?> <p style="color: red">
                                       The Flora exists in the park.
                                                    </p>
                                                    <?php
                                         
                                  }//else
                                  else if ($_GET['error'] == "park_not_exists") {
                                     ?> <p style="color: red">
                                       The National Park does'nt exists.
                                                    </p>
                                                    <?php
                                         
                                  }//else
                                 } else {
                                    if (isset($_GET['success'])) {
                                      ?> <p style="color: #599BC5">
                                         The Flora was inserted.
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
}   ?>
          
