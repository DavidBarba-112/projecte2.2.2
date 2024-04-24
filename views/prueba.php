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

  .back-arrow {
  position: relative;
  left: 10px;
  top: 10px;
  font-size: 24px;
  cursor: pointer;
}
</style>
<body>
    <h2 id="titol">Llistat</h2>
    <br>
    <i class="back-arrow">Volver  </i>

    <table border="1">
        <thead>
            <tr>
                <?php foreach ($items[0] as $key => $value) : ?>
                    <th><?php echo $key; ?></th>
                <?php endforeach; ?>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item) : ?>
                <tr>
                    <?php foreach ($item as $key => $value) : ?>
                        <td><?php echo $value; ?></td>
                    <?php endforeach; ?>
                    <td><a href="index.php?controlador=Llistat&accion=formulario_modificar&param=<?php echo $item["id_llibre"]; ?>">Editar</a></td>
                    <td><a href="index.php?controlador=Llistat&accion=eliminar&param=<?php echo $item["id"]; ?>">Eliminar</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
<script>
  document.querySelector('.back-arrow').addEventListener('click', function() {
  window.history.back();
});

</script>
</html>
