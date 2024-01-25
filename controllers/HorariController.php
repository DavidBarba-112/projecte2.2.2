<?php
class HorariController
{
    private $view;

    function __construct()
    {
        //Creamos una instancia de nuestro mini motor de plantillas
        $this->view = new View();
    }
 
    public function horari($request)
    {
        //Incluye el modelo que corresponde
        require 'models/TreballadorsModel.php';
        require 'models/OcupacionstModel.php';

 
        //Creamos una instancia de nuestro "modelo"
        $treballadors = new TreballadorsModel();
        $ocupacions = new OcupacionstModel();

 
        //Le pedimos al modelo todos los items
        $rs_treballadors = $treballadors->listadoTotal();
        $rs_ocupacions = $ocupacions->listadoTotal();

        //Pasamos a la vista toda la información que se desea representar
        $data['treballadors'] = $rs_treballadors;
        $data['ocupacions'] = $rs_ocupacions;

        //Finalmente presentamos nuestra plantilla
        $this->view->show("draganddrop.php", $data);


    }

    public function gravar_assignacio($request) {
        require 'models/OcupacionsTreballadorsModel.php';

        $ocupacions_treballador = new OcupacionsTreballadorsModel();

        $rs_ocupacions_treballador = $ocupacions_treballador->gravar_assignacio($request);

        echo "Request rebut correctament.\nid_ocupacio: ".$request["id_ocupacio"]."\nid_treballador: ".$request["id_treballador"];

    }

    public function carregar_classificacio($request) {
        require 'models/OcupacionsTreballadorsModel.php';

        $ocupacions_treballador = new OcupacionsTreballadorsModel();

        $rs_ocupacions_treballador = $ocupacions_treballador->carregar_classificacio($request);

        $data = [];
        while($reg=$rs_items_box->fetch()) {
            $data[] = $reg;
        }
        echo json_encode($data);

    }




}
?>       