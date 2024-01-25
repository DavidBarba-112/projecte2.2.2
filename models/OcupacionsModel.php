<?php
class OcupacionsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listadoTotal2()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT ocupacions.id_ocupacio, ocupacions.ocupacio, treballadors.nom
        FROM ocupacions 
        JOIN treballadors ON ocupacions.id_treballador = treballadors.id_treballador; ');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    
    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM ocupacions WHERE id_ocupacio = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function listadoClases($id)
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("SELECT * FROM treballadors WHERE id_treballador = $id ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE ocupacions SET ocupacio='".$request["ocupacio"]."', id_ocupacio='".$request["id_ocupacio"]."' WHERE id_treballador=".$request["id_treballador"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id){
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare(" DELETE FROM ocupacions WHERE id_ocupacio=$id " );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
    
        return $consulta;
    }

   
}
?>