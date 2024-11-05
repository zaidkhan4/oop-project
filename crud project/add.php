<?php

include 'user.php';



$bang = new india();


if(isset($_POST['submit'])){
    $bang->insert($_POST);
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
                <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
            </div>

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" placeholder="Enter password" required>
            </div>

            <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="SUBMIT">

        </form>
    </div>

</body>
</html>