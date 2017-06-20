<?php

include '../Data/NationalParkData.php';

/*Clase NationalParkBusiness*/
class NationalParkBusiness {
    
    private $nationalParkData;
    
    //constructor de la clase
    public function NationalParkBusiness(){
        $this->nationalParkData = new NationalParkData();
    }//end constructor
    
    //metodo que llama al metodo insertNationalPark de la clase data
    public function insertPark($nationalPark){
        
        $result = $this->nationalParkData->insertNationalPark($nationalPark);

        return $result;
    }//end insertPark

    //metodo que llama al metodo getParkByName de la clase data
    public function getParkByName($parkName){
        
        $park = $this->nationalParkData->getNationalPark($parkName);
        
        return $park;
    }//end getParkByName
    public function getParkById($parkId){
        
        $park = $this->nationalParkData->getNationalParkId($parkId);
        
        return $park;
    }//end getParkByName
    public function getAllParks(){
        
        $park = $this->nationalParkData->getAllNationalPark();
        
        return $park;
    }//end getParkByName

    //metodo que llama al metodo deleteNationalPark de la clase data
    public function deletePark($parkName){
        
        $result = $this->nationalParkData->deleteNationalPark($parkName);
        
        return $result;
    }//end deletePark

    //metodo que llama al metodo updateNationalPark de la clase data
    public function updatePark($park){
        
        $result = $this->nationalParkData->updateNationalPark($park);
        
        return $result;      
    }//end updatePark
}//end class


?>
			