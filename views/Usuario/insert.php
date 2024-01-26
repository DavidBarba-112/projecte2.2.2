<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="ui container">
    <h1>Crear nuevo usuario</h1>
    <form action="PeliculasController.php" method="POST" enctype="multipart/form-data" class="ui form">
        <div class="four fields">

            <div class="field">
                <input type="hidden" name="action" value="insert">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre:">
            </div>

            <div class="field">
                <label for="genero">Email</label>
                <input type="text" name="email" placeholder="Email:">
            </div>

            <div class="field">
                <label for="nombre">Documento</label>
                <input type="number" id="documento" name="Docuemnto:">
            </div>

            <div class="field">
                <label for="nombre">Contrasenya</label>
                <input type="text" id="contrasenya" name="Contrasenya">
            </div>
        </div>
        <div class="two fields">
            <div class="field">
                <label for="nombre">Rol </label>
                <select name="rol" id="">
                    <option value="Administrador">Administrador</option>
                    <option value="Empleado">Empleado</option>

                </select>

            </div>
            <div class="field">
                <label for="nombre">Iagen Usuario </label>
                <input type="file" name="imagen" accept=".jpeg , .jpg , .png , .gif">
            </div>
        </div>

        <div class="five fields">

        </div>
    </form>
</div>
    
</body>
</html>