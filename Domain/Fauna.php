<?php


class Fauna {
   public $id;
   public $name;
   public $description;
   public $idPark;
   
   public function Fauna($id,$name,$description,$idPark){
       $this->id=$id; 
       $this->name=$name; 
       $this->description=$description; 
       $this->idPark=$idPark; 
   }
}

?>
