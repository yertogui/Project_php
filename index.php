<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>National Parks of Costa Rica - HOME</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
        <link href="css/s3slider.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/validate.js"></script>
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
        include './Presentation/Header.php';
      ?> 
        
       </head>
    <body>
      
        <?php        
        include './Presentation/Banner.php';
        include './Presentation/Menu.php';
        ?>
       
        <div id="templatemo_content">

            <div id="main_column">

                <div class="section_w560">
                    <h2>Description</h2>

                    <img class="image_wrapper fl_image" src="gallery/puraVida.jpg" alt="image" />

                    <p>Costa Rica's national park system is a network of protected rainforests, tropical dry forests, cloud forests, marine areas, and wetlands. Costa Rica has been a world leader in conservation policies with protected areas that encompass over 25 percent of its total landmass - the highest in the world. </p>
                    <p></p>

                    <div class="cleaner"></div>
                </div>

                <div class="cleaner_h50"></div>

                <div class="section_w560">

                    <h2>Support Us</h2>

                    <img class="image_wrapper fr_image" src="gallery/monkey.jpg" alt="image" />              

                    <p>The best way to support these progressive and sustainable conservation policies is to visit national parks during your visit. All fees and donations support the local community and park maintenance. Check out our Costa Rica National Parks, Rivers and Reserves Map to view the location of these natural attractions. </p>
                    <p>Besides Costa Rica's National Parks there are dozens of private nature reserves that have been established to protect the natural habitat and biodiversity.</p>
                    <div class="cleaner_h20"></div>
                    


                    <div class="button bottom_01"><a href="#">View All</a></div>    
                </div>

                <div class="cleaner"></div>
            </div> <!-- end of main column -->

            <div id="side_column">                                          
                <div class="cleaner_h20"></div>                
                <div class="side_column_box">                
                    <h2>Log in...</h2>
                    
                    <form action="./Business/RangerLoginAction.php" method="get">
                        <br>Enter your Username...</br>
                        <input type="text" name="txtLoginUser" id="txtLoginUser" size="10" class="inputfield"onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorUser" style="color: red">*</div>
                        <br>Enter your password...</br>
                        <input type="password" name="txtLoginPassword" id="txtLoginPassword" size="10" class="inputfield"onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorPassword" style="color: red">*</div>
                        <input type="submit" onclick="return validateLogIn();" name="btnLoginGetInto" id="btnLoginGetInto" value="Sign in"  class="submitbutton" title="Search" />

                            <?php
                               //para poder cambiar el color al texto y traer el error del url
                               if (isset($_GET['error'])) {
                                   if ($_GET['error'] == "empty_field") {
                                     ?> <p style="color: red">
                                       Empty fields.
                                                    </p>
                                                    <?php
                                     } else if ($_GET['error'] == "ranger_not_exists") {
                                     ?> <p style="color: red">
                                       The user name does'nt exists.
                                                    </p>
                                                    <?php
                                         
                                     }//end else/if rangerExists
                                     else if ($_GET['error'] == "incorrect_password") {
                                     ?> <p style="color: red">
                                       The Password is incorrect.
                                                    </p>
                                                    <?php
                                         
                                     }
                                 } else {
                                    if (isset($_GET['success'])) {
                                      ?> <p style="color: #599BC5">
                                        
                                         </p>
                                         <?php
                                         }//end if sucess
                                  }//end else 
                                            ?> 
                    </form>
                </div>

                <div id="side_column">                                          
                    <div class="cleaner_h20"></div>                
                    <div class="side_column_box"> 
                    <div class="cleaner_h20"></div>               
                        <h2>Sign in (Only for Rangers)</h2>
                        
                        
                        <form action="./Business/RangerInsertAction.php" method="get" id="rangerInsert">
                        <br>Enter your Name...</br>
                        <input type="text" name="txtName" id="txtName" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorName2" style="color: red">* Obligatory</div> 
                        <br>Enter your username...</br>
                        <input type="text" name="txtUser" id="txtUser" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorUser2" style="color: red">* Obligatory</div> 
                        <br>Enter your password...</br>
                        <input type="password" name="txtPassword" id="txtPassword" size="10" class="inputfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorPassword2" style="color: red">* Obligatory</div> 
                        <br>Enter your National park...</br>
                        <input type="text" name="txtPark" id="txtPark" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorPark" style="color: red">* Obligatory</div> 
                        <br>Enter National park ID...</br>
                        <input type="text" name="txtID" id="txtID" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                        <div id="msgErrorID" style="color: red">* Obligatory</div> 

                        <input type="submit" onclick="validateIR();" name="btnGetInto" id="btnGetInto" value="Get into" alt="Subscribe" class="submitbutton" />
                    
                        <?php
                               //para poder cambiar el color al texto y traer el error del url
                               if (isset($_GET['error'])) {
                                   if ($_GET['error'] == "empty_field") {
                                     ?> <p style="color: red">
                                       Empty fields.
                                                    </p>
                                                    <?php
                                     } else if ($_GET['error'] == "ranger_exists") {
                                     ?> <p style="color: red">
                                       The user name exists.
                                                    </p>
                                                    <?php
                                         
                                     }//end else/if rangerExists
                                     else if ($_GET['error'] == "park_not_exists") {
                                     ?> <p style="color: red">
                                       The National Park doesn't exists.
                                                    </p>
                                                    <?php
                                         
                                     }
                                     else if ($_GET['error'] == "number_format") {
                                     ?> <p style="color: red">
                                       Number Format.
                                                    </p>
                                                    <?php
                                         
                                     }
                                 } else {
                                    if (isset($_GET['success'])) {
                                      ?> <p style="color: #599BC5">
                                         
                                         </p>
                                         <?php
                                         }//end if sucess
                                  }//end else 
                                            ?> 
                             </form>
                    </div>

                    <!--Contador de visitas -->
                    <center>
                           <br><br><br>
                           <a href="http://www.contadorvisitasgratis.com" target="_Blank" title="Visitors Counter">Visitors Counter</a><br>
                           <script type="text/javascript" src="http://counter5.freecounter.ovh/private/countertab.js?c=b0892e4566b7c52c0404ffabadb1e216"></script>
                    </center>
                
                 </div> <!-- end of side column -->

                <div class="cleaner"></div>

            </div> <!-- end of content -->
<?php
        include './Presentation/footer.php';

        ?>

</html>

<!--CODIGO JAVASCRIPT -->
<script type="text/javascript">

    //para ocultar los * al principio 
    document.getElementById('msgErrorUser').style.visibility = "hidden"; 
    document.getElementById('msgErrorPassword').style.visibility = "hidden"; 
    document.getElementById('msgErrorUser2').style.visibility = "hidden"; 
    document.getElementById('msgErrorPassword2').style.visibility = "hidden"; 
    document.getElementById('msgErrorPark').style.visibility = "hidden"; 
    document.getElementById('msgErrorID').style.visibility = "hidden"; 
    document.getElementById('msgErrorName2').style.visibility = "hidden"; 
</script>