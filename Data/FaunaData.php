<?php


include '../Domain/Fauna.php';

/*Clase NationalParkData, extiende de data*/
class FaunaData{
    
    //variables globales
    private $server;
    private $user;
    private $password;
    private $db;
    private $mess;
    private $isActive;
    private $connection;
    
    //constructor
    public function FaunaData(){
    
        $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u193943641_proy1";
        $this->password = "Lenguajes";
        $this->db = "u193943641_parks";
        
    }//end constructor
    
    /*Metodo para insertar fauna en la BD*/
    public function insertFauna($fauna){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Insert into fauna(id,name,description,idPark) 
                   Values(". $fauna->id . ",'" . $fauna->name. "','" . 
                   $fauna->description . "','" . $fauna->idPark . "')";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end 
    
    /*Metodo para obtener fauna mediante su nombre*/
    public function getFauna($faunaName,$idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from fauna where name ='" . $faunaName . "' and idPark="
                . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        $row = mysqli_fetch_array($result);
        
        $currentFauna = new Fauna($row['id'], $row['name'], $row['description'], 
                           $row['idPark']);
        
        return $currentFauna;
    }//end getFauna

    //metodo para borrar fauna de la BD
    public function deleteFauna($faunaName,$idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from fauna where name='" . $faunaName . 
                "' and idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteNationalPark

    //metodo para actualizar fauna de la BD
    public function updateFauna($fauna){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "update fauna set name='" . $fauna->name. "', description='" .
                  $fauna->description . "', idPark='" . $fauna->idPark .
                "' where id=" . $fauna->id;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end updateNationalPark

    //metodo que obtiene toda la fauna de un parque nacional
    public function getAllParkFauna($idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from fauna where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        //RECORRER EL RESULTADO PARA INSERTARLO EN UN ARREGLO
        //SE DEFINE EL ARREGLO
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentFauna = new Fauna($row['id'], $row['name'], $row['description'], 
                           $row['idPark']);
            array_push($array, $currentFauna);
        }//end while
        return $array;
    }//end getAllParkFauna


    //metodo que borra toda la fauna de un parque
    public function deleteAllParkFauna($idPark){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from fauna where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteAllParkFauna

}//end class

?>
	
