


<?php 
$server = 'mysql:host=localhost;dbname=patints';
$user = 'root';
$pass = 'root';

try{
    $db = new PDO ($server , $user , $pass);
    $db -> setAttribute (PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    // echo 'connected';
}catch(PDOException $error){
    echo 'connection failed ' . $error->getMessage();

}



?>
