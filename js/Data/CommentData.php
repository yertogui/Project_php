<?php

include '../Domain/Comment.php';

/*Clase Comment Data*/
class CommentData {
    
    //variables globales
    private $server;
    private $user;
    private $password;
    private $db;
  
    private $isActive;
    private $connection;
    
    //constructor
    public function CommentData(){
       $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u116210948_proy1";
        $this->password = "Lenguajes";
        $this->db = "u116210948_parks";
        
        
    }//end constructor
    
    /*Metodo que inserta un comentario en un parque*/
    public function insertComment($comment){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Insert into comments(id,author,comment,idPark) 
                   Values(". $comment->id . ",'" . $comment->author . "','" . 
                   $comment->description . "'," . $comment->idPark . ")";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
        
    }//end insertComment
    
    /*Metodo que retorna todos los comentarios que tiene un parque nacional*/
    public function getParkComments($idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        //El primer parametro es la coneccion con la base de datos
        //El segundo parametro es la consulta
        $result = mysqli_query($conn, "SELECT * FROM comments where idPark=" . $idPark);
        mysqli_close($conn);
        
        //RECORRER EL RESULTADO PARA INSERTARLO EN UN ARREGLO
        //SE DEFINE EL ARREGLO
        $array = [];
        
        while($row = mysqli_fetch_array($result)){
            $currentComment = new Comment($row['id'],$row['author'],$row['comment'] , $row['idPark']);
            array_push($array, $currentComment);
        }//end while
        return $array;
    }//end getParkComments
}//end CommentData

?>
