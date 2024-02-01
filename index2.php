<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login2.css">
    <title>Login</title>

</head>


<body>
    <form action="index2.php" method="post">
        
        <div class="login-wrapper">
          <div class="login-left">
            <div class="h1">Enter the Nebula</div>
          </div>
          <div class="login-right">

            <div class="form-group">
              <label>Email: </label>    

              <input type="text" name="email" id="Email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <label>Password</label>    
              <input type="password" name="password" id="Password" placeholder="Password" required>
            </div>
            <div class="button-area">
              <button type="submit" name="login" class="btn btn-secondary">Login</button>
            </div>
          </div>
        </div>
    </form>
    <script>
        var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});
    </script>
</body>


</html>

<?php
// Controlador
require_once 'controllers/UserController.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    $db = new mysqli('localhost', 'pma', 'P@ssw0rd', 'bibliotecas');

    if ($db->connect_error) {
        die("Error de conexión: " . $db->connect_error);
    }

    // Modelo
    $model = new UserModel($db);

    // Controlador
    $controller = new UserController($model);

    // Iniciar sesión
    $controller->login($email, $password);

    // Cerrar la conexión a la base de datos
    $db->close();
}
?>
