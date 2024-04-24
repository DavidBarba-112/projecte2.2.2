<?php
class GaleriaController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 



    public function listadog($request)
    {
        //Incluye el modelo que corresponde
        require 'models/GaleriaModel.php';
 
        //Creamos una instancia de nuestro "modelo"
        $items = new GaleriaModel();
 
        //Le pedimos al modelo todos los items
        $listado = $items->listadog();
        //Pasamos a la vista toda la información que se desea representar
        $data['listado'] = $listado;
        //Finalmente presentamos nuestra plantilla
        $this->view->show("prueba.php", $data);

    }
 


}
?>