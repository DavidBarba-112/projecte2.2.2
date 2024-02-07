<?php

require_once 'models/DisponibilitatModel.php'; // Incluir el DAO aquí.

class DisponiblitatController {
    private $disponibilitatDAO;

    public function __construct() {
        $this->disponibilitatDAO = new DisponibilitatDAO();
    }

    public function disponiblitat($request) {
        $listado = $this->disponibilitatDAO->getAllDisponibilities();
        // Resto del código...
    }

    public function formulario_modificar($request) {
        $listado = $this->disponibilitatDAO->getDisponibilityById($request["param"]);
        $classes = $this->disponibilitatDAO->getAllWorkers();
        // Resto del código...
    }

    public function gravar_modificacio($request) {
        $consulta = $this->disponibilitatDAO->updateDisponibility($request["id_treballador"], $request["diponiblitat"]);
        // Resto del código...
    }

    public function eliminar($request) {
        $consulta = $this->disponibilitatDAO->deleteDisponibility($request["param"]);
        // Resto del código...
    }

    public function agregar() {
        echo 'Aquí incluiremos nuestro formulario para insertar items';
    }
}
?>
