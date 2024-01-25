<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Borbadeen peru</title>
</head>


<style>
  body {
    font-family: Arial, sans-serif;
  }

  h2 {
    color: #0066cc;
  }

  table {
    border-collapse: collapse;
    margin: 20px 0;
    width: 100%;
  }

  th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
  }

  th {
    background-color: #f2f2f2;
    font-weight: bold;
  }

  a {
    background-color: #0066cc;
    border-radius: 3px;
    color: #fff;
    display: inline-block;
    margin-right: 10px;
    padding: 8px 16px;
    text-decoration: none;
  }

  a:hover {
    background-color: #004080;
  }
</style>
<body>
    <h2 id="titol">Disponiblitat</h2>
    <table  border="1">
        <thead><tr><?php
        $item = $listado->fetch();
        foreach($item as $key=>$value) { ?>
            <th><?php echo $key ?></th><?php
        } ?>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
<?php 
    do { ?>  
        <tr><?php
            foreach($item as $key=>$value) { ?>
                <td><?php echo $value ?></td><?php
            } ?>
            <td><a href="index.php?controlador=Disponiblitat&accion=formulario_modificar&param=<?php echo $item["id_disponible"] ?>">Editar</a></td>
            <td><a href="index.php?controlador=Disponiblitat&accion=eliminar&param=<?php echo $item["id_disponible"] ?>">Eliminar</a></td>
        </tr> <?php
        } while($item = $listado->fetch());  ?>
    
    </table>   
    <a href="#">Afegir Disponiblitat</a>
    <!-- Queda pendent afegir i eliminar -->
</body>
</html>