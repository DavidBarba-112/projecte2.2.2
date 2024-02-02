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
            // Iniciar sesión y redirigir a la página correspondiente
            session_start();
            $_SESSION['user'] = $user;

            if ($user['rol_nombre'] == 'Administrador') {
                header("Location: admin_page.php");
            } else {
                header("Location: index2.2.php");
            }
        } else {
            // Mostrar mensaje de error
            echo "Usuario o contraseña incorrectos.";
        }
    }
}
?>
