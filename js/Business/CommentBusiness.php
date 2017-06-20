<?php

include '../Data/CommentData.php';

/*Clase CommentBusiness*/
class CommentBusiness {
    
    private $commentData;
    
    //constructor de la clase
    public function CommentBusiness(){
        $this->commentData= new CommentData();
    }//end constructor
    
    /*Metodo que llama al metodo insertComment de la clase Data*/
    public function insertComment($comment){
        
        $result = $this->commentData->insertComment($comment);
        
        return $result;
    }//end insertComment
        
    /*Metodo que llama al metodo getParkComments de la clase Data*/
    public function getParkComments($idPark){
        
        $result = $this->commentData->getParkComments($idPark);
        
        return $result;
    }//end getParkComments
}//end CommentBusiness

?>
