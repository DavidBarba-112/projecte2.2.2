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


    public function listadoClases($id)
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("SELECT * FROM llistat_llibres WHERE id_usuario=$id ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
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

    public function guardarNuevo($nombre_usuario, $email, $documento, $password, $rol) {
        $consulta = $this->db->prepare("INSERT INTO usuarios (nombre_usuario, email, documento, password, id_rol) VALUES (:nombre_usuario, :email, :documento, :password, :rol)");
        $consulta->bindParam(':nombre_usuario', $nombre_usuario);
        $consulta->bindParam(':email', $email);
        $consulta->bindParam(':documento', $documento);
        $consulta->bindParam(':password', $password);
        $consulta->bindParam(':rol', $rol);
        $consulta->execute();
    }
    


}
?>