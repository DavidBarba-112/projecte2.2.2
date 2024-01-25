<?php
class OcupacionsController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }



    public function ocupacions($request)
    {
        //Incluye el modelo que corresponde
        require 'models/OcupacionsModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new OcupacionsModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal2();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("ocupacions.php", $data);

    }
 






    public function formulario_modificar($request){
        require 'models/OcupacionsModel.php';
        $items = new OcupacionsModel();

        $listado = $items->datos_formulario($request ["param"]);
        $classes = $items->listadoClases($request ["param"]);

        $data['listado'] = $listado;
        $data['classes'] = $classes;


        $this->view->show("modificar_ocupacions.php",$data); 

    }

    public function gravar_modificacio($request){
        require 'models/OcupacionsModel.php';
        $items = new OcupacionsModel();
        $consulta = $items->gravar_modificacio($request);
        $data['consulta'] = $consulta;


        $this->view->show("resultat.php", $data);


    }


    public function eliminar($request){
        require 'models/DisponiblitatModel.php';
        $items = new OcupacionsModel();
        $consulta = $items->eliminar($request);
        $data['consulta'] = $consulta;
        if(isset($_GET["param"])){
            $id = $_GET["param"];
            $model = new OcupacionsModel();
            $model->eliminar($id);
        }

        $this->view->show("resultat.php", $data);

    }







    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}
?>      