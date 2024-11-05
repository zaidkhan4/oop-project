<?php


class india {
    public $conn;
    //database connection
    public function __construct(){
        $this->conn = mysqli_connect("localhost", "root", "", "pakistan");
        if(!$this->conn){
            echo "Connection error: " . mysqli_connect_error();
        }
    }

    // select data into database
    public function select(){
        $sql = "SELECT * FROM country ";
        $runquery = mysqli_query($this->conn,$sql);
        $narry = array();
        while ($data = mysqli_fetch_array($runquery)) {
            $narry[] = $data;
        }
        return $narry;
    }

    public function delete_data($id){
        $sql = "DELETE FROM  country  WHERE id = '$id' ";
        $query = mysqli_query($this->conn,$sql);
        if($query){
            header("location:index.php");
        }else{
            echo "Record does not delete try again";
        }
    }

}

$bang = new india();
 $sel = $bang->select();


 if(isset($_GET['deleteId'])){
    $deleId = $_GET['deleteId'];
    $rs = $bang->delete_data($deleId);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="card text-center" style="padding:15px;">
        <h4>PHP MYSQL OOP CRUD (ADD, EDIT, DELETE, UPDATE) OOP (Object Oriented Programming)</h4>
    </div><br><br>

    <div class="container">
        <h2>Views Records
            <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
        </h2>
        <table class="table table-bordered table-striped" id="usertable">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($sel as  $val) { ?>

                    <tr>
                    <td><?php echo  $val['id'];  ?></td>
                    <td><?php echo  $val['name'];  ?></td>
                    <td><?php echo  $val['email'];  ?></td>
                    <td><?php echo  $val['username'];  ?></td>
                    <td>
                        <a href="edit.php?editId=<?php echo $val['id']; ?>" style = "color:green" >                         
                        <i class="fa-solid fa-pen" aria-hidden="true"></i>
                        </a>
                        <a href="index.php?deleteId=<?php echo $val['id']; ?>" style = "color:red"
                         onclick="confirm('Are you sure want to delete this record')" >
                         <i class="fa-solid fa-trash-can" aria-hidden="true"></i>
                        </a>
                    </td>
                    </tr>
                    
                <?php  } ?>
            </tbody>

        </table>
    </div>


</body>
</html>