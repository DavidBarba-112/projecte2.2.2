<?php
class TreballadorsController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 
    public function treballadors($request)
    {
        //Incluye el modelo que corresponde
        require 'models/TreballadorsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new TreballadorsModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal();

        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("treballadors.php", $data);


    }



    public function formulario_modificar($request){
        require 'models/TreballadorsModel.php';
        $items = new TreballadorsModel();

        $listado = $items->datos_formulario($request ["param"]);
        $classes = $items->listadoClases($request ["param"]);
        echo $classes->rowCount();

        $data['listado'] = $listado;
        $data['classes'] = $classes;


        $this->view->show("modificar_treballador.php",$data); 

    }

    public function gravar_modificacio($request){
        require 'models/TreballadorsModel.php';
        $items = new TreballadorsModel();
        $consulta = $items->gravar_modificacio($request);
        $data['consulta'] = $consulta;


        $this->view->show("resultat.php", $data);


    }


    
    public function eliminar($request){
        require 'models/TreballadorsModel.php';
        $items = new TreballadorsModel();
        $consulta = $items->eliminar_treballador($request);
        $data['consulta'] = $consulta;
        if(isset($_GET["param"])){
            $id = $_GET["param"];
            $model = new TreballadorsModel();
            $model->eliminar_treballador($id);
        }

        $this->view->show("resultat.php", $data);

    }





    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}
?>       