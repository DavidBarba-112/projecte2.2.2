<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="../estiles.css">
    <title>Document</title>
</head>
<style>
	
  .icon-cart{
    width: 40px;
    height: 40px;
    stroke: #000;
}

.icon-cart:hover{
    cursor: pointer;
}

img{
    max-width: 100%;
}

/* Header */
header{
    display: flex;
    justify-content: space-between;
    padding: 30px 0 40px 0;
}

.container-icon{
    position: relative;
}

.count-products{
    position: absolute;
    top: 55%;
    right: 0;

    background-color: #000;
    color: #fff;
    width: 25px;
    height: 25px;

    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
}

#contador-productos{
    font-size: 12px;
}

.container-cart-products{
    position: absolute;
    top: 50px;
    right: 0;

    background-color: #fff;
    width: 400px;
    z-index: 1;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
    border-radius: 10px;
    
}

.cart-product{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 30px;

    border-bottom: 1px solid rgba(0, 0, 0, 0.20);

}

.info-cart-product{
    display: flex;
    justify-content: space-between;
    flex: 0.8;
}

.titulo-producto-carrito{
    font-size: 20px;
}

.precio-producto-carrito{
    font-weight: 700;
    font-size: 20px;
    margin-left: 10px;
}

.cantidad-producto-carrito{
    font-weight: 400;
    font-size: 20px;
}

.icon-close{
    width: 25px;
    height: 25px;
}

.icon-close:hover{
    stroke: red;
    cursor: pointer;
}

.cart-total{
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 0;
    gap: 20px;
}

.cart-total h3{
    font-size: 20px;
    font-weight: 700;
}

.total-pagar{
    font-size: 20px;
    font-weight: 900;
}

.hidden-cart{
    display: none;
}




/* Main */
.container-items{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.item{
    border-radius: 10px;
}

.item:hover{
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.20);
}

.item img{
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px 10px 0 0;
    transition: all .5s;
}

.item figure{
    overflow: hidden;
}

.item:hover img{
    transform: scale(1.2);
}

.info-product{
    padding: 15px 30px;
    line-height: 2;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.price{
    font-size: 18px;
    font-weight: 900;
}

.info-product button{
    border: none;
    background: none;
    background-color: #000;
    color: #fff;
    padding: 15px 10px;
    cursor: pointer;
}

.cart-empty{
    padding: 20px;
    text-align: center;
}


.hidden{
    display: none;
}
.btn-checkout{
	margin-top: 20px;
	
}
table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        table tr td {
            width: 25%;
            text-align: center;
            padding: 20px;
        }

        table tr td img {
            max-width: 100%;
            height: auto;
        }

        .button {
            background-image: linear-gradient(to bottom, #34abd7, #1D2B32);

            color: #FFFFFF;

            padding: 10px 20px;

            border: none;

            border-radius: 5px;

            cursor: pointer;

            font-size: 16px;

            text-transform: uppercase;

            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
        }

        .button:hover {
            background-image: linear-gradient(to bottom, #020278, #e82d0c);

            color: #FFFFFF;        
          }
          #cart {
    margin: 30px auto;
    width: 80%;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.cart-product {
    border-bottom: 1px solid #ddd; /* Agrega una línea divisoria entre los productos */
    padding: 10px 0; /* Ajusta el espacio interior */
}

.cart-product img {
    width: 80px; /* Tamaño de la imagen del producto */
    height: auto;
    margin-right: 10px;
}

.product-details {
    flex: 1; /* El detalle del producto ocupa el espacio restante */
}

.product-name {
    font-size: 16px;
    font-weight: bold;
}

.product-price {
    font-size: 14px;
    color: #888;
}

.product-quantity {
    font-size: 14px;
}

.product-total {
    font-size: 16px;
    font-weight: bold;
}

.cart-total {
    margin-top: 20px;
    text-align: right;
}

.cart-total h3 {
    font-size: 18px;
    font-weight: bold;
}

.total-amount {
    font-size: 20px;
    font-weight: bold;
}


 

</style>
<body>
    <?php 
    session_start();
    ?>
    <header>
        <hgroup>
            <h1>
                <?php   
                if (!isset($_SESSION['user']) || $_SESSION['user']['rol'] != 'Administrador') {
                    echo "Benbingut " . $_SESSION['user']['email'];
                }  
                ?>
            </h1>
            <a  href="logout.php?logout=true">&larr; Cerrar session</a>
        </hgroup>
    </header>
    
    <nav>
        <ul>
            <li><a class="brick dashboard" href="/projecte2.2.2/index.php?controlador=Llistat&accion=llistat"> <img src="libro.png" width="3px" height="4px" span class='icon ion-home'></span>Llistat Llibres</a></li>
            <li><a class="brick pages" href="/projecte2.2.2/index.php?controlador=Llistatvenut&accion=llistatvenut"> <img src="librov.png" span class='icon ion-document'></span>Libros vendidos</a></li>
            <li><a class="brick navigation" href="#"><span class='icon ion-android-share-alt'></span>Navigation</a></li>
            <li><a class="brick users" href="/projecte2.2.2/index.php?controlador=Galeria&accion=listadog"><span class='icon ion-person'></span>Prueba</a></li>
            <li><a class="brick settings" href="#"><span class='icon ion-gear-a'></span>Website Settings</a></li>
        </ul>
    </nav>
    
    <div id="content" class="pages">
        <header>
            <div class="brick identify">
                <img src="time-and-calendar2.png" span class="icon ion-document"></span>
            </div>
    
            <a href="#"><div class="brick title">
                
                <h2>Calendario</h2>

            </div></a> 

			<a href="form.html"><div class="brick title">
                
                <h2>Añadir</h2>

            </div></a> 
    
            <div class="brick close">
                <span class="text">Close</span>
                <span class="icon ion-close"></span>
            </div>
    
    
            <div class="brick save">
                <span class="text">Save</span>
                <span class="icon ion-checkmark"></span>
            </div>
        </header>

		<h1>Gallery</h1>
        
        
</body>

</html>
