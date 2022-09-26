<?php 
   require_once './connect.php';
   
   $id = $_GET["id"];

   $sql = "DELETE from info WHERE id=:id ";

   $query = $db->prepare($sql);

   $query->bindParam(':id',$id, PDO::PARAM_STR);

   $result = $query->execute();

   header("location: index.php");

?>