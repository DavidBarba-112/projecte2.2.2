<?php
class DisponibilitatModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }





    public function listadoTotal5()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT disponiblitat.id_disponible, disponiblitat.diponiblitat, treballadors.nom
        FROM disponiblitat
        JOIN treballadors ON disponiblitat.id_treballador = treballadors.id_treballador;');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

       $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }






public function datos_formulario($id){
    $consulta = $this->db->prepare("SELECT * FROM disponiblitat WHERE id_disponible = $id");
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
    $consulta = $this->db->prepare("UPDATE disponiblitat SET diponiblitat='".$request["diponiblitat"]."' WHERE id_treballador=".$request["id_treballador"] );
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();
    //devolvemos la colección para que la vista la presente.
    return $consulta;
}

public function eliminar($id){
    //realizamos la consulta de todos los items
    $consulta = $this->db->prepare(" DELETE FROM disponiblitat WHERE id_disponible=$id " );
    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    $consulta->execute();
    //devolvemos la colección para que la vista la presente.

    return $consulta;
}




}
?>