<?php
class TreballadorsModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listado(){
        $consulta = $this->db->prepare(' SELECT * FROM usuarios');

            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            $consulta->execute();
            return $consulta;

    }

    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE usuarios SET nombre_usuario='".$request["nombre_usuario"]."', email='".$request["email"]."', documento='".$request["documento"]."', password='".$request["password"]."', id_rol='".$request["id_rol"]."'  WHERE id_usuario=".$request["id_usuario"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }


}
?>