<?php
class GaleriaModel
{
    protected $db;
 
    public function __construct()
    {
        // Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }

    public function listadog()
    {
        $consulta = $this->db->prepare('SELECT id, image, price, nom FROM images');
        $consulta->execute();
        $resultados = $consulta->fetchAll(PDO::FETCH_ASSOC); // Obtiene todos los resultados como un array asociativo
        return $resultados; // Devuelve los resultados obtenidos
    }
}
?>
