<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>National Park</title>
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
        include '../Business/CommentBusiness.php';
        include '../Business/ParkElementBusiness.php';
        include '../Business/FaunaBusiness.php';
        include '../Business/FloraBusiness.php';
        ?>

    </head>
    <body>

        <?php
        include 'Menu.php';
        ?>

        <div id="templatemo_content">


            <div id="main_column">

                <?php
                $id = $_GET['id'];

                $parkBusiness = new NationalParkBusiness();
                $park = $parkBusiness->getParkById($id);
                $name = $park->name;
                $description = $park->description;
                $location = $park->location;
                $contact = $park->contact;
                ?>

                <h2><center><?php echo $name ?> National Park </center></h2>


                <!--Slider Images -->
                <img src=<?php echo "../gallery/parksHeader/" . $id . ".jpg" ?> alt="1" alt="1" width="560" height="300" />
                <!--Fin del Slider Images -->
                <br>
                    <h2>Description </h2>
                    <p><?php echo $description ?></p>

                    <br>
                        <h2>Location </h2>
                        <p><?php echo $location ?></p>

                        <br>

                            <h2> Elements </h2> 
                            <p>
<?php
//traer todos los elementos del parque 
$elementbusiness = new ParkElementBusiness();

$parkElements = $elementbusiness->getAllParkElements($id);

foreach ($parkElements as $element) {
    echo $element->name . "<br><br>" .
    "Description: " . $element->description . "<br><br>" .
    "__________________________________________________________
                                     <br><br>";
}//end for       
?>
                            </p>


                            <h2> Flora </h2> 

                            <p>
<?php
$floraBusiness = new FloraBusiness();

$parkFlora = $floraBusiness->getAllParkFlora($id);

foreach ($parkFlora as $element) {
    echo "Name: " . $element->name . "<br><br>" .
    "Description: " . $element->description . "<br><br>" .
    "Abundance: " . $element->abundance . "<br><br>" .
    "Flowering Period: " . $element->floweringPeriod . "<br><br>" .
    "_____________________________________________________________
                                     <br><br>";
}//end for
?>
                            </p>


                            <h2> Fauna </h2> 
                            <p>
<?php
$faunaBusiness = new FaunaBusiness();

$parkFauna = $faunaBusiness->getAllParkFauna($id);

foreach ($parkFauna as $element) {
    echo "Name" . $element->name . "<br><br>" .
    "Description: " . $element->description . "<br><br>" .
    "_____________________________________________________________
                                     <br><br>";
}//end for
?>
                            </p>


                            <h2>Contact </h2> 
                            <p><?php echo $contact ?></p>

                            <br>
<?php
echo'___________________________________________________________';
?>


                                <br><br><br><br>

                                                <input type="button" onclick="init()" value="Map">
                                                    <div id="map"style="width: 500px ; height: 400px"></div>

                                                    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

                                                    <script type="text/javascript">
                                           var map;

                                           function init() {
                                               var map = new google.maps.Map(document.getElementById('map'), {
                                                   center: {lat: <?php echo $park->latitude;?>, lng: <?php echo $park->longitude;?>},
                                                   zoom: 13,
                                                   mapTypeId: google.maps.MapTypeId.ROADMAP
                                               });
                                               map.setTilt(45);
                                           }
                                                    </script>
                                                    </div> <!-- end of main column -->

                                                    <div id="side_column">                                          
                                                        <div class="cleaner_h20"></div>                
                                                        <div class="side_column_box">
                                                            <h3>Comments</h3>
                                                            <p>
                                                                <form action="../Business/CommentsInsertAction.php" method="get">
                                                                    <br>Name</br>
                                                                    <input type="text" name="txtName" id="txtName" size="10" class="inputfield" onfocus="clearText(this)" onblur="clearText(this)" />
                                                                    <br>Comment</br>
                                                                    <textarea row="60" cols="30" name="txtComment" id="txtComment"></textarea>

                                                                    <input type="hidden" name="hdnID" id="hdnID" value="<?php echo $id ?>" />
                                                                    <input type="submit" name="btnInsertComment" id="btnInsertComment" value="Comment" alt="Subscribe" class="submitbutton" />

<?php
//para poder cambiar el color al texto y traer el error del url
if (isset($_GET['error'])) {
    if ($_GET['error'] == "empty_field") {
        ?> <p style="color: red">
                                                                                Empty fields.
                                                                            </p>
                                                                            <?php
                                                                        }
                                                                    } else {
                                                                        if (isset($_GET['success'])) {
                                                                            ?> <p style="color: #599BC5">
                                                                                The Comment was inserted.
                                                                            </p>
                                                                            <?php
                                                                        }//end if sucess
                                                                    }//end else 
                                                                    ?> 
                                                                </form>
                                                                <br><br>
                                                                        <hr></hr>

                                                                        </p>



                                                                        <p>
<?php
$commentBusiness = new CommentBusiness();

$commentFlora = $commentBusiness->getParkComments($id);

foreach ($commentFlora as $comment) {
    echo $comment->author . " says...<br><br>" .
    $comment->description . "<br><br>" .
    "_____________________________
                                     <br><br>";
}//end for
?>
                                                                        </p>



                                                                        </div>


                                                                        </div> <!-- end of side column -->

                                                                        <div class="cleaner"></div>

                                                                        </div> <!-- end of content -->
<?php
include 'footer.php';
?>
