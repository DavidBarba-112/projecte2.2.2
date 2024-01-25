<?php
class HoraController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 



    public function hora($request)
    {
        //Incluye el modelo que corresponde
        require 'models/HoraModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new HorasModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal4();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("hora.php", $data);

    }
 






    public function formulario_modificar($request){
        require 'models/HoraModel.php';
        $items = new HorasModel();

        $listado = $items->datos_formulario($request ["param"]);
        $classes = $items->listadoClases();

        $data['listado'] = $listado;
        $data['classes'] = $classes;


        $this->view->show("modificar_item.php",$data); 

    }

    public function gravar_modificacio($request){
        require 'models/HoraModel.php';
        $items = new HorasModel();
        $consulta = $items->gravar_modificacio($request);
        $data['consulta'] = $consulta;


        $this->view->show("resultat.php", $data);




    }

    public function eliminar($request){
        require 'models/HoraModel.php';
        $items = new HorasModel();
        $consulta = $items->eliminar($request);
        $data['consulta'] = $consulta;
        if(isset($_GET["param"])){
            $id = $_GET["param"];
            $model = new HorasModel();
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