<?php
class ItemsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listadoTotal6()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT id_preferencia, prefencia, nom FROM prefencias
        JOIN treballadors ON prefencias.id_treballador = treballadors.id_treballador;');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    
    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM prefencias WHERE id_preferencia = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function listadoClases()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT * FROM treballadors');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE prefencias SET prefencia='".$request["prefencia"]."' WHERE id_treballador=".$request["id_treballador"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }
}
?>