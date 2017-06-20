<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>National Parks WELCOME</title>
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
                        <a href="#">Administrative Tasks</a>
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

            </div> <!-- end of menu -->

        </div> <!-- end of menu wrapper -->

        <div id="templatemo_content">

            <div id="main_column">

                  <p>
                         <form action="#" method="get">
                        <br>Name</br>
                        <input type="text" name="txtNameRangerEdit" id="txtNameRangerEdit" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>UserName</br>
                        <input type="textarea" name="txtUserNameRangerEdit" id="txtUserNameRangerEdit" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <br>Password</br>
                        <input type="password" name="txtPasswordRangerEdit" id="txtPasswordRangerEdit" size="100" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        
                        <input type="submit" name="btnRangerEdit" id="btnRangerEdit" value="Update" alt="Subscribe" class="submitbutton" />
                    </form>
                    
                    </p>


                 
                </div>

                <div class="cleaner"></div>
            </div> <!-- end of main column -->

                <div class="cleaner"></div>

            </div> <!-- end of content -->
<?php
        include 'footer.php';
        ?>
          

