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
.bajar{
  background-color: #ddd;
  height: 3px;
}
footer{
  background-color: #ffff;
}
#searchContainer {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-top: 20px;
    margin-bottom: 20px;
}

#searchInput {
    margin-right: 10px;
}

#searchContainer button {
    background-color: #0066cc;
    border-radius: 3px;
    color: #fff;
    margin-right: 10px;
    padding: 8px 16px;
    border: none;
    cursor: pointer;
}

#searchContainer button:hover {
    background-color: #004080;
}

#cartContainer {
    max-height: 50vh; /* Limita la altura del contenedor */
    overflow-y: auto; /* Agrega desplazamiento vertical si el contenido excede la altura máxima */
    background-color: #ddd;
    padding: 20px;
    margin-bottom: 20px;
}

#cartContainer h2 {
    margin-top: 0;
}

#cartContainer button {
    margin-top: 10px;
}

#bookList{
    overflow-y: scroll;
    max-height: 50vh;
    width: 90%;
    margin:auto;
    
}
#cartContainer{
    margin-top: 40px;
}


</style>
<body>
    <h2 id="titol">Llistat de llibres</h2>
    <br>
    <a href="index2.2.php" class="back-arrow">Torna  </a>
    <br>
<br>

<div id="searchContainer">
    <input type="text" id="searchInput" placeholder="Busca llibre pel nom">
    <button onclick="searchBooks()">Buscar</button>
    <button onclick="resetSearch()">Eliminar flitres</button>
</div>



<br>


<div id="bookList">


<table id="bookTable" border="1">
    <thead>
        <tr>
            <?php
            $item = $listado->fetch();
            foreach ($item as $key => $value) {
                ?>
                <th <?php if ($key === 'id_llibre') echo 'style="display: none;"' ?> > <?php echo $key ?></th>
            <?php } ?>
            <th>Comprar</th>
        </tr>
    <?php do { ?>
        <tr>
            <?php foreach ($item as $key => $value) { ?>
                <td <?php if ($key === 'id_llibre') echo 'style="display: none;"' ?>><?php echo $value ?></td>
            <?php } ?>
            <td>
                <button class="button" onclick="console.log(<?php echo $item['id_llibre']; ?>, '<?php echo $item['nom']; ?>', <?php echo $item['preu']; ?>, '<?php echo $item['categoria']; ?>'); addToCart(<?php echo $item['id_llibre']; ?>, '<?php echo $item['nom']; ?>', <?php echo $item['preu']; ?>, '<?php echo $item['categoria']; ?>')">Afegir</button>
            </td>
        </tr>
    <?php } while ($item = $listado->fetch()); ?>
</table>  

    </div>

    <div id="cartContainer">
    <h2>Carrito</h2>
    <div id="cart">
        <!-- Contenido del carrito -->
    </div>
    <div id="total"></div>
    <button class="button" onclick="payCash()">Pagar</button>
</div>


 <!--   <button id="carrito-btn">Carrito</button> -->
 <!--   <div id="carrito-container">a</div> -->


</body>

<script>




var cart = {}; // Objeto para almacenar los productos agregados al carrito

function addToCart(id, nombre, precio, categoria) {
    // Verifica si los valores recibidos son válidos
    if (id !== undefined && nombre !== undefined && !isNaN(parseFloat(precio)) && isFinite(precio) && categoria !== undefined) {
        if (cart[id]) {
            // Si el producto ya está en el carrito, aumenta la cantidad
            cart[id].quantity++;
        } else {
            // Si es la primera vez que se agrega el producto, crea una nueva entrada en el carrito
            cart[id] = {
                nombre: nombre,
                precio: parseFloat(precio),
                categoria: categoria,
                quantity: 1
            };
        }
        
        // Actualiza la vista del carrito
        updateCartView();
        // Actualiza el total
        updateTotal();
        
        // Obtiene la fecha y hora actual
        var fechaVenta = new Date().toISOString().slice(0, 19).replace('T', ' ');
        
        // Envía una solicitud AJAX para guardar el producto en la base de datos
        saveProductToDatabase(id, nombre, precio, categoria, fechaVenta);
    } else {
        console.error('Valores recibidos no válidos:', id, nombre, precio, categoria);
    }
}

function saveProductToDatabase(id, nombre, precio, categoria, fechaVenta) {
    // Crea un objeto con los detalles del producto
    var producto = {
        id: id,
        nombre: nombre,
        precio: precio,
        categoria: categoria,
        fechaVenta: fechaVenta // Agrega la fecha de venta al objeto producto
    };
    
    // Envía una solicitud AJAX al servidor para guardar el producto en la base de datos
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "views/guardar_producto.php", true);
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log("Producto guardado en la base de datos:", producto);
        }
    };
    xhr.send(JSON.stringify(producto));
}



function updateCartView() {
    var cartElement = document.getElementById("cart");
    var cartHTML = "<h3>Carrito de Compras</h3>";

    for (var productId in cart) {
        var product = cart[productId];
        // Verifica si el precio del producto es un número válido antes de mostrarlo en el carrito
        if (!isNaN(product.precio) && isFinite(product.precio)) {
            var totalPrice = product.precio * product.quantity;
            cartHTML += "<div>Producto: " + product.nombre + " - Cantidad: " + product.quantity + " - Precio Unitario: $" + product.precio.toFixed(2) + " - Precio Total: $" + totalPrice.toFixed(2) + "</div>";
        }
    }

    cartElement.innerHTML = cartHTML;
}




function updateTotal() {
    var total = 0;
    for (var productId in cart) {
        var product = cart[productId];
        // Verifica si el precio del producto es un número válido antes de sumarlo al total
        if (!isNaN(product.precio) && isFinite(product.precio)) {
            total += product.precio * product.quantity;
        }
    }
    console.log("Total actualizado:", total);
    document.getElementById("total").innerHTML = "<h3>Total: $" + total.toFixed(2) + "</h3>";
}


function payCash() {
    // Obtener el total del carrito
    var totalAmount = document.getElementById("total").textContent.trim().replace('Total: $', '');
    
    // Redirigir a metalico.php con totalAmount total del carrito como parámetro
    var url = 'metalico.php?total=' + totalAmount;
    window.location.href = url;
}




function payCard() {
// Lógica para pagar con tarjeta
alert("Payment with card completed.");
// Puedes agregar aquí la lógica adicional, como limpiar el carrito o redirigir a otra página.
}

function searchBooks() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("bookTable");
    tr = table.getElementsByTagName("tr");
    
    // Itera sobre todas las filas y oculta aquellas que no coincidan con la búsqueda
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1]; // Cambia el índice 1 al índice del campo donde está el nombre del libro
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }       
    }
}

function resetSearch() {
    var table = document.getElementById("bookTable");
    var rows = table.getElementsByTagName("tr");
    for (var i = 0; i < rows.length; i++) {
        rows[i].style.display = "";
    }
}

function filterByCategory() {
    var selectedCategory = document.getElementById("categoryFilter").value;
    var table = document.getElementById("bookTable");
    var rows = table.getElementsByTagName("tr");
    
    for (var i = 1; i < rows.length; i++) { // Empezamos desde 1 para omitir la fila de encabezado
        var categoryCell = rows[i].getElementsByTagName("td")[3]; // Suponiendo que el índice de la columna de categoría es 3
        if (categoryCell) {
            var category = categoryCell.textContent || categoryCell.innerText;
            if (selectedCategory === "" || category === selectedCategory) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
}


</script>
</html>