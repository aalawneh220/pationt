<?php 
   require_once './connect.php';
   
   $id = $_GET['id'];

//    echo $id;

$sql ="SELECT * FROM info WHERE id =$id";

$getData = $db->query($sql);

$food = $getData->fetchAll(PDO::FETCH_OBJ);

print_r($food);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>

<form action="#" method="post">
              
                <div class="mb-3">
                    <label class="form-label"> Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $food[0]->name?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">age</label>
                    <input type="text" class="form-control" name="age" value="<?php echo $food[0]->age?>">
                </div>
                <div class="mb-3">
                    <label class="form-label">address</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $food[0]->address?>">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Edit</button>
            </form>



</body>

</html>

<?php 

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];


    $sql = "UPDATE info SET name=:name, age=:age, address=:address WHERE id=$id";


    $query = $db->prepare($sql);

    $query->bindParam(':name',$name, PDO::PARAM_STR);
    
    $query->bindParam(':age',$age, PDO::PARAM_STR);
    $query->bindParam(':address',$address, PDO::PARAM_STR);


    $result = $query->execute();

    header("location: index.php");
}



?>