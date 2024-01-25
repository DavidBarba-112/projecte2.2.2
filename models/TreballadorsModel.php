<?php
class TreballadorsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }
 
    public function listadoTotal()
    {
        //realizamos la consulta de todos los items
            $consulta = $this->db->prepare('SELECT treballadors.id_treballador, treballadors.nom, treballadors.cognoms, treballadors.correu, treballadors.data_neixament, treballadors.telefon, treballadors.poblacio, ocupacions.ocupacio, torn.tipus_torn
            FROM treballadors
            JOIN ocupacions ON treballadors.id_ocupacio = ocupacions.id_ocupacio
            JOIN torn ON treballadors.id_torn = torn.id_torn
            ORDER BY treballadors.id_treballador;');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }



    public function listadoHorario()
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare('SELECT nom,cognom FROM treballadors');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }




    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM treballadors WHERE id_treballador = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function listadoClases($id)
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("SELECT * FROM prefencias WHERE id_treballador=$id ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE treballadors SET nom='".$request["nom"]."', id_ocupacio='".$request["id_ocupacio"]."', nom='".$request["nom"]."', cognoms='".$request["cognoms"]."', correu='".$request["correu"]."', data_neixament='".$request["data_neixament"]."', telefon='".$request["telefon"]."', poblacio='".$request["poblacio"]."'  WHERE id_treballador=".$request["id_treballador"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }



    public function eliminar_treballador($id){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare(" DELETE FROM treballadors WHERE id_treballador=$id " );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
    //devolvemos la colección para que la vista la presente.

    return $consulta;
    }
}
?>

