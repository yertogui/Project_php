<?php

include '../Data/FaunaData.php';

/*Clase NationalParkBusiness*/
class FaunaBusiness {
    
    private $FaunaData;
    
    //constructor de la clase
    public function FaunaBusiness(){
        $this->FaunaData = new FaunaData();
    }//end constructor
    
    //metodo que llama al metodo insertNationalPark de la clase data
    public function insertFauna($fauna){
        
      $result = $this->FaunaData->insertFauna($fauna);

        return $result;
    }//end insertPark

    //metodo que llama al metodo getParkByName de la clase data
    public function getFaunaByName($faunaName,$idPark){
        
        $result = $this->FaunaData->getFauna($faunaName,$idPark);
        
        return $result;
    }//end getParkByName

    //metodo que llama al metodo deleteNationalPark de la clase data
    public function deleteFauna($faunaName,$idPark){
        
        $result = $this->FaunaData->deleteFauna($faunaName,$idPark);
        
        return $result;
    }//end deletePark

    //metodo que llama al metodo updateNationalPark de la clase data
    public function updateFauna($fauna){
        
        $result = $this->FaunaData->updateFauna($fauna);
        
        return $result;      
    }//end updatePark

    /*metodo que llama al metodo getAllParkFauna de la clase data*/
    public function getAllParkFauna($idPark){
        
        $result = $this->FaunaData->getAllParkFauna($idPark);
        
        return $result;
    }//end getAllParkFauna

    /*Metodo que llama al metodo deleteAllParkFauna de la clase data*/
    public function deleteAllParkFauna($idPark){
        
        $result = $this->FaunaData->deleteAllParkFauna($idPark);
        
        return $result;
    }//end deleteAllParkFauna

}//end class


?>
			
