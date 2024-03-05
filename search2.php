<html>
    <head>
    </header>
    <title>Search by its ID</title>
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
        <body>
           <center>
            <div class="container">
            <form id="form_2" action="" method="post">
        <input type="submit" name="submit_2" value="Submit" />
    </form>
            </div>
            <div calass="container">
                <form action="" id="form_1" method="POST">
                    <input type="number" name="id"  class="btn" placeholder="Enter Employee/Student ID" />
                    <input type="submit" name="search" class="btn" value="search by ID">
                </form>
                <table>
                    <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Father Nmane</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    </tr><br>

              <?php 
                          $connection = mysqli_connect("localhost","root","", "three38inc");
                          $db = mysqli_select_db($connection, 'three38inc');

                          if(isset($_POST['search']))
                          {
                            $id = $_POST['id'];
                           $query = "SELECT * FROM employee where id = $_POST[id]";
                           $query_run = mysqli_query($connection,$query);
                           

                           While($row = mysqli_fetch_array($query_run))
                           {
                              ?>
                                <tr>
                            <td><?php echo $row['fname']; ?> </td>
                            <td><?php echo $row['lname']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['password']; ?> </td>
                            <td><?php echo $row['fathername']; ?> </td>
                            <td><?php echo $row['address']; ?> </td>
                            <td><?php echo $row['phone']; ?> </td>
                            
                        </tr> 
                              <?php
                           }
                        }
                        ?>
                           
                </table>
            </div>
           </center>
        </body>
    
</html>
