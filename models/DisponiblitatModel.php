<?php

require_once 'SPDO.php'; // Asumiendo que aquí está la clase SPDO.

class DisponibilitatDAO {
    protected $db;

    public function __construct() {
        $this->db = SPDO::singleton();
    }

    public function getAllDisponibilities() {
        $query = 'SELECT disponiblitat.id_disponible, disponiblitat.diponiblitat, treballadors.nom
                  FROM disponiblitat
                  JOIN treballadors ON disponiblitat.id_treballador = treballadors.id_treballador';

        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDisponibilityById($id) {
        $query = 'SELECT * FROM disponiblitat WHERE id_disponible = :id';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function getAllWorkers() {
        $query = 'SELECT * FROM treballadors';

        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateDisponibility($id, $newAvailability) {
        $query = 'UPDATE disponiblitat SET diponiblitat = :availability WHERE id_disponible = :id';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':availability', $newAvailability);
        $statement->execute();

        return $statement->rowCount();
    }

    public function deleteDisponibility($id) {
        $query = 'DELETE FROM disponiblitat WHERE id_disponible = :id';

        $statement = $this->db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->rowCount();
    }
}
?>
