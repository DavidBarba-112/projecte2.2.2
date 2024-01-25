<?php
require '../models/Usuario.php';
class UsuarioController extends Usuario{

public function LoginView(){
    require '../views/Usuario/login.php';


}

}

if(isset($_GET['action']) $$ $_GET['action']=='login'){
    $instanciacontrolador = new UsuarioController();
    $instanciacontrolador->LoginView();

}

?>  