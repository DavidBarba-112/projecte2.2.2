<?php
class Conexion{
    public $datos;
    public function __construct()
    {
        session_start();
        $usuario = 'pma';
        $contrasenya = 'P@ssw0rd';

        try{
            $this->datos = new PDO('mysql:host=localhost; dbname=bibliotecas', $usuario,$contrasenya);
        }catch(PDOException $e){
            echo "Error : " . $e->getMessage();
        }
    }

    public function cerrarconexion(){
        $datos = null;
    }

        
    
}