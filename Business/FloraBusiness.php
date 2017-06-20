<?php

include '../Data/FloraData.php';

/*Clase NationalParkBusiness*/
class FloraBusiness {
    
    private $FloraData;
    
    //constructor de la clase
    public function FloraBusiness(){
        $this->FloraData = new FloraData();
    }//end constructor
    
    //metodo que llama al metodo insertNationalPark de la clase data
    public function insertFlora($flora){
        
        $result = $this->FloraData->insertFlora($flora);

        return $result;
    }//end insertPark

    //metodo que llama al metodo getParkByName de la clase data
    public function getFloraByName($floraName,$idPark){
        
        $result = $this->FloraData->getFlora($floraName,$idPark);
        
        return $result;
    }//end getParkByName

    //metodo que llama al metodo deleteNationalPark de la clase data
    public function deleteFlora($floraName,$idPark){
        
        $result = $this->FloraData->deleteFlora($floraName,$idPark);
        
        return $result;
    }//end deletePark

    //metodo que llama al metodo updateNationalPark de la clase data
    public function updateFlora($floraName){
        
        $result = $this->FloraData->updateFlora($floraName);
        
        return $result;      
    }//end updatePark

    /*metodo que llama al metodo getAllParkFlora de la clase data*/
    public function getAllParkFlora($idPark){
        
        $result = $this->FloraData->getAllParkFlora($idPark);
        
        return $result;
    }//end getAllParkFlora
    
    /*Metodo que llama al metodo deleteAllParkFlora de la clase data*/
    public function deleteAllParkFlora($idPark){
        
        $result = $this->FloraData->deleteAllParkFlora($idPark);
        
        return $result;
    }//end deleteAllParkFlora

}//end class


?>
			
			

		