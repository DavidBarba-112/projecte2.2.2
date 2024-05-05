<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Panel</title>
    <link rel="stylesheet" href="styles.css"> <!-- Agrega el archivo CSS externo -->
</head>
<style>
  /* Estilos generales */
body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f5f5f5; /* Color de fondo para el cuerpo */
}

#panel {
    border: 1px solid #ccc; /* Borde del panel */
    padding: 20px; /* Espaciado interno */
    width: 300px; /* Ancho del panel */
    background-color: #fff; /* Color de fondo del panel */
    border-radius: 10px; /* Bordes redondeados */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra */
}

h2 {
    margin-top: 0; /* Eliminar margen superior */
    color: #333; /* Color del texto del título */
}

p {
    margin: 10px 0; /* Margen entre párrafos */
}

span {
    font-weight: bold; /* Texto en negrita */
    color: #007bff; /* Color del texto destacado */
}

button {
    background-color: #007bff; /* Color de fondo del botón */
    border: none; /* Sin borde */
    color: #fff; /* Color del texto del botón */
    padding: 10px 20px; /* Espaciado interno */
    border-radius: 5px; /* Bordes redondeados */
    cursor: pointer; /* Cursor al pasar el ratón */
    transition: background-color 0.3s; /* Transición suave del color de fondo */
}

button:hover {
    background-color: #0056b3; /* Color de fondo del botón al pasar el ratón */
}

</style>
<body>
<div id="panel">
    <h2>Panel de Pago</h2>
    <p>Rebut: <input type="number" id="receivedInput" min="0" step="0.01"></p>
    <p>Total: <span id="total">$0.00</span></p>
    <p>Canvi: <span id="change">$0.00</span></p>
    <button id="dar">Donar canvi</button>
</div>


    <script>
        const received = document.getElementById('received');
        const total = document.getElementById('total');
        const change = document.getElementById('change');
        const dar = document.getElementById('dar');

        // Función para obtener el valor del total desde la URL
        function getUrlParameter(name) {
            name = name.replace(/[[]/, '\\[').replace(/[\]]/, '\\]');
            const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
            const results = regex.exec(location.search);
            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
        };

        // Obtener el valor del total desde la URL
        const totalAmount = parseFloat(getUrlParameter('total'));

        // Verificar si el total es un número válido
        if (!isNaN(totalAmount)) {
            // Mostrar el total en el panel
            total.textContent = `$${totalAmount.toFixed(2)}`;

            dar.addEventListener('click', () => {
    // Obtener el valor recibido del campo de entrada
    const receivedAmount = parseFloat(document.getElementById('receivedInput').value);
    // Calcular el cambio restando el total recibido del total a pagar
    const changeAmount = receivedAmount - totalAmount;
    // Mostrar el cambio en el campo "Cambio:"
    change.textContent = `$${changeAmount.toFixed(2)}`;
});

        } else {
            // Si el total no es un número válido, mostrar un mensaje de error
            total.textContent = 'Error: Total no válido';
        }
    </script>
</body>
</html>
