<?php

/*Clase Comment*/
class Comment {
    
    public $id;
    public $author;
    public $description;
    public $idPark;
    
    //constructor de la clase
    public function Comment($id, $author, $description, $idPark){
        $this->id = $id;
        $this->author = $author;
        $this->description = $description;
        $this->idPark = $idPark;
               
    }//end constructor
}//end Class

?>
