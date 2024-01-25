<?php
class PreferenciesController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }




    public function preferencies($request)
    {
        //Incluye el modelo que corresponde
        require 'models/PreferenciesModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new ItemsModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal6();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("preferencies.php", $data);

    }



    public function formulario_modificar($request){
        require 'models/PreferenciesModel.php';
        $items = new ItemsModel();

        $listado = $items->datos_formulario($request ["param"]);
        $classes = $items->listadoClases($request ["param"]);

        $data['listado'] = $listado;
        $data['classes'] = $classes;


        $this->view->show("modificar_preferencies.php",$data); 

    }

    public function gravar_modificacio($request){
        require 'models/PreferenciesModel.php';
        $items = new ItemsModel();
        $consulta = $items->gravar_modificacio($request);
        $data['consulta'] = $consulta;


        $this->view->show("resultat.php", $data);


    }



    public function agregar()
    {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}
?>      