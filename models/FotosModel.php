<?php
class FotrosModel
{
    protected $db;
 
    public function __construct()
    {
        //Traemos la única instancia de PDO
        $this->db = SPDO::singleton();
    }


    public function listado1(){
    // Prepare data for insertion
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); // Image
    $price = $_POST['price']; // Price

    // Insert image data into database
    $consulta = $this->db->query("INSERT into images (image, price, created) VALUES ('$image', '$price', NOW())");
    
    if($consulta){
        echo "File uploaded successfully.";
    }else{
        echo "File upload failed, please try again.";
    }

    // Close DB connection
    $this->db->close();
    
        $consulta->setFetchMode(PDO::FETCH_ASSOC);
        $consulta->execute();
        return $consulta;
    }
    
}