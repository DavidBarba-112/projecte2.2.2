<?php
require '../models/Usuario.php';
class UsuarioController extends Usuario{

public function LoginView(){
    require '../views/Usuario/login.php';


}


public function insertView(){
    require '../views/Usuario/insert.php';


}

}

if(isset($_GET['action']) && $_GET['action']=='login'){
    $instanciacontrolador = new UsuarioController();
    $instanciacontrolador->LoginView();

}

if(isset($_GET['action']) && $_GET['action']=='insert'){
    $instanciacontrolador = new UsuarioController();
    $instanciacontrolador->InsertView();

}


if(isset($_POST['action']) && $_POST['action']=='insert'){
    $password = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);
    echo "Esta es la contrasenya "  . $_POST['contrasenya'] ."<br>";
    echo "Esta es la contrasenya Encriptada" . $password;

}

?>  