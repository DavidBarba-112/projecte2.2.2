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

    $instanciacontrollador = new UsuarioController();
    $password = password_hash($_POST['contrasenya'], PASSWORD_BCRYPT);
    $foto = $_FILES['imagen']['name'];
    $fototemporal = $_FILES['imagen']['tmp_name'];
    $fotourl = "../Views/Usuario/Image/" . $foto;
    copy($fototemporal,$fotourl);
    $instanciacontrolador->SaveInfoForModel(
        $_POST['nombre'],
        $_POST['email'],
        $_POST['documento'],
        $password,
        $_POST['rol'],
        $foto,
        $fotourl
    );
}

?>  