<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){
    // DB details
    $dbHost     = 'localhost';
    $dbUsername = 'pma';
    $dbPassword = 'P@ssw0rd';
    $dbName     = 'bibliotecas';

    // Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }

    // Prepare data for insertion
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); // Image
    $price = $_POST['price']; // Price
    $nom = $_POST['nom']; // Nombre
    $categoria = $_POST['categoria']; // Nombre


    // Insert image data into database
    $insert = $db->query("INSERT into images (image, price, created, nom, categoria) VALUES ('$image', '$price', NOW(), '$nom', '$categoria')");    
    if($insert){
        echo "File uploaded successfully.";

    }else{
        echo "File upload failed, please try again.";
    }

    // Close DB connection
    $db->close();
}
?>
