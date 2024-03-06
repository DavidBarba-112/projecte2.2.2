var cart = {}; // Objeto para almacenar los productos agregados al carrito

function addToCart(imageId, price) {
	if (cart[imageId]) {
		// Si el producto ya está en el carrito, aumenta la cantidad
		cart[imageId].quantity++;
	} else {
		// Si es la primera vez que se agrega el producto, crea una nueva entrada en el carrito
		cart[imageId] = {
			price: price,
			quantity: 1
		};
	}

	// Actualiza la vista del carrito
	updateCartView();
	// Actualiza el total
	updateTotal();
}

function updateCartView() {
    var cartElement = document.getElementById("cart");
    cartElement.innerHTML = "<h3>Shopping Cart</h3>";

    for (var productId in cart) {
        var product = cart[productId];
        cartElement.innerHTML += "<div>Product ID: " + productId + " - Price: $" + product.price + " - Quantity: " + product.quantity + "</div>";
    }
}


function updateTotal() {
	var total = 0;
	for (var productId in cart) {
		var product = cart[productId];
		total += product.price * product.quantity;
	}
	document.getElementById("total").innerHTML = "<h3>Total: $" + total.toFixed(2) + "</h3>";
}

function payCash() {
	// Lógica para pagar en efectivo
	alert("Payment in cash completed.");
	// Puedes agregar aquí la lógica adicional, como limpiar el carrito o redirigir a otra página.
}

function payCard() {
	// Lógica para pagar con tarjeta
	alert("Payment with card completed.");
	// Puedes agregar aquí la lógica adicional, como limpiar el carrito o redirigir a otra página.
}