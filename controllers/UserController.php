<?php
require_once 'models/UserModel.php';

class UserController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function login($email, $password) {
        $user = $this->model->getUserByEmailAndPassword($email, $password);

        if ($user) {
            // Iniciar sesión y redirigir a la página principal
            session_start();
            $_SESSION['user'] = $user;
            header("Location: home.php");
        } else {
            // Mostrar mensaje de error
            echo "Usuario o contraseña incorrectos.";
        }
    }
}
?>
