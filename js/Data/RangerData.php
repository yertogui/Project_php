<?php

include '../Domain/Ranger.php';
/*Clse Ranger Data*/
class RangerData {

    //variables globales
    private $server;
    private $user;
    private $password;
    private $db;

    private $isActive;
    private $connection;
    
    //constructor
    public function RangerData (){
        $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u116210948_proy1";
        $this->password = "Lenguajes";
        $this->db = "u116210948_parks";
        
        
    }//end constructor
    
    /*Metodo para insertar un guardaparques en la BD*/
    public function insertRanger($ranger){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Insert into rangers(id,name,username,password,idPark) 
                   Values(". $ranger->id . ",'" . $ranger->name. "','" . 
                   $ranger->username . "','" . $ranger->password . "'," .
                   $ranger->idPark . ")";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end insertRanger
    
    /*Metodo para obtener un guardaparques mediante su nombre de usuario*/
    public function getRangerByUsername($username){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from rangers where username='" . $username . "'";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        $row = mysqli_fetch_array($result);
        
        $currentRanger = new Ranger($row['id'], $row['name'], $row['idPark'], 
                           $row['username'], $row['password']);
        
        return $currentRanger;
    }//end getRangerByUsername
    
    //metodo para borrar un guardaparques de la BD
    public function deleteRanger($username){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from rangers where username='" . $username . "'";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteRanger
    
    //metodo para actualizar un guardaparques en la BD
    public function updateRanger($ranger){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "update rangers set name='" . $ranger->name. "', idPark=" .
                  $ranger->idPark . ", username='" . $ranger->username . "', password='" .
                  $ranger->password . "' where id=" . $ranger->id;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end updateRanger

    //metodo que borra todos los guardaparques de un parque
    public function deleteAllParkRangers($idPark){
         $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from rangers where idPark=" . $idPark;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end deleteAllParkRangers
}//end class

?>
