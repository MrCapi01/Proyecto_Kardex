<?php
class Conection{
    private $server = "mysql:host=localhost; dbname=Proyecto_Kardex";
    private $username = "Trini";
    private $password = "!Trini01!!!!!";
    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    protected $conn;
    
    public function open(){
        try{
            $this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
            return $this->conn;
        }catch(PDOException $e){
            echo "Actualmente existe un error en la base de datos por favor verificar". $e->getPrevious();
        }
    }

    public function Close(){
        $this->conn = null;
    }
}

?>
