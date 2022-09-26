<?php 

   require_once './connect.php';

   $sql = 'SELECT * FROM info';

   $getData = $db->query($sql);

   $food = $getData->fetchAll(PDO::FETCH_OBJ);

//    print_r( $food);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
        <form action="./creat.php" method="post">
                
                <div class="mb-3">
                    <label class="form-label"> Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">age</label>
                    <input type="text" class="form-control" name="age">
                </div>
                <div class="mb-3">
                    <label class="form-label">address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="row">
        <div class="row">
            <table>
                <tr>
                   
                    <th>Name</th>
                    <th>age</th>
                    <th>address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php foreach($food as $type) { ?>
                    <tr>         
                        
                        <td><?php echo $type->name ?></td>
                        <td><?php echo $type->age ?></td>
                        <td><?php echo $type->address ?></td>
                        <td><a href="edit.php?id=<?php echo $type->id ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $type->id ?>" >Delete</a></td>
                    </tr>

                <?php } ?>
        

            </table>

        </div>


        </div>
    </div>
    <?php foreach($food as $type) { ?>
    <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://t3.ftcdn.net/jpg/03/46/83/96/360_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $type->name ?></h5>
    <p class="card-text"><?php echo $type->age ?></p>
    <p class="card-text"><?php echo $type->address ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    <?php } ?>
  </div>
</div>

</body>

</html>