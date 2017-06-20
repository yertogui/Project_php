<?php

include '../Data/ParkElementData.php';

/*Clase ParkElementBusiness*/
class ParkElementBusiness {
    private $parkElementData;
    
    //constructor de la clase
    public function ParkElementBusiness(){
        $this->parkElementData = new ParkElementData();
    }//end constructor
    
    //metodo que llama al metodo insertParkElement de la clase Data
    public function insertParkElement($parkElement){
       
        $result = $this->parkElementData->insertParkElement($parkElement);
        
        return $result;
    }//end insertParkElement
    
    /*Metodo que llama al metodo getElementByName de la clase Data*/
    public function getElementByName($idPark, $elementName){
        
        $element = $this->parkElementData->getElementByName($idPark, $elementName);
        
        return $element;
    }//end getElementByName
            
    /*Metodo que llama al metodo deleteParkElement de la clase Data*/
    public function deleteParkElement($elementName, $idPark){
        
        $result = $this->parkElementData->deleteParkElement($elementName, $idPark);
        
        return $result;
    }//end deleteParkElement

    /*Metodo que llama al metodo updateParkElement de la clase data*/
    public function updateParkElement($element){
        
        $result = $this->parkElementData->updateParkElement($element);
        
        return $result;
    }//end updateParkElement

    /*Metodo que llama al metodo getAllParkElements de la clase data*/
    public function getAllParkElements($idPark){
        
        $array = $this->parkElementData->getAllParkElements($idPark);
        
        return $array;
    }//end getAllParkElements

    /*Metodo que llama al metodo deleteAllParkElements de la clase data*/
    public function deleteAllParkElements($idPark){
        
        $result = $this->parkElementData->deleteAllParkElements($idPark);
        
        return $result;
    }//end deleteAllParkElements

}//end ParkElementBusiness

?>
	