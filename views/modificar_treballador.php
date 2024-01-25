<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
/* Style for body and form */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

form {
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.2);
}

/* Style for table */
table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 20px;
    margin-bottom: 20px;
}

th, td {
    text-align: left;
    padding: 8px;
    border: 1px solid #ddd;
}

th {
    background-color: #4CAF50;
    color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

/* Style for form inputs */
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style for links */
a {
    color: #4CAF50;
    text-decoration: none;
}

a:hover {
    color: #45a049;
}
</style>

<body>
    <form action=index.php method="GET">
    <input type="hidden" name=controlador value=Treballadors>
    <input type="hidden" name=accion value=gravar_modificacio>
        <table>
            <?php 
                $item = $listado->fetch();
                foreach($item as $key=>$value) { 
                    if($key == "id_treballador"){ ?>
                        <tr>
                            <td><label for=id_treballador>id_treballador </label></td>
                            <td><SELECT id=id_treballador name=id_treballador>
                                <option value=0></option> <?php
                                while($class_reg = $classes->fetch()){ ?>
                                    <option value=<?php echo $class_reg["id_treballador"] ?>
                                    <?php echo ($class_reg["id_treballador"]==$value ?" selected":"") ?>>
                                        <?php echo $class_reg["id_treballador"] ?>
                                    </option><?php

                                }?>


                            </SELECT> </td></tr> <?php
                    }else{ ?>
                        <tr>
                            <td><label for=<?php echo $key ?>><?php echo $key ?></label></td>
                            <td><input type=text name=<?php echo $key ?> id=<?php echo $key ?> value="<?php echo $value ?>"></td>
                        </tr><?php
                    }
                } ?>
        </table>
        <input type="submit" value="Grabar dades">

        <table>
            <?php
            echo $classes->rowCount();
            $item = $classes->fetch();
            print_r($item);
            foreach($item as $key=>$value) { ?>
                <th><?php echo $key ?></th><?php
            }
            do { ?>
                <tr><?php
                foreach($item as $key=>$value) { ?>
                    <td><?php echo $value ?></td><?php

                } ?>
            <td><a href="index.php?controlador=Treballadors&accion=formulario_modificar&param=<?php echo $item["id_preferencia"] ?>">Editar </a></td><a href="">Eliminar</a></td>
                </tr> <?php
            } while($item = $classes->fetch()); ?>
        </table>



    </form>
</body>
</html>