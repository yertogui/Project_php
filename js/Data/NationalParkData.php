<?php


include '../Domain/NationalPark.php';

/*Clase NationalParkData, extiende de data*/
class NationalParkData{
    
    //variables globales
    private $server;
    private $user;
    private $password;
    private $db;

    private $isActive;
    private $connection;
    
    //constructor
    public function NationalParkData(){
    $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u116210948_proy1";
        $this->password = "Lenguajes";
        $this->db = "u116210948_parks";
        
    }//end constructor
    
    /*Metodo para insertar un parque nacional en la BD*/
    public function insertNationalPark($nationalPark){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Insert into national_parks(id,name,description,location,contact,latitude,longitude) 
                   Values(". $nationalPark->id . ",'" . $nationalPark->name. "','" . 
                   $nationalPark->description . "','" . $nationalPark->location . "','" .
                   $nationalPark->contact . "','" . $nationalPark->latitude. "','" .
                   $nationalPark->longitude."')";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end 
    
    /*Metodo para obtener un parque nacional mediante su nombre*/
    public function getNationalPark($parkName){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from national_parks where name='" . $parkName . "'";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        $row = mysqli_fetch_array($result);
        
        $currentPark = new NationalPark($row['id'], $row['name'], $row['description'], 
                           $row['location'], $row['contact'], $row['latitude'], $row['longitude']);
        
        return $currentPark;
    }//end getNationalPark
    public function getNationalParkId($parkId){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from national_parks where id='" . $parkId . "'";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
        
        $row = mysqli_fetch_array($result);
        
        $currentPark = new NationalPark($row['id'], $row['name'], $row['description'], 
                           $row['location'], $row['contact'],$row['latitude'], $row['longitude']);
        
        return $currentPark;
    }//end getNationalPark
 public function getAllNationalPark(){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Select * from national_parks";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn); //cerrar la conexion
       
        $array=[];
        
        //en cada iteracion guarde en row
        while($row=mysqli_fetch_array($result)){
           $currentPark = new NationalPark($row['id'], $row['name'], $row['description'], 
                           $row['location'], $row['contact'],$row['latitude'], $row['longitude']);
        
            array_push($array, $currentPark);
        }//end while
           
        return $array;
        
    }//end getNationalPark
    //metodo para borrar un parque nacional de la BD
    public function deleteNationalPark($parkName){
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "Delete from national_parks where name='" . $parkName . "'";
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
        
        
        
    }//end deleteNationalPark

    //metodo para actualizar un parque nacional de la BD
    public function updateNationalPark($park){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        
        $query = "update national_parks set name='" . $park->name. "', description='" .
                  $park->description . "', location='" . $park->location . "', contact='" .
                  $park->contact . "' where id=" . $park->id;
        
        $result = mysqli_query($conn, $query);
        
        mysqli_close($conn);//cerrar la conexion
        
        return $result;
    }//end updateNationalPark

}//end class

?>
		