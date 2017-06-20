<?php

/*Superclase DATA de la cual heredan el resto de clases del paquete DATA*/
class Data {
    private $server = "mysql.hostinger.es";
    private $user= "u116210948_proy1";
    private $password = "Lenguajes";
    private $db = "u116210948_parks";
   
    private $isActive;
    private $connection;
    
    public function Data(){
        $this->isActive = false;
        $this->server = "mysql.hostinger.es";
        $this->user = "u193943641_proy1";
        $this->password = "Lenguajes";
        $this->db = "u193943641_parks";
        
        
    }
}//end DATA

?>
