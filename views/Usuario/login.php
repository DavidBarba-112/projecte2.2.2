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
    <img src="http://res.cloudinary.com/dzqowkhxu/image/upload/v1513679279/bg-login_bxxfkf.png">
    <div class="h1">Enter the Nebula</div>
  </div>
  <div class="login-right">
    <div class="h2">Register</div>
    <div class="form-group">
      <input type="text" id="full-name" placeholder="Full Name">
      <label for="full-name">Full Name</label>    
    </div>
    <div class="form-group">
      <input type="text" id="Email" placeholder="Email">
      <label for="Email">Email</label>    
    </div>
    <div class="form-group">
      <input type="password" id="Password" placeholder="Password">
      <label for="Password">Password</label>    
    </div>
    <div class="checkbox-container">
      <input type="checkbox">
      <div class="text-checkbox">I agree with the terms of service.</div>
    </div> 
    <div class="button-area">
      <button class="btn btn-secondary">Login</button>
      <button class="btn btn-primary">Sign Up</button>
    </div>
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