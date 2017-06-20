<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>National Parks</title>
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
        include '../Business/NationalParkBusiness.php';
       ?>
        
    </head>
    <body>
         <?php        
        include 'Menu.php';
        
       ?>    
			
        <div id="templatemo_content">

            <div id="main_column">

                <h2><big>Costa Rica Famous National Parks</big></h2>
              <br><br><br><br>
                <ul class="list_01">
                    
                    <h1>
                           <?php  
                                //traer todos los parques nacionales de la BD
                                $parkBusiness = new NationalParkBusiness();
                                
                                $parks = $parkBusiness->getAllParks();
                                
                                foreach ($parks as $currentPark) {
                            ?> 
                             <li><a href="<?php echo "../Business/ParkGetAction.php?txtPark=" . $currentPark->name ?> " class="current fast"> <?php echo $currentPark->name ?> </a></li>
                             <img src=<?php echo "../gallery/parksHeader/" . $currentPark->id . ".jpg" ?> alt="1" width="530" height="300" />    
                             <br><br><br><br>
                            <?php
                                }//end for      
        
                            ?>   
                          <br><br><br><br><br><br>
                    
                    </h1>
                   
                </ul>
                

            </div> <!-- end of main column -->

            <div id="side_column">                                          
                <div class="cleaner_h20"></div>                
               <div class="side_column_box">                
                    
                    
                </div>


                </div> <!-- end of side column -->

                <div class="cleaner"></div>

            </div> <!-- end of content -->
<?php
        include 'footer.php';
        ?>