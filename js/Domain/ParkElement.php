<?php

/*Clase ParkElement*/
class ParkElement {
    public $id;
    public $name;
    public $description;
    public $idPark;
    
    //constructor
    public function ParkElement($id, $name, $description, $idPark){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->idPark = $idPark;
        
    }//end ParkElement
}

?>
