<?php
class OcupacionsTreballadorsModel
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
        $consulta = $this->db->prepare('SELECT * FROM ocupacions_treballadors  ');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


    

    public function gravar_assignacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("INSERT ocupacions_treballadors (id_ocupacio, id_treballador) VALUES (?,?) ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute([$request["id_ocupacio"], $request["id_treballador"]]);
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function carregar_classificacio(){
        $consulta = $this->db->prepare(' SELECT * FROM `dda` ');
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;


    }


 
}
?>