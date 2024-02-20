<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estil2.css">
    <title>Document</title>
</head>

<style>
  #site-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: white;
    text-align: center;
    padding: 10px 0; /* Ajusta el espacio interno del footer según sea necesario */
}

</style>
href="/projecte2.2.2/index.php?controlador=Treballadors&accion=treballadors"

    
<body>
  <?php

  // Mostrar el correo del usuario si está autenticado
session_start();

?>

    <div class="layout">
        <div class="layout__container">
          <div class="layout__container-before"></div>
      
          <!-- BEGIN sidebar -->
          <aside class="sidebar">
          <div class="sidebar__header">
                
                <a href="personal.html" >
                     <?php  if (!isset($_SESSION['user']) || $_SESSION['user']['rol'] != 'Administrador') {
        echo " " . $_SESSION['user']['email'];
  } ?></a>
            </div>
            <div class="sidebar__content">
              <ul class="sidebar__content-menu">
               <!-- <li > <a href="/MVC/index.php?controlador=Ocupacions&accion=ocupacions">Llistat Ocupacions</a></li>
                <li><a href="/MVC/index.php?controlador=Hora&accion=hora">Llistat hores</a></li>
                <li><a href="/MVC/index.php?controlador=Disponiblitat&accion=disponiblitat">Llistat disponibilitat</a></li>
                <li><a href="/MVC/index.php?controlador=Hora&accion=hora">Llistat eff</a></li> -->
                <li > <a href="/projecte2.2.2/index.php?controlador=Llistat&accion=llistat">Llistat llibres</a></li>
                <li > <a href="/projecte2.2.2/index.php?controlador=Llistatvenut&accion=llistatvenut">Llistat llibres venuts</a></li>


                <li><a href="calendari.html">Calendari</a></li>
 


                


                <!--<li class="sidebar--active">
                  <ul>
                    <li><a href="#">Category 5</a></li>
                    <li><a href="#">Category 5.1</a></li>
                    <li><a href="#">Category 5.2</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </aside>
          <!--  //END sidebar -->
          
          <!-- BEGIN main -->
          <main class="main">
      
            <div class="main__header">
              <div class="main__header-heading">
                <h1>Dashboard</h1>

              </div>
              <div class="main__header-heading">
              <h3> <a class="nav-link" style="color:tomato;" href="logout.php?logout=true">Cerrar sesión</a> </h3>

              </div>
              
              <div class="main__header-user">
                <button type="button" class="main__header-user-toggle" data-toggle="dropdown" data-toggle-for="user-menu" role="button">
                  <span class="main__header-user-toggle-picture">
                    <img src="holder.js/40x40/thumb" alt="">
                  </span>
                </button>
                <div class="main__header-user-menu" id="user-menu">
                  <div class="main__header-user-menu-header">
                    <span>Username</span>
                  </div>
                  <ul class="main__header-user-menu-content">
                    <li><a href="#"><i class="icon icon--dashboard"></i>Dashboard</a></li>
                    <li><a href="#"><i class="icon icon--profile"></i>My profile</a></li>
                    <li><a href="#"><i class="icon icon--settings"></i>Settings</a></li>
                    <li><a href="#"><i class="icon icon--help"></i>Help center</a></li>
                    <li><a href="#"><i class="icon icon--sign-out"></i>Sign out</a></li>
                  </ul>
                </div>
              </div>
            </div>
          
            <div class="main__content">
              <p>Aqui con ajax mostrar las tablas</p>
                
            </div>
        </main>
        <!--  //END main -->
          
        <div class="layout__container-after"></div>
      
        <script id="list-template" type="text/x-handlebars-template">
          <div class="items">
            <div class="items__inner">
              <ul class="items__inner-header">
                <li><h3>Heading 1</h3></li>
                <li><h3>Heading 2</h3></li>
                <li><h3>Heading 3</h3></li>
                <li><h3>Heading 4</h3></li>
                <li class="items__inner-header--action"></li>
              </ul>
              {{#each items}}
              <ul class="items__inner-content">
                <li>Item 1</li>
                <li>Item 1</li>
                <li>Item 1</li>
                <li>Item 2</li>
                <li class="items__inner-content--action">
                  <button><span>Action</span></button>
                </li>
              </ul>
              {{/each}}
            </div>
        </script>
          
      </div> 



    
</body>

<footer id="site-footer" class="site-footer">
        
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
           <a href="#">Scanfcode</a>.
              </p>
            </div>
  

          </div>
        </div>
  </footer>
    
</html>