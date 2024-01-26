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

?>  