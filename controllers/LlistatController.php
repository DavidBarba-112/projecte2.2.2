<?php
class LlistatController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 



    public function llistat($request)
    {
        //Incluye el modelo que corresponde
        require 'models/LlistatModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new LlistatModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listado1();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("llistat.php", $data);

    }

    public function formulario_modificar($request){
        require 'models/LlistatModel.php';
        $items = new LlistatModel();
    
        $listado = $items->datos_formulario($request ["param"]);
        $classes = $items->listadoClases($request ["param"]);
        echo $classes->rowCount();
    
        $data['listado'] = $listado;
        $data['classes'] = $classes;
    
    
        $this->view->show("modificar_llistat.php",$data); 
    
    }

    public function gravar_modificacio($request){
        require 'models/LlistatModel.php';
        $items = new LlistatModel();
        $consulta = $items->gravar_modificacio($request);
        $data['consulta'] = $consulta;
    
    
        $this->view->show("resultat.php", $data);
    
    
    }


public function afegir_llibre() {
    $this->view->show("afegir_llibre.php");
}
public function guardar_nuevo() {
    require 'models/LlistatModel.php';
    $items = new LlistatModel();

    $nom = $_POST['nom'];
    $num_serie = $_POST['num_serie'];
    $preu = $_POST['preu'];
    $categoria = $_POST['categoria'];
    $id_usuario = $_POST['id_usuario'];

    $items->guardarNuevo($nom, $num_serie, $preu, $categoria, $id_usuario);

    // Redireccionar a alguna página después de guardar, si es necesario
    // header("Location: index.php");
}

    
 
    

//
//
//
//
//    public function formulario_modificar($request){
//        require 'models/HoraModel.php';
//        $items = new HorasModel();
//
//        $listado = $items->datos_formulario($request ["param"]);
//        $classes = $items->listadoClases();
//
//        $data['listado'] = $listado;
//        $data['classes'] = $classes;
//
//
//        $this->view->show("modificar_item.php",$data); 
//
//    }
//
//    public function gravar_modificacio($request){
//        require 'models/HoraModel.php';
//        $items = new HorasModel();
//        $consulta = $items->gravar_modificacio($request);
//        $data['consulta'] = $consulta;
//
//
//        $this->view->show("resultat.php", $data);
//
//
//
//
//    }
//
    public function eliminar($request){
        require 'models/LlistatModel.php';
        $items = new LlistatModel();
        $consulta = $items->eliminar($request);
        $data['consulta'] = $consulta;
        if(isset($_GET["param"])){
            $id = $_GET["param"];
            $model = new LlistatModel();
            $model->eliminar($id);
        }

        $this->view->show("resultat.php", $data);

    }
//
//
//
//    public function agregar()
//    {
//        echo 'Aquí incluiremos nuestro formulario para insertar items';
//    }
}
?>      