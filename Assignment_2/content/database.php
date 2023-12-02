<?php
// setting up connection to the server
try{
    $conn = new PDO('mysql:host=172.31.22.43;dbname=Rodrigo200549271', 'Rodrigo200549271', 'MVe9E-OiyJ');
   
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo "<p> Connection failed :" . $e->getMessage();
}
?>
