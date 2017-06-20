<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Flora
 *
 * @author Administrador
 */
class Flora {
   public $id;
   public $name;
   public $description;
   public $abundance;
   public $floweringPeriod;
   public $idPark;
   
   public function Flora($id,$name,$abundance, $floweringPeriod, $description,$idPark){
       $this->id=$id; 
       $this->name=$name; 
       $this->description=$description; 
       $this->abundance=$abundance; 
       $this->floweringPeriod=$floweringPeriod; 
       $this->idPark=$idPark; 
   }
           
}

?>
