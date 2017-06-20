<?php


/*Clase Ranger*/
class Ranger {
    
    public $id;
    public $name;
    public $idPark;
    public $username;
    public $password;
    
    //constructor
    public function Ranger($id,$name,$idPark, $username, $password){
        $this->id = $id;
        $this->name = $name;
        $this->idPark = $idPark;
        $this->username = $username;
        $this->password = $password;
    }//end constructor
}//end Class

?>
