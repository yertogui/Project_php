<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>National Parks - GALLERY</title>
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

        <?php
        include 'Header.php';
        ?>
    </head>
    <body>
        <?php
        include 'Menu.php';
        ?>
        <div id="templatemo_content">

            <div id="main_column">

               <ul class="slider"> 
       <li><img height="300" width="500" src="../gallery/parksHeader/island.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/1.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/10.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/13.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/14.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/2.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/5.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/6.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/7.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/8.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/9.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/lasBaulas.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/turri.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/gandoca.jpg" /></li>
       <li><img height="300" width="500" src="../gallery/parksHeader/sanlucas.jpg" /></li>
       
               </ul>

                <div class="cleaner"></div>
            </div> <!-- end of main column -->


            <div id="templatemo_footer_wrapper">

                <div id="templatemo_footer">

                    <ul class="footer_menu">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../Presentation/Gallery.php">Gallery</a></li>
                    </ul>

                    Copyright © 2016 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->| 
                    Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
                </div> <!-- end of footer -->

            </div> <!-- end of footer wrapper -->

    </body>
  
</html>		