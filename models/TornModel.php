<?php
class TornsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listadoTotal3()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT torn.id_torn, torn.tipus_torn, treballadors.nom
        FROM torn
        JOIN treballadors ON torn.id_treballador = treballadors.id_treballador;');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    
    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM torn WHERE id_torn = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function listadoClases($id)
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("SELECT * FROM treballadors  WHERE id_treballador = $id ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE torn SET tipus_torn='".$request["tipus_torn"]."' WHERE id_treballador=".$request["id_treballador"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function eliminar($id)
{
    $consulta = $this->db->prepare(" DELETE FROM torn WHERE id_torn = $id ");
    $consulta->setFetchMode(PDO::FETCH_ASSOC);

    $consulta->execute();
    return $consulta;

}

}
?>