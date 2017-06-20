<?php

include '../Domain/ParkElement.php';

/*Clse ParkElementData*/
class ParkElementData {
    
    //variables globales
    private $server;
    private $user;
    private $password;
    private $db;
  
    private $isActive;
    private $connection;
    
    //constructor
    public function ParkElementData(){
        $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u193943641_proy1";
        $this->password = "Lenguajes";
        $this->db = "u193943641_parks";
        
    }//end constructor
    
    //metodo para insertar un nuevo elemento
    public function insertParkElement($parkElement){
       
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Insert into park_elements(id,name,description,idPark) 
                   Values(". $parkElement->id . ",'" . $parkElement->name. "','" . 
                   $parkElement->description . "'," . $parkElement->idPark . ")";
        
         
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end insertParkElement
    
    /*Metodo para obtener un elemento mediante su nombre de usuario*/
    public function getElementByName($idPark, $elementName){
        
       $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from park_elements where name='" . $elementName . "' and idPark="
                . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        $row = mysqli_fetch_array($result);
        
        $currentElement = new ParkElement($row['id'], $row['name'], $row['description'], 
                           $row['idPark']);
        
        return $currentElement;
    }//end getRangerByUsername

    //metodo para traer todos los elementos que pertenecen a un parque
    public function getAllParkElements($idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from park_elements where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        //RECORRER EL RESULTADO PARA INSERTARLO EN UN ARREGLO
        //SE DEFINE EL ARREGLO
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentElement = new ParkElement($row['id'],$row['name'] , $row['description'], $row['idPark']);
            array_push($array, $currentElement);
        }//end while
        return $array;
    }//end getAllParkElements

    //metodo para borrar un elemento de un parque de la BD
    public function deleteParkElement($elementName, $idPark){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from park_elements where name='" . $elementName . 
                "' and idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteParkElement

    //metodo que actualiza un elemente de un parqueo de la BD
    public function updateParkElement($element){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "update park_elements set name='" . $element->name. "', description='" .
                  $element->description . "', idPark='" . $element->idPark . 
                  "' where id=" . $element->id;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end updateParkElement

    //metodo que borra todos los elementos de un parque
    public function deleteAllParkElements($idPark){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from park_elements where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteAllParkElements

}//end class

?>
				