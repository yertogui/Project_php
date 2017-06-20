<?php

//CLASE DEL ACTION QUE INSERTA

include './CommentBusiness.php';

//obtener datos
$author = $_GET['txtName'];
$comment = $_GET['txtComment'];
$id = $_GET['hdnID'];
//validar de que venga algo
if (strlen($author) > 0 && strlen($comment) > 0 && strlen($id) > 0) {

    
    $commentBusiness = new CommentBusiness();

    $comments = new Comment(0, $author, $comment, $id);


    $result = $commentBusiness->insertComment($comments);

    header("location: ../Presentation/National_Park_Index.php?success=insert&id=$id");
} else {
    //es para devolverlo si no inserta todos los datos
    header("location: ../Presentation/National_Park_Index.php?error=empty_field&id=$id&author=$author&comment=$comment");
}//end else
?>

