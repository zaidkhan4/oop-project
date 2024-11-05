<?php

include 'user.php';

$bang = new india();

if(isset($_GET['editId'])){
    $editid = $_GET['editId'];
    $rs = $bang->displaydata($editid);
}

if(isset($_POST['update'])){
    $bang->update($_POST);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card text-center" style="padding:15px;">
        <h4>PHP MYSQL OOP CRUD (ADD, EDIT, DELETE, UPDATE) OOP (Object Oriented Programming)</h4>
    </div><br><br>
    
    <div class="container">

        <form action="" method="POST">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="<?php echo $rs['name']; ?>" required>
            </div><br>

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email"  value="<?php echo $rs['email']; ?>" required>
            </div><br>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value="<?php echo $rs['username']; ?>" required>
            </div><br>

            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $rs['id']; ?> ">
                <input type="submit" name="update" class="btn btn-primary" value="UPDATE">
            </div>
        </form>
    </div>
</body>
</html>