<?php

include '../Data/RangerData.php';
/*Clase RangerBusiness*/
class RangerBusiness {
    
    private $rangerData;
    
    //constructor de la clase
    public function RangerBusiness(){
        $this->rangerData = new RangerData();
    }//end constructor
    
    //metodo que llama al metodo insertRanger de la clase RangerData
    public function insertRanger($ranger){
        
        $result = $this->rangerData->insertRanger($ranger);
        
        return $result;
    }//end insertRanger
    
    //metodo que llama al metodo getRangerByUsername de la clase RangerData
    public function getRangerByUsername($username){
        
        $ranger = $this->rangerData->getRangerByUsername($username);
        
        return $ranger;
    }//end getRangerByUsername
    
    //metodo que llama al metodo deleteRanger de la clase RangerData
    public function deleteRanger($username){
        
        $result = $this->rangerData->deleteRanger($username);
        
        return $result;
    }//end deleteRanger
    
    //metodo que llama al metodo updateRanger de la clase RangerData
    public function updateRanger($ranger){
        
        $result = $this->rangerData->updateRanger($ranger);
        
        return $result;
    }//end updateRanger

    //metodo que llama al metodo deleteAllParkRangers de la clase data
    public function deleteAllParkRangers($idPark){
        
        $result = $this->rangerData->deleteAllParkRangers($idPark);
        
        return $result;
    }//end deleteAllParkRangers
}//end class

?>
