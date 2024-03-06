<?php
class FotosController
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

}