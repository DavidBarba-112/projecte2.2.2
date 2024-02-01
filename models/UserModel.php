<?php
class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getUserByEmailAndPassword($email, $password) {
        $query = "SELECT * FROM usuarios WHERE email = ? AND password = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();
        return $user;
    }
}
?>
