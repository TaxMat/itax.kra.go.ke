
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search data</title>
        <link rel="stylesheet" href="https://maxcdn.boostrapcdn.com/boostrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
    <style>
 body{
    background-color: grey;
 }
 table,th,td{
    border: 2px solid black;
    width: 1100px;
    background-color: grey;
 }
 .btn{
    width: 10%;
    height: 5%;
    font-size: 22px;
    padding: 0px;
 }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
    <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" name="search" placeholder="search here...">
                <button type="submit" class="btn btn-primary">search</button>
            </div>
           </form>
        </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="text-center">How to create Search box and filter dater using php</h4>
</div>
<div class="card-body">
    <table class="table table-bordered">
        <thead>
            <tr>
                     <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Father Nmane</th>
                    <th>Address</th>
                    <th>Phone Number</th>
            </tr>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost", "root", "","three38inc");
                    if(isset($_GET['search']))
                    {

                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM employee WHERE CONCAT(id,fname,lname,email,password,fathername.address,phone) LIKE '%$filtervalues%' ";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                       foreach($query_run as $items)
                       {
                        ?>
                         <tr>
                         <td><?=  $items['id']; ?></td>
                         <td><?=  $items['fname']; ?></td>
                         <td><?=  $items['lname']; ?></td>
                         <td><?=  $items['email']; ?></td>
                         <td><?=  $items['password']; ?></td>
                         <td><?=  $items['fathername']; ?></td>
                         <td><?=  $items['address']; ?></td>
                         <td><?=  $items['phone']; ?></td>
                    </tr>
                        <?php
                    
                       }
                    }
                    else
                    {
                    ?>
                    <tr>
                        <td colspan="8">NO record found</td>
                    </tr>
                    
                    <?php
                    }
                }
                ?>
            
            </tbody>
        </thead>
    </table>
</div>

            </div>
        </div>
    </div>

     </div>
</div>

</body>
</html>

