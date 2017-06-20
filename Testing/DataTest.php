<?php

include '../Data/CommentData.php';


 $comments = new Comment(0, 'yer', 'lo amo', 1);


//business
$elementData = new CommentData();


$result = $elementData->insertComment($comments);
echo hola;
echo $result;

//$business = new RangerBusiness();
//$result = $business->insertRanger($ranger);
//echo $result->name;
//echo $result->username;
//echo $result->idPak;


//business update
//$flora = new Flora(1, 'Planta', 'seca', 0);
//$result = $business->updateFlora($flora);
//echo $result;
?>