<?php



/*Clase NationalPark*/
class NationalPark {
    public $id;
    public $name;
    public $location;
    public $contact;
    public $description;    
    public $latitude;
    public $longitude;
    
    //constructor de la clase
    public function NationalPark($id,$name,$description,$location,$contact,$latitude,$longitude){
        $this->id = $id;
        $this->name= $name;
        $this->location = $location;
        $this->description = $description;
        $this->contact = $contact;
        $this->latitude= $latitude;
        $this->longitude = $longitude;
        
    }//end constructor
       public function toString(){
        $text= "National Park name: " . "<br><br>" .$this->name . 
                "<br>" ."Location: ". " " . $this->location."<br>" 
                ."Description: ". " " . $this->description . "<br><br>" 
                . "Contact " . "<br>" .$this->contact
                . "Latitude " . "<br>" .$this->latitude
                . "Longitude " . "<br>" .$this->longitude
                . "<br>" ;
        return $text;
    }//end toString
  
}//end Class

?>
