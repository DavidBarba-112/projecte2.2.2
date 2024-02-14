<?php
class LlistatModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listado1(){
        $consulta = $this->db->prepare('SELECT l.*, u.nombre_usuario
        FROM llistat_llibres l
        JOIN usuarios u ON l.id_usuario = u.id_usuario
        ORDER BY l.id_llibre;');
    
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }
    

    public function listadoClases($id)
    {
        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("SELECT * FROM llistat_llibres WHERE id_llibre=$id ");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function datos_formulario($id){
        $consulta = $this->db->prepare("SELECT * FROM llistat_llibres WHERE id_llibre = $id");
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }

    public function gravar_modificacio($request){

        //realizamos la consulta de todos los items
        $consulta = $this->db->prepare("UPDATE llistat_llibres SET nom='".$request["nom"]."', num_serie='".$request["num_serie"]."', preu='".$request["preu"]."', categoria='".$request["categoria"]."', id_usuario='".$request["id_usuario"]."'  WHERE id_llibre=".$request["id_llibre"] );
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        //devolvemos la colección para que la vista la presente.
        return $consulta;
    }

    public function guardarNuevo($nom, $num_serie, $preu, $categoria, $id_usuario) {
        $consulta = $this->db->prepare("INSERT INTO llistat_llibres (nom, num_serie, preu, categoria, id_usuario) VALUES (:nom, :num_serie, :preu, :categoria, :id_usuario)");
        $consulta->bindParam(':nom', $nom);
        $consulta->bindParam(':num_serie', $num_serie);
        $consulta->bindParam(':preu', $preu);
        $consulta->bindParam(':categoria', $categoria);
        $consulta->bindParam(':id_usuario', $id_usuario);
        $consulta->execute();
    }




    //public function listadoTotal4()
    //{
    //    //realizamos la consulta de todos los items
    //    $consulta = $this->db->prepare('SELECT hora.id_hores, hora.hores, hora.dies, ocupacions.ocupacio, torn.tipus_torn, treballadors.nom
    //    FROM hora
    //    JOIN ocupacions ON hora.id_ocupacio = ocupacions.id_ocupacio
    //    JOIN torn ON hora.id_torn = torn.id_torn
    //    JOIN treballadors ON hora.id_treballador = treballadors.id_treballador
    //    ORDER BY hora.id_hores;');
    //    $consulta->setFetchMode(PDO::FETCH_ASSOC);
//
    //    $consulta->execute();
    //    //devolvemos la colección para que la vista la presente.
    //    return $consulta;
    //}
//
    //
    //public function datos_formulario($id){
    //    $consulta = $this->db->prepare("SELECT * FROM ocupacions WHERE id_ocupacio = $id");
    //    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    //    $consulta->execute();
    //    return $consulta;
    //}
//
    //public function listadoClases()
    //{
    //    //realizamos la consulta de todos los items
    //    $consulta = $this->db->prepare('SELECT * FROM treballadors');
    //    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    //    $consulta->execute();
    //    //devolvemos la colección para que la vista la presente.
    //    return $consulta;
    //}
//
    //public function gravar_modificacio($request){
//
    //    //realizamos la consulta de todos los items
    //    $consulta = $this->db->prepare("UPDATE ocupacions SET ocupacio='".$request["ocupacio"]."', id_ocupacio='".$request["id_ocupacio"]."' WHERE id_treballador=".$request["id_treballador"] );
    //    $consulta->setFetchMode(PDO::FETCH_ASSOC);
    //    $consulta->execute();
    //    //devolvemos la colección para que la vista la presente.
    //    return $consulta;
    //}
//
//
    //public function eliminar($id)
//{
    //$consulta = $this->db->prepare(" DELETE FROM hora WHERE id_hores = $id ");
    //$consulta->setFetchMode(PDO::FETCH_ASSOC);
//
    //$consulta->execute();
    //return $consulta;
//
//}

}
?>