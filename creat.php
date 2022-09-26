<?php
   require_once './connect.php';

   if(isset($_POST['submit'])){
     
     $name = $_POST['name'];
     $age = $_POST['age'];
     $address = $_POST['address'];

    //  echo $name;


    $sql = "INSERT INTO info (name , age, address ) VALUES (:name , :age , :address )";

    $query = $db->prepare($sql);

    $query->bindParam(':name',$name, PDO::PARAM_STR);
    $query->bindParam(':age',$age, PDO::PARAM_STR);
    $query->bindParam(':address',$address, PDO::PARAM_STR);

    $result = $query->execute();

    header("location: index.php");

   }



   ?>