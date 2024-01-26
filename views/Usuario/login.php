<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Login.css">
    <title>Login</title>
</head>
<body>

<div class="login-wrapper">
  <div class="login-left">
    <img src="/projecte2.2.2/images/Quien-es-Mister-Tartaria-y-Mickey-Mouse-Empirico-donde-ver-el-podcast-terraplanista-viral-en-tiktok-696x348.jpg">
    <div class="h1">Sistama TCP llibreria</div>
  </div>

  <form action="UsuarioController.php" mothod="POST" >
  <div class="login-right">
    <div class="h2">Entrar al sistema</div>
    <div class="form-group">
    <input type="hidden" name="action" value="login">
      <input type="text" id="full-name" placeholder="Nom del Usuari">
      <label for="full-name">Nom Usuari</label>    
    </div>

    <div class="form-group">
      <input type="password" id="Password" placeholder="Contrasenya">
      <label for="Password">COntrasenya</label>    
    </div>
    <div class="button-area">
      <button class="btn btn-primary">Entrar</button>
    </div>
</form>
  </div>
</div>
<script>
    var openLoginRight = document.querySelector('.h1');
var loginWrapper = document.querySelector('.login-wrapper');

openLoginRight.addEventListener('click', function(){
  loginWrapper.classList.toggle('open'); 
});
</script>
</body>
</html>