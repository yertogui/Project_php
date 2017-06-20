<?php


include '../Domain/Flora.php';

/*Clase NationalParkData, extiende de data*/
class FloraData{
    
    //variables globales
    private $server;
    private $user;
    private $password;
    private $db;
    private $mess;
    private $isActive;
    private $connection;
    
    //constructor
    public function FloraData(){
    
        $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u193943641_proy1";
        $this->password = "Lenguajes";
        $this->db = "u193943641_parks";
        
    }//end constructor
    
    /*Metodo para insertar fauna en la BD*/
    public function insertFlora($flora){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Insert into flora(id,name,description,abundance,floweringPeriod,idPark) 
                   Values(". $flora->id . ",'" . $flora->name. "','" . 
                   $flora->description . "','" . $flora->abundance. "','" .
                   $flora->floweringPeriod . "','" . $flora->idPark . "')";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end 
    
    /*Metodo para obtener fauna mediante su nombre*/
    public function getFlora($floraName,$idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from flora where name='" . $floraName . 
                "' and idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        $row = mysqli_fetch_array($result);
        
        $currentFlora = new Flora($row['id'], $row['name'], $row['abundance'],
                          $row['floweringPeriod'], $row['description'], $row['idPark']);
        
        return $currentFlora;
    }//end getFauna

    //metodo para borrar fauna de la BD
    public function deleteFlora($floraName,$idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from flora where name='" . $floraName . 
                "' and idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteNationalPark

    //metodo para actualizar fauna de la BD
    public function updateFlora($floraName){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "update flora set name='" . $floraName->name. "', description='" .
                  $floraName->description . "', idPark='" . $floraName->idPark .
                "' where id=" . $floraName->id;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end updateNationalPark

    //metodo que retorna toda la flora de un parque 
    public function getAllParkFlora($idPark){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from flora where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        //RECORRER EL RESULTADO PARA INSERTARLO EN UN ARREGLO
        //SE DEFINE EL ARREGLO
        $array = [];
        while($row = mysqli_fetch_array($result)){
            $currentFlora = new Flora($row['id'], $row['name'], $row['abundance'],
                          $row['$floweringPeriod'], $row['description'], $row['idPark']);
            array_push($array, $currentFlora);
        }//end while
        return $array;
    }//end getAllParkFlor

    //metodo que borra toda la flora de un parque
    public function deleteAllParkFlora($idPark){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from flora where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteAllParkFlora
}//end class

?>
	

