
<?php
class DisponiblitatController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 




    public function disponiblitat($request)
    {
        //Incluye el modelo que corresponde
        require 'models/DisponiblitatModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new DisponibilitatModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadoTotal5();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("disponiblitat.php", $data);

    }





    public function formulario_modificar($request){
        require 'models/DisponiblitatModel.php';
        $items = new DisponibilitatModel();

        $listado = $items->datos_formulario($request ["param"]);
        $classes = $items->listadoClases($request ["param"]);

        $data['listado'] = $listado;
        $data['classes'] = $classes;


        $this->view->show("modificar_disponiblitat.php",$data); 

    }

    public function gravar_modificacio($request){
        require 'models/DisponiblitatModel.php';
        $items = new DisponibilitatModel();
        $consulta = $items->gravar_modificacio($request);
        $data['consulta'] = $consulta;


        $this->view->show("resultat.php", $data);


    }

    
    public function eliminar($request){
        require 'models/DisponiblitatModel.php';
        $items = new DisponibilitatModel();
        $consulta = $items->eliminar($request);
        $data['consulta'] = $consulta;
        if(isset($_GET["param"])){
            $id = $_GET["param"];
            $model = new DisponibilitatModel();
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